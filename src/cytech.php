<?php
$cytech = 100;
$total = $cytech * $cytech;
echo $total;

//整数型
$int = 100;
echo $int;

//浮動小数点型
$float_one = 3.14;
$float_two = 3.14;
$result = $float_one * $float_two;
echo $result;

//文字列型
$str = "Hello Cytech";
echo $str;

//配列
$num = array(100, 200, 300, 400);
echo $num[2];

//多次元配列
$data = array(
    array(1, 2, 3),//int型
    array("CyTech", "Toro", "PHP")//string型
);

//出力
echo $data[0][1];
echo $data[1][2];

//オブジェクト（object）
//↓オブジェクトの設計書（クラス）です
class Person{

}

//オブジェクト自身です。
new Person();

//defineの使い方
define('TAX',1.10);
$price = 100;

//出力
echo "税込" .$price * TAX."円";

//constの使い方
//クラス定数
class Cytech{
    const PHP = 'Hello';
}

echo Cytech::PHP;
?>

