<?php
/*создаём/пишем массив*/

$array = range(0,99);
shuffle($array);
$hand = fopen("file.csv","w");
for($i=0;$i<=count($array);$i++)
{
    fwrite($hand,$array[$i]);
}


/*выводим/читаем массив*/

$row = 1;
if (($hand = fopen("file.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($hand, 1000, ",")) !== FALSE) {
        $num = count($data);
        echo "<p> $num поле в строке $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";
        }
    }

    // посчитаем сумму четных чисел

    for ($i = 0; $i<=count($hand);$i++)
    {
        if($hand[$i]%2)
        {
            $s = $s + $hand[$i];
        }
    }
    echo 'сумма всех четных чисел = ' . $s;

    fclose($hand);

}
?>