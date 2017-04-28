<?php

$ch = curl_init('https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$curl = curl_exec($ch); // выполняем запрос curl

// из php получаем JSON

$jsonString = json_decode($curl, true);
//echo '<pre>';
//var_dump($jsonString);

//	Выводим title и page_id
//echo count($jsonString);

foreach($jsonString as $key => $val)
{
    foreach($val  as  $inner_key => $value)
    {
        foreach ($value as $inner_key2 => $value2)
        {
                echo 'page_id = ' . $value2 ["pageid"];
                echo "<br />";
                echo 'title = ' . $value2 ["title"];
        }
    }
}

?>