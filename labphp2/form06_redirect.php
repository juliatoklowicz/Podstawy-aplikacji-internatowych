<?php session_start(); ?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<h1>Twoje dane są przetwarzane.</h1>

<?php
$link = mysqli_connect("localhost", "scott", "tiger", "instytut");
if (!$link) {
    $_SESSION['error'] = "Error";
    header("Location: form06_post.php");
}

if (isset($_POST["create"]) && !empty($_POST['id_prac']) && !empty($_POST['nazwisko']) && is_numeric($_POST['id_prac']) && is_string($_POST['nazwisko']) ) {
    $sql = "INSERT INTO pracownicy(id_prac, nazwisko) VALUES(?,?)";
    $stmt = $link->prepare($sql);
    $stmt->bind_param("is", $_POST['id_prac'], $_POST['nazwisko']);
    $result = $stmt->execute();
    if (!$result) {
        $_SESSION['error'] = "Error: " . mysqli_error($link);
        header("Location: form06_post.php");
    } else {
        header("Location: form06_get.php");
    }
    $stmt->close();
} else {
    $_SESSION['error'] = "Poprawnie uzupełnij nazwisko i id pracownika!";
    header("Location: form06_post.php");
}
?>
</body>
</html>