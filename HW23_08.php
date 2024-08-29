<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài tập 2</title>
</head>
#bai 4
<?php
// Khai báo chuỗi nguồn và chuỗi con cần tìm
$chuoi_nguon = "Xin chào, TMU!";
$chuoi_con = "thế";
// Sử dụng hàm strpos() để tìm vị trí đầu tiên của chuỗi con trong chuỗi nguồn
$vi_tri = strpos($chuoi_nguon, $chuoi_con);
// Kiểm tra và hiển thị kết quả
if ($vi_tri !== false) {
    echo "Chuỗi con '$chuoi_con' được tìm thấy ở vị trí $vi_tri.";
} else {
    echo "Chuỗi con '$chuoi_con' không được tìm thấy trong chuỗi nguồn.";
}
?>

#bai 7
<?php
// Chuỗi ban đầu
$originalString = "xin chào thương mại!";
// Sử dụng hàm strtoupper để chuyển đổi chuỗi thành chữ hoa
$upperCaseString = strtoupper($originalString);
// Hiển thị chuỗi đã chuyển đổi
echo $upperCaseString;
?>

#bai 9
<?php
// Chuỗi đầu vào
$chuoi = "dinh thi nhan";

// Sử dụng hàm ucwords để chuyển đổi
$chuoi_in_hoa = ucwords($chuoi);

// Hiển thị kết quả
echo $chuoi_in_hoa;
?>

#bai 14
<?php
// 14. Nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode()
$array = ["apple", "banana", "orange"];
$string = implode(", ", $array);
echo "Imploded string: '$string'\n";
?>

#bai 16
<?php
// 16. Kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr()
$string = "Hello World!";
$ending = strrchr($string, "World!");
if ($ending !== false) {
    echo "The string ends with 'World!'\n";
} else {
    echo "The string does not end with 'World!'\n";
}
?>
#bai 17
<?php
// 17. Kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr()
$string = "Hello World!";
$substring = strstr($string, "World");
if ($substring !== false) {
    echo "The string contains 'World'\n";
} else {
    echo "The string does not contain 'World'\n";
}
?>
#bai 18
<?php
// 18. Thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace()
$string = "Hello World! 123";
$replacedString = preg_replace("/[^a-zA-Z0-9]/", "-", $string);
echo "Replaced string: '$replacedString'\n";
?>