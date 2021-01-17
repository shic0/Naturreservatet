<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<=, initial-scale=1.0">
    <title>Results</title>
</head>
<body> -->

<?php 

class Animal {

    function __construct($sound, $height, $color) {
        $this->sound = $sound;
        $this->height = $height;
        $this->color = $color;
    }
    
    protected $sound;
    public $height;
    public $color;
}

class Cat extends Animal {
    public function getSound(){
       return $this->sound;  
    } 
}




$myAnimal = new Cat("Mjao", "30cm", "Black");



echo $myAnimal->getSound();






/*  
class Coconut extends Animal {
    function __construct($makeSound) {
       $this->makeSound = "woff"
        parent::__construct("");
    }
    
} */

?>
    
<!-- </body>
</html> -->