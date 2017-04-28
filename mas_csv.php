<?php
/*создаём/пишем массив*/

/*$array = range(0,99);
shuffle($array);
$hand = fopen("file.csv","w");
for($i=0;$i<=count($array);$i++)
{
    fwrite($hand,$array[$i]);
}*/


$list = range(0,99);
shuffle($list);
$fp = fopen('file.csv', 'w');

    fputcsv($fp, $list);

    // посчитаем сумму четных чисел

    for ($i = 0; $i<=count($list);$i++)
    {
        if($list[$i]%2)
        {
            $s = $s + $list[$i];
        }
    }
    echo 'сумма всех четных чисел = ' . $s;

    fclose($fp);

//}
?>