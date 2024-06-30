<?php
include_once("..\connection.php");



session_start();

if((isset($_POST['email'])) && (isset($_POST['passwd'])) )
{
    $user = mysqli_real_escape_string($ligacao, $_POST['email']);
    $passwd = mysqli_real_escape_string($ligacao, $_POST['passwd']);

    $result_user = "SELECT * FROM admin WHERE email = '$user' AND passwd = '$passwd' LIMIT 1";
    $resultado_user = mysqli_query($ligacao, $result_user);
    $resultado = mysqli_fetch_assoc($resultado_user);

    if(isset($resultado))
    {
        $_SESSION['userId'] = $resultado['id'];
        $_SESSION['userEmail'] = $resultado['email'];
        $_SESSION['userPasswd'] = $resultado['passwd'];
        header("location: homeadmin.php");
    }
    else
    {?>
        <br>
        <?php
        $_SESSION['Erro'] = "e-mail ou Password Invalidos";
        header("location: loginadmin.php");
    }
}
else
{?>
<br>
<?php
    $_SESSION['Erro'] = "e-mail ou Password Invalidos";
    header("location: loginadmin.php");
}


?>