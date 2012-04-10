<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Factory Pattern</title>
</head>

<body>
<?php

//Generic guitar information. Information that applies to all types of guitars.
abstract class Guitar {
   
    public function getType(){
        echo $this->type;
    }
}

//Class that holds all the details on how to make an Acoustic guitar.More properties can be added to each such class of course..
class Acoustic extends Guitar{
    private $type = "Acoustic";
   
    public function getType(){
        echo $this->type;
    }
}

//Class that holds all the details on how to make a classic guitar.
class Classic extends Guitar{
    private $type = "Classic";
   
    public function getType(){
        echo $this->type;
    }
}

//Class that holds all the details on how to make an electric guitar.
class Electric extends Guitar{
    private $type = "Electric";
   
    public function getType(){
        echo $this->type;
    }
}

//The guitar factory.  Input the type of guitar you want, and it will give it to you.
class GuitarFactory {
   
    //Different types of guitars.
    const ACOUSTIC = "Acoustic";
    const CLASSIC = "Classic";
    const ELECTRIC = "Electric";
   
    //Make the guitar that is selected.
    public static function createGuitar($GuitarType){
        switch($GuitarType){
            case self::ACOUSTIC:
                return new Acoustic();
                break;
            case self::CLASSIC:
                return new Classic();
                break;
            case self::ELECTRIC:
                return new Electric();
        }
        die("No such guitar exists");
    }
   
}

//Make a guitar factory
$GuitarFactory = new GuitarFactory();
//Create a guitar
$Acoustic = $GuitarFactory->createGuitar(GuitarFactory::ACOUSTIC);
//Run a method.
$Acoustic->getType();
?>
<br />
<?php

$Classic = $GuitarFactory->createGuitar(GuitarFactory::CLASSIC);
$Classic->getType();


?>
</body>
</html>