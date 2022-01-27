<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="author" content="tarık uçar">
    <meta name="keywords" content="ben,php, denem">
    <title>proje title'ı</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body style="text-align: center; padding: 100px;">
    <form action="index.php" method="POST" enctype="multipart/form-data">
        ad:
        <input type="text" required placeholder="ben" id="ad" value="tarık">
        <hr>

        <label for="hakkimda" style="margin-right: 10px;">hakkimda:</label>
        <textarea name="hakkimda" id="hakkimda" cols="50" rows="10" placeholder="ben senin hakkının aq" style="font-family: Times new roman;">ben doluyum</textarea>
        <hr>+
        <label for="meslek">meslekler:</label>
        <select name="meslek" id="meslek">
            <option>---seç---</option>
            <option value="web" selected>frontend</option>
            <option value="web">backend</option>
            <option value="web">fullstack</option>
            <option value="web">unversal</option>
        </select>
        <hr>
        <select name="meslek2[]" id="meslek" multiple size="6">
            <option>---seç---</option>
            <option value="frontend" selected>frontend</option>
            <option value="backend">backend</option>
            <option value="fullstack">fullstack</option>
            <option value="unversal">unversal</option>
        </select>
        <hr>
        <label>
            erkek:
            <input type="radio" checked name="cinsiyet" id="erkek" value="erkek">
        </label>
        <label>
            kız:
            <input type="radio" name="cinsiyet" id="kız" value="kız">
        </label>
        <hr>
        <label><input type="checkbox" checked value="php" name="hobiler[]"> php</label>
        <label><input type="checkbox" checked value="css" name="hobiler[]"> css</label>
        <label><input type="checkbox" value="html" name="hobiler[]"> html</label>
        <hr>
        <button type="submit" style="background-color: green; color: white;">submit et</button>

    </form>
    <?php
    $arr = array(
        "5" => "1.yim ben",
        "1" => "2.yim ben",
        "2" => "3.yim ben",
        "3" => "4.yim ben",

    );

    /*
    foreach($arr as $asd => $asdd){
        echo $asd."->";
        echo $asdd."<br>";

    }
    */
    /*
    $arr_key = array_keys($arr);

    $arr_value = array_values($arr);
    echo $arr_key[0], $arr_value[0];
    print_r($arr_value);
    print_r($arr_key);
    echo "<br>";

*/


    /*$i = 0;
    while (++$i) {
        switch ($i) {
            case 5:
                echo "5'de<br/>\n";
                break 1;  // Yalnızca switch'ten çıkar. 
            case 10:
                echo "10'da; çıkılıyor<br />\n";
                break 2;  // switch ve while'dan aynı anda çıkılır. 
            default:
                break;
        }
    }*/
    foreach ($_POST as $post) {
        if (is_array($post) == 1) {
            // print_r( $post);            
        }
    }
    print_r($_POST);
    ?>

    <table>
        <tr>
            <th>Company</th>
            <th>Contact</th>
            <th>Country</th>
        </tr>
        <tr>
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
        </tr>
        <tr>
            <td>Centro comercial Moctezuma</td>
            <td>Francisco Chang</td>
            <td>Mexico</td>
        </tr>
    </table>
    <p> <del>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</del> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</body>

</html>