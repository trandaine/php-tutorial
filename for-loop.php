
<?php
// this is a for loop
for ($a = 0; $a < 10; $a++) {           //Gia tri khoi tao, dieu kien lap, buoc nhay
    echo "$a <br>";             //Hien thi gia tri cua bien $i
}

echo "<br>";               //Xuong dong
for ($i = 0; $i < 10; $i++) {       //Gia tri khoi tao, dieu kien lap, buoc nhay
    if ($i == 5) {          //Neu gia tri cua bien $i bang 5
        continue;           //Bo qua gia tri cua bien $i
    }
    echo "$i <br>";         //Hien thi gia tri cua bien $i
}

//  for loop excercise
echo "<br>";
/* Bai 1: Hien thi so chan so le trong day so tu: 1 den 100
Bat dau: 1
Ket thuc: 100*/
for ($i = 1; $i <= 100; $i++) {     //Gia tri khoi tao, dieu kien lap, buoc nhay
    if ($i % 2 == 0) {          //Neu gia tri cua bien $i chia het cho 2
        echo "So chan: $i <br>";        //Hien thi so chan
    } else {                //Neu khong
        echo "So le: $i <br>";      //Hien thi so le
    }
}

