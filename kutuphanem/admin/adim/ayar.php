<?php 
include "menubar.php";
include  '../vt/baglan.php';
$kullanicisor=$db->prepare("SELECT * FROM kullanici");
$kullanicisor->execute();
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
?>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Profil Ayarları</h3>
                            </div>
                            <hr>
                            <form action="../vt/islem.php" enctype="multipart/form-data" method="post" novalidate="novalidate">
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Kullanıcı Adı Soyadı</label>
                                    <input  name="adiSoyadi" value="<?php echo $kullanicicek["adiSoyadi"]; ?>" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                </div>
                                 <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Kullanıcı Telefon Numarası</label>
                                    <input  name="tel" value="<?php echo $kullanicicek["tel"]; ?>" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Kullanıcı Mail</label>
                                    <input  name="email" value="<?php echo $kullanicicek["email"]; ?>" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Kullanıcı Şifre</label>
                                    <input  name="parola" value="<?php echo $kullanicicek["parola"]; ?>" type="text" class="form-control" aria-required="true" aria-invalid="false" >                                  
                                </div>
                                <div>
                                    <div class="card-footer right">
                                        <div align="right" >
                                            <button type="submit" class="btn btn-success btn-sm" name="kullaniciguncelle">
                                                <i class="fa fa-dot-circle-o"></i>Güncelle
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
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
