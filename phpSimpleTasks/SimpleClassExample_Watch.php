<?php

class Watch
{
    private $manufacturer='';
    private $price=0;
    private $releasedYear=0;
    private $gender='';

    public function __construct($gender, $price, $manufacturer)
    {
        $this->manufacturer = $manufacturer;
        $this->price = $price;
        $this->gender = $gender;
    }

    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }
    public function getManufacturer()
    {
        return $this->manufacturer;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setReleasedYear($releasedYear)
    {
        $this->releasedYear = $releasedYear;
    }
    public function getReleasedYear()
    {
        if ($this->releasedYear == 0){
            return "Not available";
        }
        return $this->releasedYear;
    }
    public function setGender($gender)
    {
        $this->gender = $gender;
    }
    public function getGender()
    {
        return $this->gender;
    }

    public function __toString(){
        return "<b>Watch Specification</b><br><br> Manufacturer: $this->manufacturer<br> Price: $this->price$<br>
        Released Year: ". $this->getReleasedYear()."<br> Gender: $this->gender<br><br>";
    }
}
$watch = new Watch('man', 100, 'fossil');
$watch->setReleasedYear(2015);
$watch1 = new Watch('woman',1500,'CK');

echo $watch;
echo $watch1;
