<?php
//$users = ["علی" => "رحیمی", "رضا"=> "عطاران", "حامد"=>"بهداد"];
//    echo "<table style='border: 4px solid #ddd'>";
//echo "<tr><th style='border: 4px solid #ddd'>نام</th><th style='border: 4px solid #ddd'>نام خانوادگی</th></tr>";
//foreach ($users as $name => $user) {
//
//echo "<tr><td style='border: 4px solid #ddd'>$name</td><td style='border: 4px solid #ddd'>$user</td></tr>";
//}
//
//    echo "</table>";

include "functions.php";
$users = get_users();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            padding: 5px 10px;
        }

        table, tr, td, th {
            border: 2px solid #000;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>actions</th>

    </tr>

<?php if ($users && count($users)>0):?>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user['id'] ?></td>
            <td><?php echo $user['name'] ?></td>
            <td><?php echo $user['email'] ?></td>

            <td>
                <a href="">delete</a>
                <a href="">edit</a>
                <a href="">submit</a>
            </td>
        </tr>

    <?php endforeach; ?>
    <?php endif; ?>
</table>
</body>
</html>