<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
</head>
<body>
<h3>Nhập số muốn chuyển vào ô</h3>
<form method="get">
<input type="text" id="isNumber" placeholder="0" <?php echo '$number'; ?>/>
    <input type="submit" value="Change">
</form>
<?php
function convert($number){
    $dictionary = array(
        0 => 'Không',
        1 => 'Một',
        2 => 'Hai',
        3 => 'Ba',
        4 => 'Bốn',
        5 => 'Năm',
        6 => 'Sáu',
        7 => 'Bảy',
        8 => 'Tám',
        9 => 'Chín',
        10 => 'Mười',
        11 => 'Mười một',
        12 => 'Mười hai',
        13 => 'Mười ba',
        14 => 'Mười bốn',
        15 => 'Mười năm',
        16 => 'Mười sáu',
        17 => 'Mười bảy',
        18 => 'Mười tám',
        19 => 'Mười chín',
        20 => 'Hai mươi',
        30 => 'Ba mươi',
        40 => 'Bốn mươi',
        50 => 'Năm mươi',
        60 => 'Sáu mươi',
        70 => 'Bảy mươi',
        80 => 'Tám mươi',
        90 => 'Chín mươi',
        100 => 'trăm',
        1000 => 'ngàn');

    // kiem tra co phai la so hay khong
    $str = '';

    if (!is_numeric($number)){
        return false;
    }
    if ($number < 21){
        $str = $dictionary[$number];
    } elseif ($number < 100){
        $ten = floor($number / 10) * 10;
        $unit = $number - $ten;
        if ($unit === 0){
            $str = $dictionary[$ten];
        } else {
            $str = $dictionary[$ten] . ' ' . $dictionary[$unit];
        }
    } elseif ($number < 1000){
        $hundred = floor($number / 100 ) * 100;
        $remain = $number % 100;
        if ($remain === 0){
            $str = $dictionary[$hundred] . " " . $dictionary[100];
        } else {
            $str = $dictionary[$hundred] . " " . convert($remain);
        }
    }

    return $str;
}
if ($_SERVER["REQUEST_METHOD"] == "GET"){
    $number = $_GET['isNumber'];
    echo 'Số bạn vừa nhập là: ' . $number . '</br>';
    echo 'Số viết bằng chữ là: ' . convert($number);
}
?>
</body>
</html>