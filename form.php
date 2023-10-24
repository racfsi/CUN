<?php
if ($_POST) {
    // $number = '1234';
    // $num_alt = '1234';
    $number = $_POST['number'];
    $num_alt = random_int(0, 9999);
    $arrNum = str_split($number);
    $arrAlt =  str_split($num_alt);
    $txtResponse = '';
    $isBad = false;
    for ($i = 0; $i < 4; $i++) {
        if ($arrNum[$i] == $arrAlt[$i]) {
            $txtResponse .= $arrNum[$i] . ' es fija | ';
        } else if (in_array($arrNum[$i], $arrAlt)) {
            $txtResponse .= $arrNum[$i] . ' es pica | ';
            $isBad = true;
        }
    }
    echo $txtResponse;
    if ($isBad) {
?>
        <a href="index.html">Volver a jugar</a>
<?php
    }
}
