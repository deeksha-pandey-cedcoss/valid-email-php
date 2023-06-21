<h1>The input element</h1>
<form action="/" action="post">
    <label for="fname">String</label>
    <input type="text" id="fname" name="fname"><br><br>
    <small> <b>Format</b>word_digit("seven;zero;one")</small>
    <br>
    <input type="submit" value="Submit">
</form>
<?php


$str = explode(";", $_GET['fname']);

echo "Output for <b>$_GET[fname]</b> is : <br>";

foreach ($str as $key =>  $value) {

    switch ($value) {
        case "one":
            echo "1";
            break;
        case "two":
            echo "2";
            break;
        case "three":
            echo "3";
            break;
        case "four":
            echo "4";
            break;
        case "five":
            echo "5";
            break;
        case "six":
            echo "6";
            break;
        case "seven":
            echo "7";
            break;
        case "eight":
            echo "8";
            break;
        case "nine":
            echo "9";
            break;
        case "zero":
            echo "0";
            break;
        default:
            echo "Not appropriate choice";
    }
}

