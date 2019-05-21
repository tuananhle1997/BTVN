<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>-Hàm này có tác dụng thêm một hoặc nhiều phần tử vào cuối mảng và trả về số lượng phần tử của mảng sau khi thêm.</h1>
<?php
$array = [
    'domain' => 'toidicode.com',
    'description' => 'website học lập trình online',
    'hoccode' => 'https://w3schools.com'
];
print_r(array_push($array, 'Miễn phí nhé'));
?>
</body>
</html>