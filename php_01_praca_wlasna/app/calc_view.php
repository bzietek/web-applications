<?php require_once dirname(__FILE__) . "/../config.php"; ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator Kredytowy</title>
</head>
<body>
<form action="<?php print(_APP_URL);?>/app/calc.php" method="get">
    Podaj kwotę : <input type="text" name="amount"> <br> <br>
    Na ile lat? (1-15) : <input type="number" min="1" max="15" name="period" value="1"> <br> <br>
    Oprocentowanie (5-20) : <input type="number" min="5" max = "20" name="rate" value="5">% <br> <br>
    <input type="submit" value="Oblicz">
</form>
<?php
#błędy jeżeli istnieją
if (isset($messages)) {
    if (count ($messages) > 0) {
        echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
        foreach ($messages as $key => $msg) {
            echo '<li>' . $msg . '</li>';
        }
        echo '</ol>';
    }
}
?>

<?php if (isset($result)){ ?>
    <div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
        <?php echo 'Wynik: '.$result; ?>
    </div>
<?php } ?>

</body>
</html>