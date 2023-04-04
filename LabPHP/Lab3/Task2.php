<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2</title>
</head>
<body>
    <h1> Application Name: PHP class registration</h1>
</body>
</html>
<?php


$students = [
    //['name' => 'Name', 'email' => 'E-mail', 'status' => 'Status'],
    ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'CMS'],
    ['name' => 'Shamy', 'email' => 'ali@test.com', 'status' => 'OS'],
    ['name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'OS'],
    ['name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => 'CMS'],
    ['name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'OS'],
];

// //print_r($students);

echo '<table class="table table-hover"><th>Name</th><th>E-mail</th><th>Status</th>';

foreach ($students as $row) {
    echo '<tr>'; 

    // using a ternary operator here rather than an IF
    $style = $row['status'] == 'CMS'
            ? ' style="color:red" ' 
            : '';

    echo "<td $style>{$row['name']}</td>";
    echo "<td $style>{$row['email']}</td>";
    echo "<td $style>{$row['status']}</td>";

    echo '</tr>';
}
?>