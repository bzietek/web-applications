<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
    <meta charset="utf-8" />
    <title>Kalkulator Kredytowy</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

    <div style="width:90%; margin: 2em auto;">
        <a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button">kolejna chroniona strona</a>
        <a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
    </div>

    <div style="width:90%; margin: 2em auto;">
        <form action="<?php print(_APP_URL);?>/app/calc.php" method="post" class="pure-form pure-form-stacked">
            <legend>Kalkulator kredytowy</legend>
            Podaj kwotę : <input type="text" name="amount">
            Na ile lat? (1-15) : <input type="number" min="1" max="15" name="period" value="1">
            Oprocentowanie (5-20)% : <input type="number" min="5" max = "20" name="rate" value="5"> <br>
            <input type="submit" value="Oblicz" class="pure-button pure-button-primary">
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
    </div>
</body>
</html>