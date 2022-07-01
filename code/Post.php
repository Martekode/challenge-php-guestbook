<?php class Post{
    private string $title;
    private string $date;
    private string $message;
    private string $author;

    public function __construct($title, $date, $message, $author){
        $this->title = $title;
        $this->date = $date;
        $this->message = $message;
        $this->author = $author;
    }
    public function getTitle(){
        return $this->title;
        }
    public function getDate(){
        return $this->date;
        }
    public function getMessage(){
        return $this->message;
        }
    public function getAuthor(){
        return $this->author;
        }
}