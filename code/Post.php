<?php class Post{
    private string $title;
    private string $date;
    private string $message;
    private string $author;

    public function __construct($title,$date, $message, $author){
        $this->title = htmlspecialchars($title , ENT_QUOTES);
        $this->date = $date; 
        $this->message = htmlspecialchars($message , ENT_QUOTES);
        $this->author = htmlspecialchars($author , ENT_QUOTES);
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