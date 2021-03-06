<?php
//1.	Создайте массив, в котором имеется как минимум 1 уровень вложенности.
// Преобразуйте его в JSON.  Сохраните как output.json

// Преобразовываем php-массив в строку в формате JSON
$my_array = array('dog', 'cat', 'turtle', array('bird', 'fish'));
$my_json = json_encode($my_array); //Возвращает JSON-представление данных
file_put_contents('output.json', $my_json); //Пишет строку в файл
echo 'изначальный массив это:';
echo $my_json;
echo '<br/>';
//Случайным образом решите изменять данные или нет.
$random_number = rand(0,1);
if ($random_number = 1) {
    $my_json[2] = 'w';
}

$my_json2=$my_json;
echo 'изменённый массив это:';
echo $my_json2;
echo '<br/>';
// Сохраните как output2.json.

file_put_contents('output2.json', $my_json2);

//Откройте оба файла. Найдите разницу и выведите информацию об отличающихся элементах
//Нужно сравнить массивы и вывести разницу. Это делается через цикл и оператор сравнения

$localfile = json_decode(file_get_contents("output.json"));
$localfile2 = json_decode(file_get_contents("output2.json"));
echo '<br/>';
for ($i=0;$i<=count($localfile);$i++)
{
    if($localfile[$i] != $localfile2[$i])
    {
        echo 'отличающиеся элементы:' . " " . $localfile[$i] . " , " . $localfile2[$i];
    }
}
?>
