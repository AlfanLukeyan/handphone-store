<?php
/* 
    Abstraction : Inventory class is an example of abstraction that manages the inventory of phones.
    Inventory class has 4 methods: addPhone(), deletePhone(), updatePhone(), and displayInventory().
 */
class Inventory {
    private $inventory = [];

    public function addPhone($phone) {
        $this->inventory[] = $phone;
    }

    public function deletePhone($phoneName) {
        /* 
            array_filter() has been used to filter the inventory array and return a new array that does not contain the phone with the given name.
         */
        $this->inventory = array_filter($this->inventory, fn($phone) => $phone->getName() !== $phoneName);
    }

    public function updatePhone($phoneName, $newPrice, $newStockQuantity) {
        /* 
            foreach loop has been used to iterate over the inventory array and update the price and stock quantity of the phone with the given name.
         */
        foreach ($this->inventory as $phone) {
            if ($phone->getName() === $phoneName) {
                $phone->setPrice($newPrice);
                $phone->setStockQuantity($newStockQuantity);
                break;
            }
        }
    }

    public function displayInventory() {
        /* 
            array_map() has been used to display the information of each phone in the inventory array.
         */
        return array_map(fn($phone) => $phone->displayInfo(), $this->inventory);
    }
}
?>