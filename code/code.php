<?php
declare(strict_types=1);

function isEmpty(){
    $keys=["title","name","message","author","date"];
    foreach($keys as $key){
        if($_POST[$key] == ''){
            throw new Exception('empty '. $key.' input');
        }
    }
}