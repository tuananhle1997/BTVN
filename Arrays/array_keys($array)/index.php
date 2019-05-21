<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>-Hàm này có tác dụng trả về một mảng tuần tự với phần tử là key của mảng ban đầu. </h1>
<?php
$array = [
    'domain' => 'toidicode.com',
    'description' => 'website học lập trình online'
];
print_r(array_keys($array));
?>
</body>
</html>