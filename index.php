<?php
class Movie{
    private $title='prova';
    private $year;
    private $genre;
    private $vote;
    private $logline;
    public function __construct()
    {
        
    }
    public function getTitle():string{
        return $this->title;
    }
    public function setTitle(string $title):void{
        $this->title=$title;
    }
    public function getYear():int{
        return $this->year;
    }
    public function setYear(int $year):void{
        $this->year=$year;
    }
    public function getGenre():string{
        return $this->genre;
    }
    public function setGenre(string $genre):void{
        $this->genre=$genre;
    }
    public function getVote():int{
        return $this->vote;
    }
    public function setVote(int $vote):void{
        $this->vote=$vote;
    }
    public function getLogLine():string{
        return $this->logline;
    }
    public function setLogLine(string $logline):void{
        $this->logline=$logline;
    }
}
$movie1= new Movie();
$movie2= new Movie();

var_dump($movie1);
var_dump($movie2);
?>