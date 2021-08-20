<?php
include "functions.php";
$background_color="#fff";
if (isset($_POST['send'])){
//    var_dump($_POST);

    $background_color = select_bg($_POST["background"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="">

</head>
<body style="background: <?php echo $background_color; ?>">
<!--        --><?php //if(is_user_logged_in()): ?>
<!--        <p>welcome</p>-->
<!--        --><?php //else:?>
<!--        <a href="#" >login</a>-->
<!--        --><?php //endif; ?>

<?php
//        $a = true;
//        switch ($a){
//            case true:
//                echo "TRUE";
//                break;
//            case false:
//                echo"FALSE";
//                break;
//            default:
//                echo'DEFAULT';
//                break;
//        }

?>
<form action="" method="post">
    <input type="radio" name="background" value="blue">BLUE
    <input type="radio" name="background" value="red">RED
    <input type="radio" name="background" value="green">GREEN
    <input type="submit"  name="send" value="send">
</body>
</html>