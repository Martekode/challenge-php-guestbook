<?php
declare(strict_types=1);

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