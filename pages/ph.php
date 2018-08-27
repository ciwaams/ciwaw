<?php
    session_start();
    if(empty($_SESSION['username'])){
        header('location:../index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PT RAISINDO JASATAMA MANDIRI</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <!--<link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">-->

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" href="../logo.png">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand">ADMIN</a>
            </div>
             <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <!--<a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>-->
                     <li class="divider"></li>
                        <li><a href="../index.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                    <!--<ul class="dropdown-menu dropdown-user">
                        <li><a href="../UpdateAdmin.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../index.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
            </ul>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Pedoman Harga Barang</h1>
                    <input type='button' value='Tambah Data' onClick='top.location="tambahph.php"' class='btn btn-primary'>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <br>
            <div class="row">
                <div clasAs="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Harga
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Spesifikasi</th>
                                        <th>Qty</th>
                                        <th>Satuan</th>
                                        <th>Harga</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                    $nomor=0;
                    include("koneksi.php");                    
                    $sql = $mysqli->query("SELECT * FROM ph group by id_ph ORDER BY id_ph")
					while($data = mysqli_fetch_assoc($sql)){
                    
                    $nomor++;
                    ?>
                                    <tr class="odd gradeX">                                     
                                        <td><?=$nomor?></td>
                                        <td><?php echo $data['nama_barang'] ?></td>
                                        <td><?php echo $data['spesifikasi'] ?></td>
                                        <td><center><?php echo $data['qty'] ?></center></td>
                                        <td><center><?php echo $data['satuan'] ?></center></td>
                                        <td>Rp<?php echo number_format($data['harga'])?></td>                                     
                                        <td><?php echo $data['keterangan'] ?></td>
                                        <td><center><a href="editph.php?id_ph=<?php echo $data['id_ph']; ?>" class="fa fa-pencil"></a> | 
                                            <a href="act_hapusph.php?id_ph=<?php echo $data['id_ph']; ?>" class="fa fa-times" onClick="return confirm('Apakah Anda Yakin Hapus data?')"></a></center></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                           </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
</body>

</html>
