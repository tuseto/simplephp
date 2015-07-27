<?php

class Computer
{
    private $manufact='';
    private $model='';
    private $price=0;
    private $cpuArchitecture='';
    
    function __construct($manufact, $model, $price, $cpuArchitecture)
    {
        $this->manufact=$manufact;
        $this->model=$model;
        $this->price=$price;
        $this->cpuArchitecture=$cpuArchitecture;
    }
    public function __toString(){
        return get_class($this)." parameters:<br> 
        Manufacturer: $this->manufact<br>
        Model: $this->model<br>
        Price: $this->price$<br>
        Cpu: $this->cpuArchitecture";
    }
}

class Laptop extends Computer
{
    private $weight=0;
    private $batteryLife=0;
    private $screenSize=0;
    function __construct($manufact,$model,$price,$cpuArchitecture,$weight,$batteryLife,$screenSize)
    {
        parent::__construct($manufact,$model,$price,$cpuArchitecture);
        $this->weight = $weight;
        $this->batteryLife = $batteryLife;
        $this->screenSize = $screenSize;
    }
    public function __toString(){
        return parent::__toString().
        "<br>Weight: $this->weight<br>
        Battery Life: $this->batteryLife<br>
        Screen Size: $this->screenSize";
    }
}
$laptop = new Laptop('lenovo','star',200,'x64',5,4,15.6);
echo $laptop;
echo "<br><br>";
$comp = new Computer('IBM','m81',400,'x64');
echo $comp;