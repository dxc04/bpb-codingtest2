# BPB - Code Test 2
Code Test 2 for Brownpaperbag

### Specifications
Create a class that has a property that consist of 10 randomize integer values, then create methods, that:
1. Sum method - randomly picks 2 numbers within the array and calculate the sum
2. Sort method - access an order parameters (ASC, DESC), and returns a result sorted based on the parameter
3. Average method - returns the average of all the value of the integers inside the property array
4. Create a class that inherits the main class and override the sum method and inside the override
   method calculate the sum of the values of start and last indexes of the array

### Pre-requisite
I've used composer autoloading for this to easily load classes and that it'll be extensible when need be.
With this, you'll need to have composer installed in your computer.
Also, I use PHP 7 for my code.

To get started you will need to clone this repo and then run the following:
```sh
$ cd BPB-CodingTest2
$ composer dump-autoload
```

#### Test the Code
I have also created a separate script `index.php` so that the classes can be seen in action. You can try it in two ways:

Via terminal
```sh
$ php index.php
```
Via browser
```sh
$ php -S localhost:8001
```
Open `http://localhost:8001` in the browser

