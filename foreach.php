
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CheckBox</title>
</head>
<body>
<?php
$cities = ['Adana', 'Mersin', 'Antalya', 'Ankara'];
$plaka_no = ['01', '33', '07', '06'];
$nufus = ['10000 ', '20000', '30000', '40000'];
$checkbox=[$plaka_no,$cities,$nufus];
echo '<pre>';
#print_r($checkbox);
#foreach ($checkbox as  $value) {
#   echo $value[0] . '<br>';
#}
//foreach ($cities as $key=>$value){
//  echo $key.'-'.$value.'<input type="checkbox" class="box1">'.'<br>';
//}
?>
<hr>
<table>
    <label>Tümünü Seç</label>
    <input type="checkbox" onclick="CheckAll('box', this)"/>
    <tr>
        <td>ID</td>
        <td>&nbsp;</td>
        <td>Plaka No</td>
        <td>&nbsp;</td>
        <td>Şehirler</td>
        <td>&nbsp;</td>
        <td>Nüfus</td>
        <td>&nbsp;</td>
        <td>Durum</td>
    </tr>
   <tr>
        <td><?php foreach ($checkbox[0] as $key => $value) {
                echo $key . '<br>';
            } ?></td>
        <td>&nbsp;</td>
        <td style="text-align: center"><?php foreach ($checkbox[0] as $key => $value) {
                echo $value . '<br>';
            } ?></td>
        <td>&nbsp;</td>
        <td><?php foreach ($checkbox[1] as $key => $value) {
                echo $value . '<br>';
            } ?></td>
        <td>&nbsp;</td>
        <td><?php foreach ($checkbox[2] as $key => $value) {
                echo $value . '<br>';
            } ?></td>
        <td>&nbsp;</td>
        <td><?php foreach ($cities as $key => $value) {
                echo '<input type="checkbox" class="box">' . '<br>';
            } ?></td>
    </tr>

</table>
<br>
<hr>

<script>
    function CheckAll(className, elem) {
        var elements = document.getElementsByClassName(className);
        var l = elements.length;

        if (elem.checked) {
            for (var i = 0; i < l; i++) {
                elements[i].checked = true;
            }
        } else {
            for (var i = 0; i < l; i++) {
                elements[i].checked = false;
            }
        }
    }
</script>
</body>
</html>
