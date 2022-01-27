<?php
if (isset($_POST["submit"])) {
    $prod =$_POST['submit'];
    if(isset($_COOKIE["cart"][$prod])){
        $pieces =  $_COOKIE["cart"][$prod] + 1;
    }else{
        $pieces = 1;
    }
    setcookie("cart[$prod]",$pieces, time()+86400);
    print_r($_COOKIE["cart"][$prod] );
}
?>
<html lang="en">

<body>
    <div class="main" style="text-align: center; justify-content: center;">
        <h1>anasayfaya hoşgeldiniz</h1>
    </div>
    <form action="" method="post">
        <table style='border: 1px solid black;'>
            <?php
            require "products.php";
            foreach ($products as $prod => $amount) {
            ?>
                <tr>
                    <td><?php echo $prod ?> </td>
                    <td><?php echo $amount ?></td>
                    <td> <button type='submit' name='submit' value=<?php echo $prod ?>>sepete ekle</button></td>"
                </tr>
            <?php } ?>
        </table>
    </form>
    <table style='border: 1px solid black;'>
            <?php
            require "products.php";
            foreach ($_COOKIE["cart"] as $prod => $amount) {
            ?>
                <tr>
                    <td><?php echo $prod ?> </td>
                    <td><?php echo $amount ?></td>
                </tr>
            <?php } ?>
        </table>
</body>

</html>