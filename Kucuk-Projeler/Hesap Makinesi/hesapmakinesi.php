<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hesap Makinesi</title>
</head>
<body>
<form action="onay.php" method="post">
    Birinci sayıyı giriniz : <input type="number" step="0.1" name="bsayi"><br>
    İkinci sayı giriniz : <input type="number" name="isayi"><br>
	Kullanacağınız operatörü giriniz: <input type="text" step="0.1" name="op"><br>

    <input type ="submit">
</form>

        <?php
	$bsayi = $_POST["bsayi"];
	$isayi = $_POST["isayi"];
	$op = $_POST["op"];
	
	if($op == "+"){
		echo $bsayi + $isayi;
	} elseif($op == "-"){
		echo $bsayi - $isayi;
	} elseif($op == "/"){
		echo $bsayi / $isayi;
	} elseif($op == "*"){
		echo $bsayi * $isayi;
	} else echo "Gecersiz Operator"
	
        ?>
</body>
</html>