<?php
/*
        function sayi($i)
        {
            echo $i;
            if ($i < 5) {
                $i++;
                sayi($i);
            }
        }

        sayi(1);
*/
$categories = [
    [
        'id' => 1,
        'parent' => 0,
        'name' => 'Front End'
    ],
    [
        'id' => 2,
        'parent' => 0,
        'name' => 'Back End'
    ],
    [
        'id' => 3,
        'parent' => 2,
        'name' => 'PHP'
    ],
    [
        'id' => 4,
        'parent' => 1,
        'name' => 'VueJs'
    ],
    [
        'id' => 5,
        'parent' => 2,
        'name' => 'NodeJS'
    ],
    [
        'id' => 6,
        'parent' => 5,
        'name' => 'ExpressJS'
    ],
    [
        'id' => 7,
        'parent' => 3,
        'name' => 'Laravel'
    ],
];
function getCategories($arr, $par=0)
{
    $html = '';
    $html .= '<ul>';
    foreach ($arr as $value) {
        if ($value['parent'] == $par) {
            $html .= '<li>';
            $html .= $value['name'];
            $html .= getCategories($arr,$value['id']);
            $html .= '</li>';
        }
    }
    $html .= '</ul>';
    return $html;
}

echo getCategories($categories, 0);