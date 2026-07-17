<?php

// Strings -> sequence of characters (literals = passing messages b/w client and server)

$str = "All is Well!"; // Declaring String

echo $str;

//Length of String
echo strlen($str);

// No. of Words
echo "<br> No. of words in a Given String: ".str_word_count($str);

//to LowerCase
echo "<br> Given String in Lowercase: ".strtolower($str);

//to UpperCase
echo "<br> Given String in Uppercase: ".strtoupper($str);

//First Letter Capital
echo "Given string with first letter in uppercase: ".ucfirst($str);

//First Letter Lowercase
echo "Given string with first letter in lowercase: ".lcfirst($str);

// Uppercase First Words
echo "<br> Given String with first letter of each word in uppercase".ucwords($str);

// echo "<br> Given String with first letter of each word in lowercase".lcwords($str);


//REVERSE
$rev_str = strrev($str);
echo "<br>String in Reverse: ".$rev_str;

//SUB-STRING
echo "Substring of Given String: ". substr($str,5,6);

/* ----------------------------------------- */

// REPLACE
$str_seg = "ll";
echo "<br>Position of $str_seg in $str :".strpos($str, $str_seg);

$str_seg1 = "We";
echo "<br>Position of $str_seg in $str :".strpos($str, $str_seg1);

$st1 = str_replace("We", "ab", $str);
echo "<br>".$st1;

/* ----------------------------------------- */

//COMPARISON

echo "<br>".strcmp("All", "all");
//ASCII Comparison

echo "<br>".strcmp("always","all");
//Length Comparison

/* ----------------------------------------- */

//TRIM
echo "<br>";
echo trim($str);
echo "<br>";
echo ltrim($str);
echo "<br>";
echo rtrim($str);

/* ----------------------------------------- */

//EXPLODE (string to array)

$st_new = explode(" ", $str);
echo "<br>";
print_r($st_new);

/* ----------------------------------------- */

// IMPLODE (array to string)

$arr = array("aa", "bb", "cc");
echo "<br>";
echo implode(",",$arr);

/* ----------------------------------------- */

// REPEAT

echo "<br>";
echo str_repeat("*",5);

/* ----------------------------------------- */

// PADDING

echo "<br>".str_pad($str,11,"*");

// SHUFFLE

echo "<br>".str_shuffle($str);

// SUB-STRING in s String or not

echo "<br>".str_contains($str, "Well");

// Starts with

echo "<br>".str_starts_with($str, "Everything");

//Ends with

echo "<br>".str_ends_with($str, "Well!");

$prg = "BCA";
$dur = 3;

// %s -> str, %d -> Numeric

echo sprintf("Duration of %s Programme is %d Years", $prg, $dur);

/* ----------------------------------------- */

// Security Functions

// Forgot Password

echo "<br>".md5("password");

echo "<br>".sha1("password");

// ENCODING / DECODING

$msg = base64_encode($str);
echo "<br>".$msg;

echo "<br>".base64_decode($msg);

/* ----------------------------------------- */

// STRIP

$st_new = "<h2><p>Full Stack Training<div><big>";
echo "<br>";
echo strip_tags($st_new);

?>