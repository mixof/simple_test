<?php
//______________________________________________________________________
//Сумма значений массива

$array=[2,4,8,6,25,41,19,32,94,81,25,10,11,47,35,92,1,0,0,4,3,5,6];

function custom_sum(array $array)
{
  $sum=0;
  
    foreach($array as $item)
    {
        $sum+=$item;
    }
    
    return $sum;
}

echo "Сумма значений (встроенная функция): ".array_sum($array);

echo "<br>Сумма значений (своя функция): ".custom_sum($array);

//______________________________________________________________________
//Упорядочивание городов

$text="Донецк Моска Ростов Киев Амстердам Рязань Макеевка Омск Казань Севастополь Ялта Пятигорск Сочи Луганск";

function sort_city(string $text="")
{
    $sorted_text="";
    $data=preg_split("/\s+/",$text);
    sort($data, SORT_STRING); 
    foreach($data as $item)
    {
        $sorted_text.=$item." ";        
    }
    
    return $sorted_text;
}

echo "<br>Отсортированный текст: ".sort_city($text);

//________________________________________________________________________________
// Перевод Underscore в camelCase

$underscore="hello_big_world_camel_case";

$key = lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $underscore))));

echo "<br>Перевод в camelCase: ".$key;

//_______________________________________________________________________________
// Сумма цифр числа

$number=2517;

$result=array_sum(str_split($number));

echo "<br>Сумма цифр: ".$result;

//________________________________________________________________________________
//Поиск дублей и сортировка без встроенных функций

$array=[0,5,2,9,17,0,6,32,33,54,78,2,5,17,1];
//$array=[9,8,7,6,5,4,3,2,1];

function hasDuplicates(array $array)
{
    $tmp_array=array_count_values($array);
    
    foreach($tmp_array as $item)
    {
        if($item>1) return true;
    }
    
    return false;
}

echo "<br>Наличие повторов в массиве: ".(hasDuplicates($array)? "Да. ":"Нет.");

for ($j = 0; $j < count($array) - 1; $j++){
    for ($i = 0; $i < count($array) - $j - 1; $i++){
        if ($array[$i] > $array[$i + 1]){
            $tmp_var = $array[$i + 1];
            $array[$i + 1] = $array[$i];
            $array[$i] = $tmp_var;
        }
    }
}

echo "</br> Отсортированный массив: ";
print_r($array);
    