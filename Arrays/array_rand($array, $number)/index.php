<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Hàm có tác dụng lấy ra key ngẫu nhiên trong mảng với number là số lượng muốn lấy.</h1>
<?php
$array = [
    'domain' => 'toidicode.com',
    'description' => 'website học lập trình online',
    'hoccode' => 'https://w3schools.com'
];
print_r(array_rand($array));
// output: domain
print_r(array_rand($array, 2));
//output: Array ( [0] => domain [1] => description )
?>
</body>
</html>