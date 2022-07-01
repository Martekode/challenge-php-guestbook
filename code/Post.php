<?php class Post{
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