<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
//the begining class
  class SimpleBook
  {


    private $author;
    private $title;


    function __construct($author_in, $title_in) {
      $this->author = $author_in;
      $this->title  = $title_in;
    }


    function getAuthor() {return $this->author;}


    function getTitle() {return $this->title;}


  }

//the adapted class
  class BookAdapter 
  {


    private $book;


    function __construct(SimpleBook $book_in) {
      $this->book = $book_in;
    }


    function getAuthorAndTitle() {
      return $this->book->getTitle() . ' by ' . $this->book->getAuthor();
    }


  }
//an example
  echo 'BEGIN TESTING ADAPTER PATTERN'.BR;
  echo BR;


  $book = new SimpleBook("Nakov, Ivanov, Petrov",
                         "Programming in C#");
  
  $bookAdapter = new BookAdapter($book);
  
  echo 'Author and Title: '.$bookAdapter->getAuthorAndTitle();


  echo BR.BR;
  echo 'END TESTING ADAPTER PATTERN'.BR;


?>
</body>
</html>