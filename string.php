<!-- Cac ham xu li chuoi -->
<?php

// Ham explode dung de cat chuoi thanh mang
$string1 = 'I am studying PHP programming language';        // Chuoi can xu li

$arr = explode(' ', $string1);        // Cat chuoi thanh mang
// Cau truc explode: ('ky tu cat', 'chuoi can cat')

var_dump($string1);        // In ra chuoi va kiem tra
echo '<br>';
var_dump($arr);        // In ra mang va kiem tra
echo '<br>';
echo "print_r dung de in ra mang: ";
print_r($arr);        // In ra mang va kiem tra
echo '<br>';



// Ham implode dung de noi cac phan tu cua mang thanh chuoi
$arr1 = array('I', 'am', 'studying', 'PHP', 'programming', 'language');        // Mang can xu li
var_dump($arr1);        // In ra mang va kiem tra
echo '<br>';
$ConvertToString = implode(' ', $arr);        // Noi mang thanh chuoi
// Cau truc implode: ('ky tu noi', 'mang can noi')
echo $ConvertToString;        // In ra chuoi va kiem tra
echo '<br>';
var_dump($ConvertToString);        // In ra chuoi va kiem tra
echo '<br>';


// Ham strlen dung de tinh do dai cua chuoi  (so ki tu trong chuoi) va khong Ho tro Tieng Viet
// Chung ta se dung varriable ConvertToString o tren de do do dai cua chuoi
$length = strlen($ConvertToString);        // Do dai cua chuoi
echo $length;        // In ra do dai cua chuoi
echo '<br>';
// Ham strlen se tinh ca khoang trang trong chuoi va khong Ho tro Tieng Viet


// Ham str_word_count dung de dem so tu trong chuoi
// Chung ta se dung varriable ConvertToString o tren de dem so tu trong chuoi
$wordCount = str_word_count($ConvertToString);        // Dem so tu trong chuoi
echo "$wordCount <br>";        // In ra so tu trong chuoi


// Ham str_repeat dung de lap lai chuoi n lan
// Chung ta se dung varriable ConvertToString o tren de lap lai chuoi
echo "Ham str_repeat:";
echo str_repeat($ConvertToString, 3);        // Lap lai chuoi 3 lan
echo '<br>';


// Ham str_replace dung de thay the chuoi
// Chung ta se dung varriable ConvertToString o tren de thay the chuoi
// Cau truc: str_replace('chuoi can thay the', 'chuoi thay the', 'chuoi can xu li')
echo "Ham str_replace:";
echo str_replace('PHP', 'Java', $ConvertToString);        // Thay the chuoi PHP thanh Java
echo '<br>';


// Ham md5 dung de ma hoa chuoi (mat khau de dam bao an toan)
// Chung ta se dung varriable ConvertToString o tren de ma hoa chuoi
echo "Ham md5:";
echo md5($ConvertToString);        // Ma hoa chuoi
echo '<br>';


// Ham sha1 dung de ma hoa chuoi (mat khau de dam bao an toan) do bao mat hon ham md5
// Chung ta se dung varriable ConvertToString o tren de ma hoa chuoi
echo "Ham sha1:";
echo sha1($ConvertToString);        // Ma hoa chuoi
echo '<br>';


// Ham crypt dung de ma hoa chuoi (mat khau de dam bao an toan) do bao mat hon ham md5 va sha1
// Chung ta se dung varriable ConvertToString o tren de ma hoa chuoi
echo "Ham crypt:";
echo crypt
($ConvertToString, '123');        // Ma hoa chuoi
echo '<br>';

// Ham htmlentities dung de chuyen cac ky tu dac biet trong chuoi thanh cac ky tu HTML
echo "Ham htmlentities:";
echo htmlentities("<p>$ConvertToString</p>");        // Chuyen cac ky tu dac biet thanh cac ky tu HTML
echo '<br>';

// Ham html_entity_decode dung de chuyen cac ky tu HTML trong chuoi thanh cac ky tu dac biet
echo "Ham html_entity_decode:";
echo html_entity_decode("<p>$ConvertToString</p>");        // Chuyen cac ky tu HTML thanh cac ky tu dac biet
echo '<br>';

// Ham strip_tags dung de loai bo cac the HTML trong chuoi
// Cau truc: strip_tags('chuoi can xu li')
// Chung ta se dung varriable ConvertToString o tren de loai bo cac the HTML trong chuoi
echo "Ham strip_tags: ";
echo strip_tags("<p>$ConvertToString</p>");        // Loai bo cac the HTML trong chuoi
echo '<br>';
