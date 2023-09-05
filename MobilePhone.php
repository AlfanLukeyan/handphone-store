<?php

/*
    Abstraction : MobilePhone class is an example of abstraction that represents a mobile phone which has relevant properties and methods.
 */

/*
    Inheritance  : Smartphone class is an example of inheritance that inherits the properties and methods from MobilePhone class.
 */
class MobilePhone {
    /*
        Encapsulation   : private properties (name, brand, price, and stockQuantity) is way to protect the properties from being accessed outside the class.
        Access modifier : public method (getName(), getBrand(), getPrice(), and getStockQuantity()) is way to access the private properties outside the class.
     */
    private $name;
    private $brand;
    private $price;
    private $stockQuantity;

    public function __construct($name, $brand, $price, $stockQuantity) {
        $this->name = $name;
        $this->brand = $brand;
        $this->price = $price;
        $this->stockQuantity = $stockQuantity;
    }

    // Getter dan setter for name
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }

    // Getter dan setter for brand
    public function getBrand() {
        return $this->brand;
    }
    public function setBrand($brand) {
        $this->brand = $brand;
    }

    // Getter dan setter for price
    public function getPrice() {
        return $this->price;
    }
    public function setPrice($price) {
        $this->price = $price;
    }

    // Getter dan setter for stock quantity
    public function getStockQuantity() {
        return $this->stockQuantity;
    }
    public function setStockQuantity($stockQuantity) {
        $this->stockQuantity = $stockQuantity;
    }

    public function displayInfo() {
        return "Name: {$this->name}, Brand: {$this->brand}, Price: \${$this->price}, Stock: {$this->stockQuantity}";
    }
}

?>
