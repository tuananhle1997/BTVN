<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>-Hàm có tác dụng xóa phần tử đầu tiên của mảng và trả về phần tử vừa xóa.</h1>
<?php
$array = [
    'domain' => 'toidicode.com',
    'description' => 'website học lập trình online',
    'hoccode' => 'https://w3schools.com'
];
print_r(array_shift($array));
?>
</body>
</html>