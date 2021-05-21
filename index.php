<?php

function isFirstLetterUpperCase($str)
{
    $pattern = '/^[A-Z]/';
    if (preg_match($pattern, $str)) {
        echo "String has charater is uppercase ";
    } else {
        echo "<br>"."String has character is not uppercase ";
    }
}

isFirstLetterUpperCase('CodeGym');
isFirstLetterUpperCase('cOdeGym');