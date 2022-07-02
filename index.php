<?php 
declare(strict_types=1);
require './code/Post.php';
require './code/Postloader.php';
require './code/code.php';

if(isset($_POST['submit'])){
    try{
       $post = isEmpty();
       $postloader = new PostLoader();
       #var_dump($post);
       $postloader->savePost($post);
       $posts = $postloader->getPosts();
       //var_dump($posts);
    }catch(Exception $e){
        echo $e->getMessage();
    } 

     
}

?>
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
        <input name="title" type="text" placeholder="title">
        <input name="name" type="text" placeholder="your name">
        <input name="date" type="text" placeholder="Select Date"/>
        <input name="message" type="text" placeholder="type your message here">
        <button name="submit" class="btn btn-info">submit</button>
    </form>
</div>
<div class="container">
    <div class="row g-2">
        <?php for ($i=0; $i < count($posts);$i++): ?>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 style="color:red;" class="card-title"><?= $posts[$i]->{'title'}; ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $posts[$i]->{'author'}; ?></h6>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $posts[$i]->{'date'}; ?></h6>
                        <p class="card-text"><?= $posts[$i]->{'message'}; ?></p>
                    </div>
                </div>
            </div>
        <?php endfor;?>    
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   
</body>
</html>