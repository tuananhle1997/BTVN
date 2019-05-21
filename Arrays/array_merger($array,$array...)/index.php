<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Hàm có tác dụng gộp hai hay nhiều mảng thành một mảng.</h1>
<?php
$array = [
    'domain' => 'toidicode.com',
    'description' => 'website học lập trình online',
    'hoccode' => 'https://w3schools.com'
];
$array1 = [5, 4, 3, 2, 1];
print_r(array_merge($array, $array1));
?>
</body>
</html>