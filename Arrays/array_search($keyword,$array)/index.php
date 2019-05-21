<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>-Hàm có tác dụng tìm kiếm giá trị của mảng và trả về key của phần tử đó nếu có.</h1>
<?php
$array = [
    'domain' => 'toidicode.com',
    'description' => 'website học lập trình online',
    'hoccode' => 'https://w3schools.com'
];
print_r(array_search('toidicode.com', $array));
?>
</body>
</html>