                       
                           <?php
require_once "../_config/config.php";
if(isset($_SESSION['user'])){
    echo "<script>window.location='".base_url()."';</script>";
}else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login - Kartu KA I</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url('_assets/css/bootstrap.min.css?');?>" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link type="text/css"  href="../_assets/css/style.css"  rel="stylesheet">

</head>

<body>
    <div id="wrapper">
        <div class="container">
            <div align="center" style="margin-top: 210px;">
                <?php
                if(isset($_POST['login'])){
                    $user = trim(mysqli_real_escape_string($con, $_POST['user']));
                    $pass = sha1(trim(mysqli_real_escape_string($con, $_POST['pass'])));
                    $sql_login = mysqli_query($con, "SELECT * FROM tb_user WHERE nip = '$user' AND password = '$pass'") or die (mysqli_error($con));
                    $log = mysqli_num_rows($sql_login);

                    if ($log > 0){
                        $row = mysqli_fetch_assoc($sql_login);
                        $_SESSION["user"]= $row ["nip"];
                        echo "<script>window.location='".base_url()."';</script>";
                        $_SESSION["nip"]= $row ["nip"];
                        $_SESSION["username"]= $row ["username"];
                        $_SESSION["nama_user"]= $row ["nama_user"];
                        $_SESSION["bagian"]= $row ["bagian"];
                    } else {?>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3">
                                    <div class="alert alert-danger alert-dismissable" role="alert">
                                    <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <span class="glyphicon glyphicon-exlamation-sign" aria-hidden="true"></span>
                                    <strong> Login gagal</strong> Username / Password salah
                                    </div>
                                </div>
                            </div>
                    <?php
                    }
                }
                ?>
                 <div class="input-group">
                    <div class="container">
                        <div class="row vertical-offset-100">
                            <div class="col-md-4 col-md-offset-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Please sign in</h3>
                                    </div>
                                    <div class="panel-body">
                                    <form action="" method="post" class="navbar-form">
                                        <fieldset>
                                            <div class="form-group">
                                            <input type="text" name="user" class="form-control" placeholder="NIP" required autofocus>
                                            </div>
                                            <div class="form-group">
                                            <input type="password" name="pass" class="form-control" placeholder="Password" required autofocus>
                                            </div>
                                            <div>
                                            <p class="a">.....</p>
                                            </div>
                                            <div class="form-group">
                                            <input type="submit" name="login" class="btn btn-primary" value='Login'>
                                            </div>
                                        </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>


    <script src="<?=base_url('_assets/js/jquery.js')?>"></script>
    <script src="<?=base_url('_assets/js/boostrap.min.js')?>"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
    <!-- This is a very simple parallax effect achieved by simple CSS 3 multiple backgrounds, made by http://twitter.com/msurguy -->
    <script></script>

</body>



                   
</html>

            <?php 
            }
            ?>