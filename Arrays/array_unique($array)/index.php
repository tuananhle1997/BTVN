<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Hàm có tác dụng loại bỏ các phần tử trùng nhau trong mảng và trả về một mảng mới sau khi đã loại bỏ.</h1>
<?php
$array = [
    'domain' => 'toidicode.com',
    'description' => 'website học lập trình online',
    'hoccode' => 'https://w3schools.com',
    'hoccode' => 'https://w3schools.com',
    'hoccode' => 'https://w3schools.com'
];
print_r(array_unique($array, 0));
?>
</body>
</html>