<?php include ('./includes/head.php');
if(isset($_GET['yıl'])) {
    $year = $_GET['yıl']; 
    $ay = $_GET['ay'];  
} else {
    $year = date("Y"); 
    $ay = date("n"); 
}

if($_POST) {
  $pyıl = $_POST['yıl'];
  $pay = $_POST['ay'];
  header("location:kasa.php?ay=$pay&yıl=$pyıl");
}
?>
<style>
    label {
        display: flex;
        align-items: center;
    }
</style>
<body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

         <?php include ('./includes/navbar.php') ?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Ana Sayfa</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Kasa</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                 <form  method="post">
                                 <div class="flex-1">
                                   <h3>Yıl</h3>
                                   <input name="yıl" type="text" value="<?=$year?>">
                                   <h3>Ay</h3>
                                   <select name="ay">
                                       <option <?php if($ay == 1) {echo 'selected';} ?> value="1">Ocak</option>
                                       <option <?php if($ay == 2) {echo 'selected';} ?> value="2">Şubat</option>
                                       <option <?php if($ay == 3) {echo 'selected';} ?> value="3">Mart</option>
                                       <option <?php if($ay == 4) {echo 'selected';} ?> value="4">Nisan</option>
                                       <option <?php if($ay == 5) {echo 'selected';} ?> value="5">Mayıs</option>
                                       <option <?php if($ay == 6) {echo 'selected';} ?> value="6">Haziran</option>
                                       <option <?php if($ay == 7) {echo 'selected';} ?> value="7">Temmuz</option>
                                       <option <?php if($ay == 8) {echo 'selected';} ?> value="8">Ağustos</option>
                                       <option <?php if($ay == 9) {echo 'selected';} ?> value="9">Eylül</option>
                                       <option <?php if($ay == 10) {echo 'selected';} ?> value="10">Ekim</option>
                                       <option <?php if($ay == 11) {echo 'selected';} ?> value="11">Kasım</option>
                                       <option <?php if($ay == 12) {echo 'selected';} ?> value="12">Aralık</option>
                                   </select>
                                   <input type="submit" class="btn mb-1 btn-flat btn-outline-secondary" value="Tamam">
                                   </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row"  id="update">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="display: inline-block;">Kasa Veritabanı</h4>
                                <button type="button" class="btn mb-1 btn-flat btn-outline-secondary" style="float: right;" id="downloadexcel">Excel Olarak İndir</button>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration"  id="table-x">
                                        <thead>
                                            <tr>
                                                <th>Numara</th>
                                                <th>Açıklama</th>
                                                <th>Gelir</th>
                                                <th>Gider</th>
                                                <th>Kasa</th>
                                                <th>Tarih</th>
                                                <th>Yenile</th>
                                                <th>Sil</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                           $sql = "SELECT * FROM finances WHERE ay=$ay AND yıl=$year";
                           $result = mysqli_query($conn, $sql);;
                           if (mysqli_num_rows($result) > 0) {
                               while ($row = mysqli_fetch_assoc($result)) {
                                echo '
                                <tr>
                                <td>'.$row['id'].'</td>
                                <td>'.$row['text'].'</td>
                                <td style="color: green;">'.$row['gelir'].' ₺</td>
                                <td style="color: red;">'.$row['gider'].' ₺</td>
                                <td>'.$row['kasa'].' ₺</td>
                                <td>'.$row['tarih'].'</td>
                                <td><center><a href="kasa.php?ay='.$row['ay'].'&yıl='.$row['yıl'].'&id='.$row['id'].'#update"><svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="20px" height="20px" viewBox="0 0 1920 1920">
                                <g fill-rule="evenodd">
                                    <path d="M106.667 267H320v213.333h853.33V267h213.34v160h106.66V160.333h-329.1C1142.26 98.19 1083 53.667 1013.33 53.667H480c-69.665 0-128.931 44.523-150.896 106.666H0V1867h1493.33v-320h-106.66v213.33H106.667V267Zm320 106.667v-160c0-29.456 23.878-53.334 53.333-53.334h533.33c29.46 0 53.34 23.878 53.34 53.334v160H426.667Z"/>
                                    <path d="m1677.57 528.309 225.88 225.883c22.02 22.023 22.02 57.713 0 79.849L1225.8 1511.69c-10.62 10.5-24.96 16.49-39.98 16.49H959.937c-31.171 0-56.47-25.3-56.47-56.47v-225.89c0-15.02 5.986-29.36 16.489-39.86L1597.6 528.309c22.14-22.136 57.83-22.136 79.97 0Zm-155.41 235.144 146.03 146.033 115.43-115.426-146.04-146.033-115.42 115.426Zm-505.75 651.787h146.03l425.9-425.9-146.03-146.038-425.9 425.898v146.04Z"/>
                                </g>
                            </svg></td></a></center>
                                <td><center><a href="./process/kasasil.php?id='.$row['id'].'"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="20px" height="20px"><path d="M 21 0 C 19.355469 0 18 1.355469 18 3 L 18 5 L 10.1875 5 C 10.0625 4.976563 9.9375 4.976563 9.8125 5 L 8 5 C 7.96875 5 7.9375 5 7.90625 5 C 7.355469 5.027344 6.925781 5.496094 6.953125 6.046875 C 6.980469 6.597656 7.449219 7.027344 8 7 L 9.09375 7 L 12.6875 47.5 C 12.8125 48.898438 14.003906 50 15.40625 50 L 34.59375 50 C 35.996094 50 37.1875 48.898438 37.3125 47.5 L 40.90625 7 L 42 7 C 42.359375 7.003906 42.695313 6.816406 42.878906 6.503906 C 43.058594 6.191406 43.058594 5.808594 42.878906 5.496094 C 42.695313 5.183594 42.359375 4.996094 42 5 L 32 5 L 32 3 C 32 1.355469 30.644531 0 29 0 Z M 21 2 L 29 2 C 29.5625 2 30 2.4375 30 3 L 30 5 L 20 5 L 20 3 C 20 2.4375 20.4375 2 21 2 Z M 11.09375 7 L 38.90625 7 L 35.3125 47.34375 C 35.28125 47.691406 34.910156 48 34.59375 48 L 15.40625 48 C 15.089844 48 14.71875 47.691406 14.6875 47.34375 Z M 18.90625 9.96875 C 18.863281 9.976563 18.820313 9.988281 18.78125 10 C 18.316406 10.105469 17.988281 10.523438 18 11 L 18 44 C 17.996094 44.359375 18.183594 44.695313 18.496094 44.878906 C 18.808594 45.058594 19.191406 45.058594 19.503906 44.878906 C 19.816406 44.695313 20.003906 44.359375 20 44 L 20 11 C 20.011719 10.710938 19.894531 10.433594 19.6875 10.238281 C 19.476563 10.039063 19.191406 9.941406 18.90625 9.96875 Z M 24.90625 9.96875 C 24.863281 9.976563 24.820313 9.988281 24.78125 10 C 24.316406 10.105469 23.988281 10.523438 24 11 L 24 44 C 23.996094 44.359375 24.183594 44.695313 24.496094 44.878906 C 24.808594 45.058594 25.191406 45.058594 25.503906 44.878906 C 25.816406 44.695313 26.003906 44.359375 26 44 L 26 11 C 26.011719 10.710938 25.894531 10.433594 25.6875 10.238281 C 25.476563 10.039063 25.191406 9.941406 24.90625 9.96875 Z M 30.90625 9.96875 C 30.863281 9.976563 30.820313 9.988281 30.78125 10 C 30.316406 10.105469 29.988281 10.523438 30 11 L 30 44 C 29.996094 44.359375 30.183594 44.695313 30.496094 44.878906 C 30.808594 45.058594 31.191406 45.058594 31.503906 44.878906 C 31.816406 44.695313 32.003906 44.359375 32 44 L 32 11 C 32.011719 10.710938 31.894531 10.433594 31.6875 10.238281 C 31.476563 10.039063 31.191406 9.941406 30.90625 9.96875 Z"/></svg></a></center></td>
                                </tr>
                                ';
                                }} ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Numara</th>
                                                <th>Açıklama</th>
                                                <th>Gelir</th>
                                                <th>Gider</th>
                                                <th>Kasa</th>
                                                <th>Tam Tarih</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <button type="button" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Veri Ekle</button>
                            </div>
                        </div>
                    </div>
                </div>
    <?php if(isset($_GET['id'])) { ?>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body"> 
                            <?php if(isset($_GET['id'])) {
                            $id = $_GET['id'];
                            $sql = "SELECT * FROM finances WHERE ay=$ay AND yıl=$year AND id=$id";
                            $result = mysqli_query($conn, $sql);;
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $text = $row['text'];
                                    $gelir = $row['gelir'];
                                    $gider = $row['gider'];
                                 }}
                            } ?>
                             <h4 class="card-title">Veri güncelle</h4>
                             <form method='post' action='./process/kasaUpdate.php'>
                                <div class="flex-1">
                                <label for="açıklama">Açıklama</label>
                                <textarea type="text" name="text"><?=@$text?></textarea>
                                <label for="açıklama">Gelir</label>
                                <input type="text" name="gelir" value="<?=@$gelir?>">
                                <label for="açıklama">Gider</label>
                                <input type="text" name="gider" value="<?=@$gider?>">
                                <input type="submit" class="btn mb-1 btn-flat btn-outline-secondary" value="Tamam">
                                <input type="text" name="id" style="display: none;" value="<?=@$id?>">
                                <input type="text" name="ay" style="display: none;" value="<?=$ay?>">
                                <input type="text" name="year" style="display: none;" value="<?=$year?>">
                                </div>
                             </form>
                            </div>
                        </div>
                    </div>
                </div>
    <?php } ?>
    <div class="row">
        <?php
        $sql = "SELECT SUM(gelir) FROM finances WHERE ay=$ay AND yıl=$year";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $toplamGelir = $row['SUM(gelir)'];
        }
        $sql = "SELECT SUM(gider) FROM finances WHERE ay=$ay AND yıl=$year";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $toplamGider = $row['SUM(gider)'];
        }
        $kasa = ($toplamGelir - $toplamGider);
        ?>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-content">
                                    <div class="stat-text">Toplam Gelir</div>
                                    <div class="stat-digit gradient-3-text"><?php echo $toplamGelir; ?> ₺</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-content">
                                    <div class="stat-text">Toplam Gider</div>
                                    <div class="stat-digit gradient-4-text"><?php echo $toplamGider; ?> ₺</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-content">
                                    <div class="stat-text">Kasa</div>
                                    <div class="stat-digit gradient-4-text"><?php echo $kasa; ?> ₺</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Çizgi Grafiği</h4>
                                <canvas id="line-chart" width="500" height="250"></canvas>
                            </div>
                        </div>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Veri Ekleme</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method='post' action='./process/kasa.php'>
                                                        <div class="form-group">
                                                            <label for="message-text" class="col-form-label">Açıklama:</label>
                                                            <textarea class="form-control" id="message-text" name="text"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Gelir:</label>
                                                            <input type="text" class="form-control" id="recipient-name" name="gelir" value="0">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Gider:</label>
                                                            <input type="text" class="form-control" id="recipient-name" name="gider" value="0">
                                                        </div>
                                                        <input type="text" name="ay" style="display: none;" value="<?=$ay?>">
                                                        <input type="text" name="year" style="display: none;" value="<?=$year?>">
                                                        <input type="submit" class="btn mb-1 btn-flat btn-outline-secondary" value="Tamam">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <script src="./plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="./plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="./plugins/tables/js/datatable-init/datatable-basic.min.js"></script>
    <script src="./js/table2excel.js"></script>
    <script>
        document.getElementById('downloadexcel').addEventListener('click', function(){
            var table2excel = new Table2Excel();
            table2excel.export(document.querySelectorAll("#table-x"));
        });
    </script>
            <?php
        $sql = "SELECT SUM(gelir) FROM finances WHERE ay=1 AND yıl=$year";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $toplamGelir1 = $row['SUM(gelir)'];
        }
        $sql = "SELECT SUM(gider) FROM finances WHERE ay=1 AND yıl=$year";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $toplamGider1 = $row['SUM(gider)'];
        }

        $sql = "SELECT SUM(gelir) FROM finances WHERE ay=2 AND yıl=$year";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $toplamGelir2 = $row['SUM(gelir)'];
        }
        $sql = "SELECT SUM(gider) FROM finances WHERE ay=2 AND yıl=$year";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $toplamGider2 = $row['SUM(gider)'];
        }

        $sql = "SELECT SUM(gelir) FROM finances WHERE ay=3 AND yıl=$year";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $toplamGelir3 = $row['SUM(gelir)'];
        }
        $sql = "SELECT SUM(gider) FROM finances WHERE ay=3 AND yıl=$year";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $toplamGider3 = $row['SUM(gider)'];
        }

        $sql = "SELECT SUM(gelir) FROM finances WHERE ay=3 AND yıl=$year";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $toplamGelir3 = $row['SUM(gelir)'];
        }
        $sql = "SELECT SUM(gider) FROM finances WHERE ay=3 AND yıl=$year";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $toplamGider3 = $row['SUM(gider)'];
        }

        $sql = "SELECT SUM(gelir) FROM finances WHERE ay=4 AND yıl=$year";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $toplamGelir4 = $row['SUM(gelir)'];
        }
        $sql = "SELECT SUM(gider) FROM finances WHERE ay=4 AND yıl=$year";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $toplamGider4 = $row['SUM(gider)'];
        }

        $sql = "SELECT SUM(gelir) FROM finances WHERE ay=5 AND yıl=$year";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $toplamGelir5 = $row['SUM(gelir)'];
        }
        $sql = "SELECT SUM(gider) FROM finances WHERE ay=5 AND yıl=$year";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $toplamGider5 = $row['SUM(gider)'];
        }

        $sql = "SELECT SUM(gelir) FROM finances WHERE ay=6 AND yıl=$year";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $toplamGelir6 = $row['SUM(gelir)'];
        }
        $sql = "SELECT SUM(gider) FROM finances WHERE ay=6 AND yıl=$year";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $toplamGider6 = $row['SUM(gider)'];
        }

        $sql = "SELECT SUM(gelir) FROM finances WHERE ay=7 AND yıl=$year";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $toplamGelir7 = $row['SUM(gelir)'];
        }
        $sql = "SELECT SUM(gider) FROM finances WHERE ay=7 AND yıl=$year";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $toplamGider7 = $row['SUM(gider)'];
        }

        $sql = "SELECT SUM(gelir) FROM finances WHERE ay=8 AND yıl=$year";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $toplamGelir8 = $row['SUM(gelir)'];
        }
        $sql = "SELECT SUM(gider) FROM finances WHERE ay=8 AND yıl=$year";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $toplamGider8 = $row['SUM(gider)'];
        }
        
        
        ?>
                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    
                    <script>
new Chart(document.getElementById("line-chart"), {
  type: 'line',
  data: {
    labels: ['ocak','şubat','mart','nisan','mayıs','haziran','temmuz','oğustos','eylül','ekim','kasım','aralık'],
    datasets: [{ 
        data: [<?=$toplamGelir2?>,<?=$toplamGelir3?>,<?=$toplamGelir4?>,<?=$toplamGelir5?>,<?=$toplamGelir6?>,<?=$toplamGelir7?>,<?=$toplamGelir8?>],
        label: "Gelir",
        borderColor: "#3e95cd",
        fill: false
      }, { 
        data: [<?=$toplamGider2?>,<?=$toplamGider3?>,<?=$toplamGider4?>,<?=$toplamGider5?>,<?=$toplamGider6?>,<?=$toplamGider7?>,<?=$toplamGider8?>],
        label: "Gider",
        borderColor: "#8e5ea2",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'Gelir Gider'
    }
  }
});
                    </script>

</body>

</html>