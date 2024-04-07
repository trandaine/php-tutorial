<?php

//Vong lap while
//Vong lap while se thuc hien lap di lap lai mot doan code cho den khi dieu kien lap khong con dung nua
//Vong lap while se kiem tra dieu kien lap truoc khi thuc hien lap
//May co the bi treo trong khi thuc hien vong lap neu khong co diem dung
//Vi du: Lap tu 0 den 9
echo "Vong Lap While <br>";            //Xuong dong
$i = 0;         //Gia tri khoi tao
while ($i<10) {         //Dieu kien lap
    if ($i==9) {        //Neu gia tri cua bien $i bang 9
        echo"Lap lan thu: $i la het<br>";          //Hien thi gia tri cua bien $i
        break;          //Thoat khoi vong lap
    }else{
        echo "Lap lan thu: $i <br>";         //Hien thi gia tri cua bien $i
        $i++;           //Buoc nhay
    }
    
}


//die();          //Ket thuc chuong trinh
//exit();           //Ket thuc chuong trinh



echo "Vong Lap Do While <br>";            //Xuong dong
//Do while loop
//Vong lap do while se thuc hien lap di lap lai mot doan code cho den khi dieu kien lap khong con dung nua
//Vong lap do while se thuc hien it nhat mot lan truoc khi kiem tra dieu kien lap
//Vong lap do while se bi treo neu khong bao gio thoa man dieu kien dung
//Vi du: Lap tu 0 den 9
$a = 0;         //Gia tri khoi tao
do {
    if ($a==9) {        //Neu gia tri cua bien $a bang 9
        echo "Lap lan thu: $a la het<br>";          //Hien thi gia tri cua bien $a
        break;          //Thoat khoi vong lap
    }else{
        echo "Lap lan thu: $a <br>";         //Hien thi gia tri cua bien $a
        $a++;           //Buoc nhay
    }
} while ($a<10);        //Dieu kien lap






// Do while loop example with the exact loop condition
echo "Vong Lap Do While voi bien bang 10 <br>";            //Xuong dong
echo "Vong lap do while se thuc hien in cau lenh ra truoc roi se kiem tra tinh dung dan cua dieu kien lap <br>";
$j = 10;         //Gia tri khoi tao
do{        //Dieu kien lap
    echo "Lap lan thu: $j <br>";         //Hien thi gia tri cua bien $j
    $j++;           //Buoc nhay
} while ($j<10);        //Dieu kien lap
echo "Ta thay voi bien bang 10 thi vong lap do while se in ra truoc roi kiem tra dieu kien vong lap <br>";
echo "Sau do khong in ra gi ca <br>";            //Xuong dong

// Luu y khi dung vong lap do while va for:
// Neu biet truoc so lan lap thi dung for
// Neu khong biet truoc so lan lap thi dung do while hoac while loop