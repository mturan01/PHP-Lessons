<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form id="myForm">
    <?php
    $value =    array("Peter"=>35, "Ben"=>37, "Joe"=>43);
    var_dump($value);
    foreach ($value as $val => $data){
        echo '<input type="checkbox" id="vehicle1" name="vehicle1" value="'.$data.'" /><label>'.$val.'</label>';
    }
    ?>

    <input type="submit" name="" value="submit">
</form>
<script>
    $('form').on('submit', function( event ) {

        console.log($(this).serialize());

        event.preventDefault();

        $.ajax({
            url: '/path/to/file',
            type: 'POST',
            dataType: 'json',
            data: {param1: $(this).serialize()},
            success : function(response){
                alert(response);
            }
        });
    });
</script>
</body>
</html>