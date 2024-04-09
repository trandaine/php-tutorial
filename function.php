<?php
// Ham la mot chuong trinh con thuc hien mot khoi cong viec duoc lap di lap lai nhieu lan trong khi chay chuong trinh
// Ham dung tach mot khoi cong viec cu the de chuong trinh do phuc tap
// Ham de bao tri, de quan ly
// Co the tai su dung code

/* Cu phap dinh nghia ham
function ten_ham($tham_so1, $tham_so2, $tham_so3, ...){
    // khoi lenh
}
    Cu phap goi ten ham
    ten_ham($tham_so1, $tham_so2, $tham_so3, ...);
*/

// Create a function that will calculate the total of two numbers varriable
function sum($a, $b){
    $total = $a + $b;
    echo 'Total: '. $total. '<br>';
    return $total;              // return total varriable           // Ham return khi duoc goi ra se khong thuc thi cac lenh phia sau
}

echo sum(5, 10). '<br>'; // make total = 15

// Create two varriable for use above function to sum
$x = 10;
$y = 20;
echo sum($x, $y). '<br>'; // make total = 30


// Function function_exists() kiem tra xem mot ham co ton tai hay khong
// Cu phap: function_exists('ten_ham');
if(function_exists('sum')):
    echo 'Function sum() is exist';
else:
    echo 'Function sum() is not exist';
endif;
echo '<br>';

// Local varriable, Global varriable, Static varriable:
// Local varriable: la bien chi co the su dung trong ham duoc dinh nghia
// Global varriable: la bien co the su dung o bat ky noi nao trong chuong trinh
// Static varriable: la bien co the su dung trong ham va giu gia tri cua bien do sau moi lan goi ham

function doMinus($varriable1, $varriable2){
    $total = $varriable1 - $varriable2;                 // Local varriable
    echo 'Total: '. $total. '<br>';
    return $total;
}

$globalVarriable1 = 10;                                 // Global varriable
function doMultiply($varriable1, $varriable2){
    global $globalVarriable1;                           // Su dung bien global trong ham        // De su dung bien global phai khai bao bien global trong ham bang chu 'global' truoc ten ham
    $total = $varriable1 * $varriable2 * $globalVarriable1;
    echo 'Result: '. $total. '<br>';
    return $total;
}
doMinus(10, 5). '<br>'; // make total = 5
doMultiply(10, 5). '<br>'; // make total = 500

function countItSelf(){
    static $count = 0;                                  // Static varriable           // Bien static se giu gia tri cua bien do sau moi lan goi ham
    $count++;                                    // Tang gia tri cua bien count len 1
    echo $count. '<br>';
}

countItSelf(); // make count = 1
countItSelf(); // make count = 2
countItSelf(); // make count = 3