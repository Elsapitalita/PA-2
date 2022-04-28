<?php
include_once('Function/connector.php');
$id = $_POST['ids'];

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>PPKHA IT Del</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <link rel="stylesheet" href="CSS/Profile_Page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>
<?php
session_start();
if($_SESSION['status']!="login"){
    header("location:../Login/Login%20Form.php?pesan=belum_login");

}
$username = $_SESSION['username'];

$query = mysqli_query($db, "SELECT * FROM users WHERE username = '$username' ");

$data = mysqli_fetch_array($query);
?>
<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div id="dismiss">
            <i class="fa fa-times"></i>
        </div>

        <div class="sidebar-header">
            <h3>PPKHA IT Del</h3>
        </div>

        <ul class="list-unstyled components">

            <li>
                <a href="Bimbingan Karir/BimbinganKarir_TampilanAwal.php"><i class="fas fa-fw fa-briefcase"></i>Bimbingan karir dan Informasi Kerja
                </a>
            </li>
            <li>
                <a href="Tracer%20Study/TracerStudy_TampilanAwal.php">
                    <i class="fas fa-fw fa-search-plus"></i>Tracer Study
                </a>
            </li>
            <li>
                <a href="Waktu Tunggu Kerja Lulusan/WaktuTungguKerjaLulusan_TampilanAwal.php">
                    <i class="fas fa-fw fa-clock"></i>Waktu Tunggu
                    Kerja Lulusan</a>
            </li>
            <li>
                <a href="Instrumen Tracer Study/InstrumentTracerStudy_TampilanAwal.php"><i class="fas fa-fw fa-toolbox"></i>Instrumen Tracer
                    Study
                </a>
            </li>
            <li>
                <a href="Tingkat Kepuasan Alumni/TingkatKepuasanAlumni_TampilanAwal.php">
                    <i class="fas fa-fw fa-smile"></i>Tingkat Kepuasan
                    Alumni</a>
            </li>
            <li>
                <a href="Ukuran Kerja Lulusan/UkuranKerjaLulusan_TampilanAwal.php"><i class="fas fa-fw fa-ruler"></i>Ukuran Kerja Lulusan
                </a>
            </li>
            <li>
                <a href="Partisipasi Alumni/PartisipasiAlumni_TampilanAwal.php">
                    <i class="fas fa-fw fa-user-friends"></i>Partisipasi Alumni</a>
            </li>
            <li>
                <a href="Rasio Alumni/RasioAlumni_TampilanAwal.php">
                    <i class="fas fa-fw fa-percentage"></i>Rasio Alumni
                </a>
            </li>
        </ul>
    </nav>


    <div id="content">

        <nav class="navbar navbar-expand-lg " style="background-color: #4CB5F5;padding: 2px;">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fa fa-align-justify"></i>
                </button>



                <ul class="nav navbar-nav  ml-auto">
                    <a  href="#"  id="dropdownMenuLink" data-toggle="dropdown" >
                        <div class="profile-container">
                            <div class="dropdown show">
                                <div class="row"  style="display: flex;">
                                    <div class="col-md-2">
                                        <img src="img/1.png" alt="" class="rounded-circle" width="40px">
                                    </div>
                                    <div class="col-md-10 name" style="display: flex;"><span style="margin: auto;">Johannes PM Manurung</span><i class="fas fa-caret-down" style="margin: auto;"></i></div>
                                </div></a>

                    <div class="dropdown-menu dropdown-profile dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <div class="top" style="display: flex; flex-direction:column;">

                            <img src="img/1.png" alt="" class="rounded-circle" width="140px" style="margin: auto;">

                            <span style="margin: auto; margin-top: 10px;">Johannes PM Manurung</span>

                        </div>
                        <div class="bottom">
                            <button onclick="window.location.href='#'" class="btns ">Profile</button>
                            <button onclick="window.location.href='../Function/logout.php'" class="btns text-right">Sign Out</button>
                        </div>
                    </div>


            </div>
    </div>
    </ul>

    </nav>




    <nav class="breadcrumb-container" aria-label="breadcrumb brea">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><a href="Profile_Page.php">Profil Pengguna</a></li>
        </ol>
    </nav>
    <div class="container-fluid" id="background">
        <form action="ProsesUbahProfile.php" method="post" enctype="multipart/form-data">
            <div class="keterangan">
            <div class="indikator-utama">
                <center><h1>Profil Pengguna</h1></center>
            </div>
            <div class="lainnya">
                <div style="margin-top: 0px;" class="row">
                    <div class="col-md-4 col-sm-6"><h2 style="margin-left: 40px;"><b>Profil Pengguna</b></h2></div>
                    <div class="col-md-8 col-sm-6 text-left"><h2 style="margin-left: 40px;"><b>Informasi Pengguna</b></h2></div>
                </div>
                <br>
                <div class="row" id="profilpict">
                    <div class="col-md-4 col-sm-6">
                        <div class="row">
                            <input type="file" class="form-control" name="gambar" value="<?php echo  $data[2]?>">
                            file yang sudah ada : <?php echo  $data[4]?>
                        </div>

                        <div class="row">
                            <Button type="submit"  id="tes">Ubah Profil</Button>

                        </div>

                    </div>

                    <div class="col-md-8 col-sm-6 text-left">
                        <div class="row">
                            <div class="col-md-5 col-sm-3">
                                <p id="info">Nama</p>
                            </div>
                            <div class="col-md-7 col-sm-3">
                                <input type="text" class="form-control" name="nama" value="<?php echo  $data[2]?>">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-5 col-sm-3">
                                <p id="info">Username</p>
                            </div>
                            <div class="col-md-7 col-sm-3">
                                <input type="text" class="form-control" name="username" value="<?php echo  $data[0]?>" readonly>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-5 col-sm-3">
                                <p id="info">Password</p>
                            </div>
                            <div class="col-md-7 col-sm-3">
                                <input type="text" class="form-control" name="password" value="<?php echo  $data[1]?>">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-5 col-sm-3">
                                <p id="info">Email</p>
                            </div>
                            <div class="col-md-7 col-sm-3">
                                <input type="text" class="form-control" name="email" value="<?php echo  $data[3]?>">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-5 col-sm-3">
                                <p id="info">No. Telp</p>
                            </div>
                            <div class="col-md-7 col-sm-3">
                                <input type="text" class="form-control" name="telp" value="<?php echo  $data[5]?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>




    </div>
    <div class="footer" >
        2019-2020 Pusat Pengembangan Karir dan Hubungan Alumni Institut Teknologi Del
    </div>

</div>

<div class="overlay"></div>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('#dismiss, .overlay').on('click', function () {
            $('#sidebar').removeClass('active');
            $('.overlay').removeClass('active');
        });

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').addClass('active');
            $('.overlay').addClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });
</script>
</body>

</html>