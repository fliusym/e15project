<?php

require('wordDictionary.php');

$wordsDic = array(
'this',
'is',
'a',
'just',
'joke',
'good',
'man',
'what',
'when',
'where',
'dock',
'damn'
);

if(count($matchArray) > 10)
{
    $wordsDic = $matchArray;
}

$specialCharacters = array('@','$','%','&','*');
$password = "";


if(array_key_exists('numberOfWords',$_POST))
{
    //get the number of words
    $number_words = $_POST['numberOfWords'];
    //get random from words dictionary
    $r = array_rand($wordsDic,$number_words);

    //if it is array
    if(is_array($r))
    {
        $password = $wordsDic[$r[0]];
        //use - as default seperator
        for($i = 1; $i < $number_words; $i++)
        {
            $password = $password . "-" . $wordsDic[$r[$i]];
        }
    }
    else //it is a single character
    {
        $password = $wordsDic[$r];
    }

    //if add special charaacter is turned on add special char at the end
    if(array_key_exists('addSpecialCharacter',$_POST))
    {
        $specialChar = $specialCharacters[array_rand($specialCharacters)];
        $password = $password . $specialChar;
    }
    
    //if add number is turned on add the number at the end
    if(array_key_exists('addNumber',$_POST))
    {
        $digital = rand(1,9);
        $password = $password . $digital;
    }
    
}



