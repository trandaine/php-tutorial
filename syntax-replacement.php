<?php

// Cho 1 truong hop: Neu $a < 0 -> in ra "a is negative", nguoc lai in ra "a is positive"

// Toan tu ba ngoi
$a = -5;
echo ($a < 0) ? "A is negative" : "A is positive";   //In ra "A is positive", cu phap: echo (condition) ? true : false;
echo "<br>";
// Cu phap thay the cho if else

if ($a < 0) :         //Neu $a <0
?> <!--Dong cu phap dang php, chuyen qua HTML -->
    <ul> <!--Danh sach cac phan tu -->
        <li>Dainetr</li> <!--Phan tu dau tien -->
        <li>Daine</li>
        <li>QDai</li>
        <li>bedai</li>
    </ul>
<?php     //Mo cu phap php
else :       //Neu khong
    echo "A is positive";           //In ra "A is positive"
endif;      //Ket thuc cu phap if else
echo "<br>";
?>

<?php
//Cu phap thay the cho for-loop
for ($b = 0; $b < 10; $b++):         //Gia tri khoi tao, dieu kien lap, buoc nhay
    echo "$b <br>";             //Hien thi gia tri cua bien $i
endfor;                 //Ket thuc cu phap for loop
echo "<br>";
?>

<!--Cu phap thay the cho while-loop-->
<?php
$g=0;           //Gia tri khoi tao
while ($g<10):          //Dieu kien lap
    echo "$g <br>";         //Hien thi gia tri cua bien $g
    $g++;           //Buoc nhay
endwhile;           //Ket thuc cu phap while loop
?>
