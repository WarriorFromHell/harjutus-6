<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">
<title> harjutus-6 </title>
</head>
<body>
<h2> Tingimuslaused</h2>
<?php $a = 4; ?>
<?php $b = 5; ?>
<?php
    if ($a < $b) {
        echo "4 on väiksem kui 5";
    } elseif ($a = $a) {
        echo "4 on 4";
    } elseif ($b > $a) {
        echo "5 on suurem kui 4";       
    }

?> <br>

<?php $age = 25;?>
<?php $age_limit = 18;?>
<?php if ($age<$age_limit) {
	echo "mine koju";
	} elseif ($age > $age_limit) {
        echo "Olete piisavalt vana. Tulge edasi!";
        }
        ?>



</body>
</html>