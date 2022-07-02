<?php
class Postloader{

    public function savePost(POST $post){
        $data=[];
        $data['title']=$post->getTitle();
        $data['date']=$post->getDate();
        $data['message']=$post->getMessage();
        $data['author']=$post->getAuthor();
        $currentFile = json_decode(file_get_contents('D:\WebPages\www\challenge-php-guestbook\db\db.txt'),true);
        $currentFile[]= $data;
        $dataJSON = json_encode($currentFile);
        
        file_put_contents('D:\WebPages\www\challenge-php-guestbook\db\db.txt',$dataJSON);
    }
    public function getPosts(){
        $stdPosts = json_decode(file_get_contents('D:\WebPages\www\challenge-php-guestbook\db\db.txt'));
        var_dump($stdPosts);
    }
}