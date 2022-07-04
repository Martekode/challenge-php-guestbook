<?php
declare(strict_types=1);

function isEmpty():POST{
    $keys=["title","name","message"];
    foreach($keys as $key){
        if($_POST[$key] == ''){
            throw new Exception('empty '. $key.' input');
        }  
    }
    $post = new Post($_POST['title'], date("d-m-Y") ,$_POST['message'],$_POST['name']);
    return $post;
}