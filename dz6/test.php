<?php

//function my_html($a)
//{
//    if ($a == '<input>') {
//        return '<input type="text" name="$name" value="ghbk" placeholder="$placeholder">';
//    } elseif ($a == '<textarea>') {
//        return '<textarea></textarea>';
//    }
//
//    return "Неправильный элемент";
//
//}
//
//$a = '<textarea>';
//echo my_html($a);


$string = "HelloworldMynameisilya";

$array = [];
for ($i = 0; $i < strlen($string);) {
    $word = '';
    for ($j = 0; $j < 3; $j++) {
        $word .= $string[$i];
        $i++;
    }
    $j = 0;
    $array[] = $word;
    
    
}
echo "<pre>";
var_dump($array);
echo "</pre>";

?>
