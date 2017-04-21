<?php

$ch = curl_init('https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json');

$curl = curl_exec($ch); // выполняем запрос curl
echo $curl;
curl_close($ch);

// из php получаем JSON

$jsonString = json_encode($ch);
file_put_contents('1.json', $jsonString);
echo $jsonString;

//	Выводим title и page_id

for ($i=0;$i<=count($jsonString);$i++)
{
    if($jsonString[$i] = 'title')
    {
        echo 'title = ' . $jsonString[$i];
    }
    if($jsonString[$i] = 'page_id')
    {
        echo 'page_id = ' . $jsonString[$i];
    }

}

?>