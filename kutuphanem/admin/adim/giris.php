<?php 
include"head.php";
?>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo1.jpg" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="../vt/islem.php" method="post">
                                <div class="form-group">
                                    <label>Kullanıcı Adınız</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email Adresiniz...">
                                </div>
                                <div class="form-group">
                                    <label>Şifreniz</label>
                                    <input class="au-input au-input--full" type="password" name="parola" placeholder="Şifreniz...">
                                </div>
                             
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="admingiris"> Oturum Aç</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Hesabın yok mu?
                                    <a href="uye.php"> Üye Olun</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->