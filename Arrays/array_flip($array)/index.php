<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Hàm này có tác dụng chuyển đổi key của mảng thành value và ngược lại.</h1>
<?php
$array = [
    'domain' => 'toidicode.com',
    'description' => 'website học lập trình online',
    'hoccode' => 'https://w3schools.com'
];
print_r(array_flip($array));
?>
</body>
</html>