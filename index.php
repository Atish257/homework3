<?php
   $obj = new main();
   $text = "i am invincible";
   $arry = array(1,2,3,4,5,6,7,8); 

   $obj->fetchtext($text);
   $obj->fetcharray($arry);

   
   class main
   {
   	
   	public function __construct()
   	{
   		echo '<h1>String and Array Functions Demonstration</h1><hr><hr>';
   	}

   	public function fetchtext($stringt)
   	{
        echo "<h2>String function demonstration</h2>";

   		echo '<hr><h2>Printing the text:</h2>'; //print function
   		print($stringt);
   		echo'<hr>';
        
        echo '<h2>Making first letter capital:</h2>'; //ucfirst functioin
        $first = ucfirst($stringt);
        print($first);
        echo '<hr>';

        echo '<h2>Making all letters capital:</h2>'; // strtoupper function
        $upper = strtoupper($stringt);
        print($upper);
        echo '<hr>';

        echo '<h2>Reapeating the whole string:</h2>'; // str_repeat function  
        echo str_repeat("-=-", 10);
        echo '<hr>';

        echo '<h2>Shuffling the string:</h2>';
        $shuffled = str_shuffle($stringt); // str_shuffle function
        print($shuffled);
        echo '<hr>';

        echo '<h2>Converting a string to array:</h2>'; //str_split function
        $arr1 = str_split($stringt);
        print_r($arr1);
        echo '<hr>';

        echo '<h2>Reversing a String:</h2>'; //strrev function
        $reverse = strrev($stringt);
        print($reverse);
        echo '<hr>';

        echo '<h2>Lenght of the string:</h2>'; //strlen
        echo strlen($stringt);
        echo '<hr>';

        echo '<h2>Counting the number of substrings</h2>'; //substr_count
        echo substr_count($stringt, 'am');
        echo '<hr>';

        echo '<h2>Replacing a substring:</h2>'; //substr_replace
        echo substr_replace($stringt, 'was',2,-11);
        echo '<hr>';
   	}
    
    public function fetcharray($stringa)
    {
        echo '<h2>Array functions Demonstration</h2><hr>';

        echo '<h2>Printing an array:</h2>'; //print_r()
        print_r($stringa);
        echo '<hr>';

        echo '<h2>Converting an array to sub-arrays:</h2>'; //array_chunk()
        print_r(array_chunk($stringa, 2));
        echo '<hr>';
        
        echo '<h2>Filling elements in array with single element:</h2>'; //array_fill
        $a = array_fill(8, 3, 'Bun');
        print_r($a);
        echo '<hr>';

        echo '<h2>Padding an array:</h2>'; //array_pad
        $res = array_pad($stringa, 10, 0);
        print_r($res);
        echo '<hr>';

        echo '<h2>Popping of an element</h2>'; //array_pop
        array_pop($stringa);
        print_r($stringa);
        echo '<hr>';
        
        echo '<h2>Stacking an element:</h2>'; //array_push
        array_push($stringa, 8);
        print_r($stringa);
        echo '<hr>';

        echo '<h2>Returning an array containing all the elements of array1 after applying the callback function to each one:</h2>';  //array_map
        function cube($n)
        {
        	return($n*$n*$n);
        }
        $b = array_map("cube", $stringa);
        print_r($b);
        echo '<hr>';

        echo '<h2>Picking a random value:</h2>';//array_rand
        $ran = array_rand($stringa);
        echo $stringa[$ran];
        echo '<hr>';

        echo '<h2>Extract a slice of an array;</h2>'; //array_slice
        $slice = array_slice($stringa, 2, 5);
        print_r($slice);
        echo '<hr>';
        
        echo '<h2>Count elemenmts in an array;</h2>'; //count
        $no = count($stringa);
        echo 'The number of elements in the array is '.$no;
    }
   }
 ?>