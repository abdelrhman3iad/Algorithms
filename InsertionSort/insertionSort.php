<?php

function insertionSort($unsortedArray)
{
    for($i = 1 ; $i<count($unsortedArray);$i++)
    {
        $key = $unsortedArray[$i];
        for($j = $i - 1 ; $j>=0;$j--)
        {
            if( $key < $unsortedArray[$j] )
            {
                $unsortedArray[$j+1] = $unsortedArray[$j];
            }
            else
            {
                break;
            }
        }
        $unsortedArray[$j+1] = $key ;
    }
    foreach($unsortedArray as $sortedArray)
    {
        echo " | " .$sortedArray . " | ";
    }
}

$unsortedArray = [ 3 , 0 , 9 , 15 , 2 , 5];

insertionSort($unsortedArray);