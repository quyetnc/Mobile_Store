<!DOCTYPE html>
<html lang="vi">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Đăng nhập</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="lib/logincss/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <?php
    if (isset($_GET["mod"]))
    {
        switch ($_GET["mod"]) {
            case 'Login':
                if (isset($_GET["logout"]))
                {
                    header('location: index.php');        
                }
                else 
                {
                    $link = "View/User/VLogin.php";
                    include_once($link);
                }
               

                break;
            
            case 'Register':
                $link = "View/User/VRegister.php";
                include_once($link);
                break;
            case 'FB':
                $link = "View/User/FB.php";
                include_once($link);
                break;
            case 'GG':
                $link = "View/User/GG.php";
                include_once($link);
                break;
            default:
                # code...
                break;
        }
    }

    
    ?>


  <!-- Bootstrap core JavaScript-->
  <script src="lib/logincss/vendor/jquery/jquery.min.js"></script>
  <script src="lib/logincss/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="lib/logincss/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="lib/logincss/js/sb-admin-2.min.js"></script>

</body>

</html>
 