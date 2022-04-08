<?php session_start(); ?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<?php
if (isset($_SESSION['error'])) {
    echo $_SESSION['error'] . "<br/>";
    $_SESSION['error'] = null;
}
?>
<form action="form06_redirect.php" method="post">
    <fieldset>
        <legend>Nowy pracownik</legend>
        <label class="form_row">
            Id pracownika:
            <input type="number" name="id_prac">
        </label><br>
        <br>
        <label class="form_row">
            Nazwisko:
            <input type="text" name="nazwisko">
        </label><br>
        <input type="submit" name="create" value="Utwórz">
    </fieldset>
</form>

<a href="form06_get.php" title="pracownicy">PRACOWNICY</a>
</body>
</html>