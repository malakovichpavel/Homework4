<?php
$xmlPath = './data.xml';
$xml = simplexml_load_file($xmlPath);

$attrs = $xml->attributes();
echo "PurchaseOrder: PurchaseOrderNumber= " . $attrs['PurchaseOrderNumber'] .
    "   OrderDate= " . $attrs['OrderDate'] . '<br/><br/>';

foreach ($xml->Address as $Address) {

    echo "Address Type= " . $Address['Type'] . '<br/>' .
        "Name: " . $Address->Name . ' , ' .
        "Street: " . $Address->Street . ' , ' .
        "City: " . $Address->City . ' , ' .
        "State: " . $Address->State . ' , ' .
        "Zip: " . $Address->Zip . ' , ' .
        "Country: " . $Address->Country . ' , ' .
        '<br/><br/>';
}

echo "DeliveryNotes: " . $xml->DeliveryNotes . '<br/><br/>';

foreach ($xml->Items as $Items) {
    foreach ($Items as $Item) {
        echo "Item PartNumber = " . $Item['PartNumber'] . '<br/>' .
            "ProductName: " . $Item->ProductName . ' , ' .
            "Quantity: " . $Item->Quantity . ' , ' .
            "USPrice: " . $Item->USPrice . ' , ' .
            "Comment: " . $Item->Comment . ' , ' .
            "ShipDate: " . $Item->ShipDate . ' , ' .
            '<br/><br/>';
    }
}

?>