<?php
class shopping_item
{
    protected $price = null;
    protected $name = '';

    public function __construct($name)
    {
        $this->name =$name;
    }
    public function __set($name,$value)
    {
        if ($name == 'price'){
            $this->price = round(floatval($value),2);
        }
    }

    public function __get($name)
    {
        if ($name == 'price') {
            return number_format($this->price);
        }
    }

    public function __toString()
    {
        // return $this->name;
        return 'This is the result of __toString() method: '. serialize($this);
    }
}

$trousers = new shopping_item('Jeans');
$trousers->price = '780kc';


echo $trousers;
echo $trousers->price;

class shoes extends shopping_item
{
    public $size;
}