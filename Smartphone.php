<?php

/*
    Polymorphism : Smartphone class is an example of polymorphism that overrides the displayInfo() method from MobilePhone class to display different information.
 */
class Smartphone extends MobilePhone {

    /* Operating system is the additional property */
    private $operatingSystem;

    public function __construct($name, $brand, $price, $stockQuantity, $operatingSystem) {
        parent::__construct($name, $brand, $price, $stockQuantity);
        $this->operatingSystem = $operatingSystem;
    }

    /* Getter and setter for operating system */
    public function getOperatingSystem() {
        return $this->operatingSystem;
    }
    public function setOperatingSystem($operatingSystem) {
        $this->operatingSystem = $operatingSystem;
    }

    /* Overriding the displayInfo() method from MobilePhone class */
    public function displayInfo() {
        return parent::displayInfo() . ", OS: {$this->operatingSystem}";
    }
}

?>