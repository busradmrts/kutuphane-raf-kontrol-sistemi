<?php 
include "menubar.php";
include  '../vt/baglan.php';
$kitapsor=$db->prepare("SELECT * FROM kitap where kitapid=:id");
$kitapsor->execute(array(
  'id' => $_GET['kitapid']
  ));
$kitapcek=$kitapsor->fetch(PDO::FETCH_ASSOC);
?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Kitap Bilgi Düzenleme Formu</strong> 
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="../vt/islem.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Kitap Kapak Fotoğrafı</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="kitap_resim" required="required"/ <?php echo $kitapcek['kitap_resim'] ?>" class="form-control-file">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Kitap Adı</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="kitapAdi" value="<?php echo $kitapcek['kitapAdi'] ?>" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Yazar</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="yazarAdi" value="<?php echo $kitapcek['yazarAdi'] ?>" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Tür</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="turAdi" value="<?php echo $kitapcek['turAdi'] ?>" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Yayınevi</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="email-input" name="yayineviAdi" value="<?php echo $kitapcek['yayineviAdi'] ?>" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Raf Bilgisi</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="password-input" name="rafNo" value="<?php echo $kitapcek['rafNo'] ?>" placeholder="Raf Bilgisini Giriniz." class="form-control">
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <input type="hidden" name="kitapid" value="<?php echo $kitapcek['kitapid'] ?>"> 
                                                 <button type="submit" class="btn btn-primary btn-sm" name="kitapBilgiguncelle">
                                                    <i class="fa fa-dot-circle-o"></i> Güncelle
                                                </button>
                                               
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
