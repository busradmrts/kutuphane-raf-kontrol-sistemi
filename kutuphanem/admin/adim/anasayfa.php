<?php 
include "menubar.php";
include '../vt/baglan.php';
$kitapsor=$db->prepare("SELECT * FROM islem");
$kitapsor->execute();
?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">Kitap Listesi</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Alış Tarihi</th>
                                                <th>İade Tarihi</th>
                                                <th>Ad Soyad</th>
                                                <th>Kitap Adı</th>
                                                <th>Borç</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                while($kitapcek=$kitapsor->fetch(PDO::FETCH_ASSOC)) {?>
                                                    <tr class="tr-shadow">
                                                        <td><?php echo $kitapcek["alistarih"]; ?></td>
                                                        <td><?php echo $kitapcek["veristarih"]; ?></td>
                                                        <td><?php echo $kitapcek["uyeAdi"]; ?></td>
                                                        <td><?php echo $kitapcek["kitapadi"]; ?></td>
                                                        <td><?php echo $kitapcek["borc"]; ?></td>
                                                    </tr>
                                        </tbody>
                                            <?php 
                                                } 
                                            ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
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
    <script src="js/main.js"></script>
</body>
</html>