<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>-Hàm có tác dụng lấy ra $lenght phần tử bắt đầu từ $begin trong mảng.</h1>
<?php
$array = [
    'domain' => 'toidicode.com',
    'description' => 'website học lập trình online',
    'hoccode' => 'https://w3schools.com'
];
print_r(array_slice($array, 0));

print_r(array_slice($array, 0, 1));
?>
</body>
</html>