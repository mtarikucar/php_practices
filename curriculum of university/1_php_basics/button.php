<?php
$liste = "[";
foreach ($_POST["alısveris"] as $post) {
    $liste .= $post . ",";
}
$liste .= "]";
setcookie("liste", $liste, time() + 20);
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <title>button</title>
    <meta charset="UTF-8">
</head>

<body>
    <form action="" method="POST">
        <input type="checkbox" value="kiraz" name="alısveris[]"> kiraz
        <input type="checkbox" value="karpuz" name="alısveris[]"> larpuz
        <input type="checkbox" value="adana" name="alısveris[]"> adana
        <input type="checkbox" value="ben" name="alısveris[]"> ben
        <input type="checkbox" value="0" name="alısveris[]"> 0
        <hr>
        <button type="submit"> buttona basma</button>

    </form>


</body>

</html>