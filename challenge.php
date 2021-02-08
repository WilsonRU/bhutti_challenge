<?php 
    /*
        Using SOLID principles, write a program that prints all the numbers from 1 to 100. However, 
        for multiples of 3, instead of the number, print "BHUT". For multiples of 5 print "IT". 
        For numbers which are multiples of both 3 and 5, print "BHUT TI".
        But here's the catch: you can use only one `if`. No multiple branches, ternary operators or `else`.
        # Requirements
            * 1 if
            * You can't use `else`, `else if` or ternary
    */

    require ('vendor/autoload.php');
    
    use Challenge\Model\Number;
    
    $data = array();

    for ($i = 1; $i <= 100; $i++){
        $num = new Number($i);
        array_push($data, $num->multiple());
    }

    print_r($data);