<?php
/*
 Mantıksal Operatörler
$$ ve
|| veya
! değilse

 */
/*
 * VEYA OPERATÖRÜ(||)
 - Pilavımız var ama bulgur yok  (Olumlu)
- Pilav yok ama bulgur var      (Olumlu)
- Pilav da var bulgur da var    (Olumlu)
- Pilav da yok bulgur da yok    (Olumsuz)
  */

/*
 VE OPERATÖRÜ(&&)
- Pilavımız var ama köfte yok   (Olumsuz)
- Pilav yok ama köfte var       (Olumsuz)
- Pilav da var köfte da var     (Olumlu)
- Pilav da yok köfte da yok     (Olumsuz)
 */
/*
 $a = 3;
$b = 2;

echo ($a > $b) && ($a != $b); // Hem $a > $b hem de $a != $b durumları true sonucu verdiğinden; sonuç true olacaktır.
echo ($a > $b) || ($a == $b); // Hem $a > $b true $a == $b false sonucu verdiğinden; Veya(||) koşulunda sonuç true olacaktır.
 */