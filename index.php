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
<?php $muutuja1 = 3; ?>
<?php $muutuja2 = 3; ?>
<?php $muutuja3 = 4; ?>
<?php $muutuja4 = 5; ?>

<?php
 if ($muutuja3 > $muutuja4) {
        echo "Muutuja 3 suurem kui m4";
   } elseif ($muutuja1 = $muutuja2) {
        echo "Kas esimene ja teine muutuja on võrdsed";
    } 
?> <br>

<?php echo isset($nothing) ?><br>

<?php

	if (!isset($nothing)) {
		echo "If on t6si";
	}
?>
<h3> Switch </h3>

<?php $current_language = 'ru';
    switch($current_language) {
      case 'et':
    echo "Tere! Kuidas sul läheb?";
      break;
      case 'ru':
    echo "Здравствуйте! Как вы делаете?";
      break;  
      case 'fi':
    echo "Hei! Miten menee?";
      break;
    }
    ?>

</body>
</html>