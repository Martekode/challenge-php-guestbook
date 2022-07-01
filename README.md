# challenge-php-guestbook

## making a guestbook
as always we first start with the initial commit. this includes 3 files and one folder.(code = folder, 3 files = Poste.php; Postloader.php and index.php). inside the Index file i require the other two.

* # boilerplate
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Guestbook</title>
</head>
<body>
<div style="text-align: center;" class="container">
    <h1>Welcome to my Guestbook</h1>
    <p>On this website you can leave a comment, it will be displayed and stored remotely for you.</p>
</div>
<div style="text-align: center;" class="container">
    <form method="post">
        <input type="text" placeholder="type your message here">
        <button name="submit" class="btn btn-info">submit</button>
    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   
</body>
</html>
```
i created some standard html with an input field inside a form and an accompanying button.
added bootstrap too for some general styling.

* changed some stuff again
```html
    <form method="post">
        <input type="text" placeholder="title">
        <input type="text" placeholder="your name">
        <input type="text" placeholder="Select Date"/>
        <input type="text" placeholder="type your message here">
        <button name="submit" class="btn btn-info">submit</button>
    </form>
```
added the Post class and wrote this:
```php
class Post{
    private $title;
    private $date;
    private $content;
    private $author;

    public function __construct($title, $date, $content, $author){
        $this->title = $title;
        $this->date = $date;
        $this->content = $content;
        $this->author = $author;
    }
    public function getTitle(){
        return $this->title;
        }
    public function getDate(){
        return $this->date;
        }
    public function getContent(){
        return $this->content;
        }
    public function getAuthor(){
        return $this->author;
        }
    
}
```
* ## created logic for button press
```php
if(isset($_POST['submit'])){
    try{
        isEmpty();
    }catch(Exception $e){
        echo $e->getMessage();
    }  
}
```
as you can see it has a function and some error handing,
let's show you that real quick 
```php
require './code/code.php';
```
new file
```php
declare(strict_types=1);

function isEmpty(){
    $keys=["title","name","message","author","date"];
    foreach($keys as $key){
        if($_POST[$key] == ''){
            throw new Exception('empty '. $key.' input');
        }
    }
}
```
keys array to exclude button from the empty check, and throwing an exception if there is something empty
________
if nothing is empty then we're going to make a new POST object and pass the $_POST data as parameters.
```php
function isEmpty():POST{
    $keys=["title","name","message","date"];
    foreach($keys as $key){
        if($_POST[$key] == ''){
            throw new Exception('empty '. $key.' input');
        }  
    }
    $post = new Post($_POST['title'],$_POST['date'],$_POST['message'],$_POST['name']);
    return $post;
}
```
slight change in the button logic 
```php
if(isset($_POST['submit'])){
    try{
       $post = isEmpty();
       var_dump($post);
    }catch(Exception $e){
        echo $e->getMessage();
    } 
     
}
```
$post= isEmpty is to get the returned object from isEmpty and put it in a variable.
 