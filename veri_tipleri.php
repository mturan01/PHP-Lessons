<?php
#Veri Tipleri
//string ='Mehmet',"2",
//boolean = true/false
//integer = 1,2,3
//Float 2.5
//Array =dizi
//null

//gettype();//değişkenin veri tipinin ne olduğunu öğrenebiliyoruz.
$degisken=2;
$degisken1=2.5;
$degisken2=false;
$degisken3="Mehmet";
$degisken4=[];
$degisken5=new stdClass();
echo gettype($degisken);
echo gettype($degisken1);
echo gettype($degisken2);
echo gettype($degisken3);
echo gettype($degisken4);
echo gettype($degisken5);
