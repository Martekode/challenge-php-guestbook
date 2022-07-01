<?php 
require './code/Post.php';
require './code/Postloader.php';

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
        <input type="text" placeholder="title">
        <input type="text" placeholder="your name">
        <input type="text" placeholder="Select Date"/>
        <input type="text" placeholder="type your message here">
        <button name="submit" class="btn btn-info">submit</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   
</body>
</html>