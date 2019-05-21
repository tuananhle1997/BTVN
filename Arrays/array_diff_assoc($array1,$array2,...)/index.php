<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Hàm này có tác dụng trả về một mảng có các key trong mảng $array1 mà $array2,..$arrayn không có.</h1>
<?php
$array1 = [
    'domain' => 'toidicode.com',
    'description' => 'website học lập trình online',
    'hoccode' => 'https://w3schools.com',
    'hoccode' => 'https://w3schools.com',
    'description' => 'website học lập trình online',
    'description' => 'website học lập trình online',
];

$array2 = [
    'domain' => 'toidicode.com',
    'description' => 'website học lập trình online',
    'hoccode' => 'https://w3schools.com',
    'hoccode' => 'https://w3schools.com',
    'description' => 'website học lập trình online',
    'description' => 'website học lập trình online',
];
print_r(array_diff_assoc($array1, $array2));
?>
</body>
</html>