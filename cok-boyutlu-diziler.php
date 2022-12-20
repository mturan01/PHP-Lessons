<?php
// Çok Boyutlu Diziler


$hayvanlar=[
    'Uçan Hayvanlar'=>['Kartal','Güvercin','Şahin'],
    'Sürüngen Hayvanlar'
];
echo '<pre>';

$ucan_hayvanlar =['Kartal','Güvercin','Şahin'];

echo $hayvanlar['Uçan Hayvanlar'][2];
echo '<br>';
$sayilar = [
    'a'=>[
        'b'=>[
            'c'=>[
1,2,3,4,5
            ]
        ]
    ]
];
echo $sayilar['a']['b']['c'][1];
