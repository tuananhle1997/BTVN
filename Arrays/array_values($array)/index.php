<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>hàm có tác dụng đưa mảng về dạng mảng tuần tự </h1>
<?php
    $array = [
        'domain' => 'toidicode.com',
        'description' => 'website học lập trình online'
    ];
    print_r(array_values($array));
?>
</body>
</html>