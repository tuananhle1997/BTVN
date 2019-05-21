<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Kiểm tra xem mảng $array có tồn tại khóa $key không. Trả về TRUE nếu tồn tại và ngược lại.</h1>
<?php
$array = [
    'domain' => 'toidicode.com',
    'description' => 'website học lập trình online',
    'hoccode' => 'https://w3schools.com',
    'hoccode' => 'https://w3schools.com',
    'description' => 'website học lập trình online',
    'description' => 'website học lập trình online',
];
print_r(array_key_exists($array));
?>
</body>
</html>