<?php
class Value {
    protected $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function getValue() {
        return $this->value;
    }
}

$three = new Value(3);
$four = new Value(4);

$closure = function ($delta) { var_dump($this->getValue() + $delta); };
$closure->call($three, 4);
$closure->call($four, 6);

echo "\n\n";

class Valuen {
    private $value;
    private $name;

    public function __construct($value, $name="nome basico") {
        $this->value = $value;
        $this->setName($name);
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
}

$foo = new Valuen('Foo', 'Nome um');
$bar = new Valuen('Bar', 'Nome dois');

$closure1 = function () { 
    var_dump($this->value); 
    var_dump($this->getName());
};
$closure1->call($foo);
$closure1->call($bar);

?>