<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
	<title>All About Purwokerto</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="../asset/img/icon.png" />
	<!-- Bootstrap -->
	<link rel="stylesheet" href="../asset/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="../asset/font-awesome/css/font-awesome.min.css">
	<!-- CSS Document -->
	<link rel="stylesheet" type="text/css" href="../asset/css/style-login.css">
</head>
<body>
    
    <div class="content">
        <div class="header">
            <a href="/aap"><img src="../asset/img/logo.png" alt="header"></a>
        </div>
        <form action="" method="post">
            <table>
                <tr>
                    <td>
                        <input type="text" name="username" placeholder="Username" class="ip" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="password" placeholder="Password" class="ip" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn btn-brown bt" name="login"><i class="fa fa-sign-in"></i> Login</button>
                    </td>
                </tr>
            </table>
        </form>
                    
          <?php include "act.php"; ?>
    </div>
    
    <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="../asset/assets/js/vendor/jquery-slim.min.js"></script>
    <script src="../asset/assets/js/vendor/popper.min.js"></script>
    <script src="../asset/dist/js/bootstrap.min.js"></script>
</body>
</html>