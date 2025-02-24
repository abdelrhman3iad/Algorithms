<?php

function getFactorial($number)
{
    if( $number == 1 )
        {
            return 1;
        }
    else
        {
            return $number * getFactorial($number - 1);
        }
}

echo getFactorial(5);