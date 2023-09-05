<!-- Alfan Lukeyan Rizki 5025211046 -->
<?php

require_once("MobilePhone.php");
require_once("Smartphone.php");
require_once("Inventory.php");

$iphone = new MobilePhone("iPhone 13", "Apple", 11999000, 50);
$samsung = new MobilePhone("Galaxy A54", "Samsung", 6399000, 40);

$inventory = new Inventory();

$inventory->addPhone($iphone);
$inventory->addPhone($samsung);

echo "Inventory:\n";
foreach ($inventory->displayInventory() as $phoneInfo) {
    echo $phoneInfo . "\n";
}

/*
    Update the price and stock quantity of iPhone 13 and delete Galaxy S21 from the inventory.
 */
$inventory->updatePhone("iPhone 13", 11999001, 30);
$inventory->deletePhone("Galaxy A54");


/*
    Display the updated inventory.
 */
echo "\nUpdated Inventory:\n";
foreach ($inventory->displayInventory() as $phoneInfo) {
    echo $phoneInfo . "\n";
}

?>