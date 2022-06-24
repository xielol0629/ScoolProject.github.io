<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tri2.css">
</head>
</head>
<body>
    <?php

        $link = mysqli_connect("localhost","a0102","pwd0102");
        mysqli_query($link, "SET NAMES 'UTF8'");
        mysqli_select_db($link,"a0102");

        $name = $_POST['name'];
        $loc = $_POST['loc'];
        $num = $_POST['num'];
        $phone = $_POST['phone'];

        // echo"$name $loc $num $phone";

        $sqlstr = "INSERT INTO travel VALUES ('".$name."','".$loc."','".$num."','".$phone."')";
        // echo "ok";
        mysqli_query($link, $sqlstr);

        mysqli_close($link); 





?>

	<div class="shopbox">
        <div class="boxpic">
            <img src="00.jpg" alt="">
        </div>
     <h1>恭喜預約成功</h1>
   	</div>
</body>
</html>