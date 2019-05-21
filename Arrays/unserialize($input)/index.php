<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Hàm có tác dụng decode chuỗi được mã hóa bằng serialize.</h1>
<?php
$array = [
    'domain' => 'toidicode.com',
    'description' => 'website học lập trình online',
    'hoccode' => 'https://w3schools.com',
    'hoccode' => 'https://w3schools.com',
    'description' => 'website học lập trình online',
    'description' => 'website học lập trình online',
];
print_r($a = serialize($array));

print_r(unserialize($a));
?>
</body>
</html>