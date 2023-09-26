<?php
    //parent class 
    abstract class Car {
        public $name;
        public function __construct($name)
        {
            $this->name = $name;
        }
        abstract public function intro() : string;
    }

    //child classes 
    class Audi extends Car  {
        public function intro(): string
        {
            return " im a geman car my name is $this->name";
        }
    }
    class Volvo extends Car  {
        public function intro(): string
        {
            return " im a Swedish car my name is $this->name";
        }
    }
    class Citroen extends Car  {
        public function intro(): string
        {
            return " im a Frensh car my name is $this->name";
        }
    }

    $Audi = new Audi("Audi");
    echo $Audi->intro();
    echo "<br>";
    $Volvo = new Volvo("Volvo");
    echo $Volvo->intro();
    echo "<br>";
    $Citroen = new Citroen("Citroen");
    echo $Citroen->intro();
    echo "<br>";
?>