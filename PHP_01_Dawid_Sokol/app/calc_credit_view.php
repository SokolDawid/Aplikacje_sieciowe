<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
</head>
<body style="margin-left: 20px;">
<h2>Kalkulator kredytowy</h2>
<form action="<?php print(_APP_URL); ?>/app/calc_credit.php" method="post">
	<label for="id_amount">Kwota kredytu<br></label>
        <input id="id_amount" type="text" name="amount" value="<?php isset($amount) ? print($amount): null; ?>"><br><br>
        
        <label for="id_period">Na ile lat<br></label>
        <input id="id_period" type="text" name="period" value="<?php isset($period) ? print($period): null; ?>"><br><br>
        
        <label for="id_interest_rate">Oprocentowanie<br></label>
        <input id="id_interest_rate" type="text" name="interest_rate" value="<?php isset($int_rate) ? print($int_rate): null; ?>"><br><br>
        
        <input type="submit" value="Oblicz">
</form>	

<?php
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
        <div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: lightgray; width:300px;border: solid black; ">
        <?php echo 'Rata miesięczna: '. number_format($result, 2); ?>
        </div>
        <?php } ?>

</body>
</html>