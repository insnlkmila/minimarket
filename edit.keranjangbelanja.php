<?php 
include "koneksi.php";
if(isset($_GET['ni'])){
        $ni     = $_GET['ni'];
        $query  = mysqli_query($db_link,'select * from keranjangbelanja where id_belanja = "'.$ni.'"');
        $data   = mysqli_fetch_array($query);
        $id_belanja = $data['id_belanja'];
        $nama_barang    = $data['nama_barang'];
        $jumlah = $data['jumlah'];
        $harga  = $data['harga'];
    }
    else{
    $id_belanja = '';
    $nama_barang = '';
    $jumlah = '';
    $harga = '';
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <title>Minimart</title>
        <link rel="stylesheet" href="assets/plugins/morris/morris.css">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">
        <div id="wrapper">
            <div class="topbar">
                <div class="topbar">
                        <class="logo">
                        <a><p align="center"><font face="Ubuntu" size="6" color="white"><b> MINIMART BAROKAH</font></b></p>
                        </a>
                    </div>
                </div>
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                                <button class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="md md-menu"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                
                                </li>
                            </ul>
                    </div>
                </div>
            </div>

<div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div id="sidebar-menu">
                        <ul>
                            <li class="has_sub">
                                <a href="index.php" class="waves-effect"><i class=""></i> <span>Tambah Data </span> <span class="menu-arrow"></span></a>
                            </li>


                            <li class="has_sub">
                                <a href="index1.php" class="waves-effect"><i class=""></i> <span>Lihat Data</span> <span class="menu-arrow"></span> </a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="content-page">
                    <div class="container">
            <div class="jumbotron">


  <form action="edit.act.data_barang.php" method="post">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ID Belanja</label>
                    <div class="col-sm-10">
                      <input name="id_belanja" type="text" class="form-control" placeholder="" value="<?php echo $id_belanja; ?>" readonly>
                    </div>
                  </div>
                    
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
                      <input name="nama_barang" type="text" class="form-control" placeholder="" value="<?php echo $nama_barang; ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                      <input name="Jumlah" type="text" class="form-control" placeholder="" value="<?php echo $jumlah; ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                      <input name="harga" type="text" class="form-control" placeholder="" value="<?php echo $harga; ?>">
                    </div>
                  </div>

        <div class="modal-footer">
            <a href='index1.php' button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</a></button>
            <input class="btn btn-primary" type="submit" name="edit" value="Simpan">
        </div>

                </form>


      
                
   

                                </div>
 </div>        
 </div>
                       
                <footer class="footer text">
                    Sistem Informasi Minimart Barokah © 2018. All rights reserved.
                </footer>
            </div>
        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>

        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="assets/plugins/peity/jquery.peity.min.js"></script>

        <!-- jQuery  -->
        <script src="assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>



        <script src="assets/plugins/morris/morris.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>

        <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>

        <script src="assets/pages/jquery.dashboard.js"></script>

        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });

                $(".knob").knob();

            });
        </script>
    </body>
</html>