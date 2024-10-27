<?php 

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css">
</head>
<body style="margin-left: 20px;">
    
<div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button">kolejna chroniona strona</a>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">    

<form action="<?php print(_APP_URL); ?>/app/calc_credit.php" method="post" class="pure-form pure-form-stacked">
	<legend>Kalkulator kredytowy</legend>
        <fieldset>
        <label for="id_amount">Kwota kredytu</label>
        <input id="id_amount" type="text" name="amount" value="<?php out($amount) ?>">
        
        <label for="id_period">Na ile lat</label>
        <input id="id_period" type="text" name="period" value="<?php out($period) ?>">
        
        <label for="id_interest_rate">Oprocentowanie</label>
        <input id="id_interest_rate" type="text" name="interest_rate" value="<?php out($interest_rate) ?>">
        
        <input type="submit" value="Oblicz" class="pure-button pure-button-primary">
        </fieldset>
</form>	

<?php
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em; border: solid black;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
        <div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #ff0; width:25em; border: solid black; ">
        <?php echo 'Rata miesięczna: '. number_format($result, 2); ?>
        </div>
        <?php } ?>

</div>    
    
</body>
</html>