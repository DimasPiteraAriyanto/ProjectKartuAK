<?php include_once('../_header.php');?>
<html>
<body>
        <div class="box">
            <h1>Kartu AK / 1</h1>
            <h4>
                <small>Data Kartu AK / 1</small>
                <div class="pull-right">
                    <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                    <a href="" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i>Tambah Data</a>
                </div>
            </h4>
                <div style="margin-bottom: 20px;">
                    <form class="form-inline" action="" method="post">
                    <div class="form-group">
                    <input type="text" name="pencarian" class="form-control" placeholder="Cari NIK"></input>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </div>
                    </form>
                </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Pendaftaran</th>
                            <th>NIK</th>
                            <th>Nama Lengkap</th>
                            <th>Tempat, Tanggal Lahir</th>
                            <th>Status</th>
                            <th>Jenis Kelamin</th>
                            <th><i class="glyphicon glyphicon-cog"></i> Aksi</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $batas = 3;
                        $hal = @$_GET['hal'];
                        if(empty($hal)) {
                            $posisi = 0;
                            $hal = 1;
                        } else{
                            $posisi = ($hal - 1) * $batas;
                        }
                        $no = 1;
                        if($_SERVER['REQUEST_METHOD'] == "POST"){
                            $pencarian = trim(mysqli_real_escape_string($con, $_POST['pencarian']));
                            if($pencarian != '') {
                                $sql = "SELECT *, SUBSTRING(tanggal, 9, 2) as hari, SUBSTRING(tanggal, 6, 2) as bulan, SUBSTRING(tanggal, 3, 2) as th  FROM tb_ktp WHERE nik LIKE '%$pencarian%'";
                                $query = $sql;
                                $queryJml = $sql;
                            } else {
                                $query = "SELECT *, SUBSTRING(tanggal, 9, 2) as hari, SUBSTRING(tanggal, 6, 2) as bulan, SUBSTRING(tanggal, 3, 2) as th FROM tb_ktp LIMIT $posisi, $batas";
                                $queryJml =  "SELECT * FROM tb_ktp";
                                $no = $posisi + 1;
                            }
                        } else {
                            $query = "SELECT *, SUBSTRING(tanggal, 9, 2) as hari, SUBSTRING(tanggal, 6, 2) as bulan, SUBSTRING(tanggal, 3, 2) as th FROM tb_ktp LIMIT $posisi, $batas, ";
                            $queryJml =  "SELECT * FROM tb_ktp"; 
                            $no = $posisi + 1;
                            }
                        
                        $sql_ak = mysqli_query($con, $query) or die (mysqli_error($con));
                        if(mysqli_num_rows($sql_ak) > 0){
                            while($data = mysqli_fetch_array($sql_ak)) { 
                        ?>
                                <tr>
                                    <td><?=$no++?></td>
                                    <td>3402<?=$data['no_pendaftaran']?><?=$data['hari']?><?=$data['bulan']?><?=$data['th']?></td>
                                    <td><?=$data['nik']?></td>
                                    <td><?=$data['nama_lengkap']?></td>
                                    <td><?=$data['tempat_lahir']?>,<?=$data['tanggal_lahir']?></td>
                                    <td><?=$data['stats']?></td>
                                    <td><?=$data['jk']?></td>
                                    <td class="text-center">
                                        <a href="edit.php?id=<?=$data['nik']?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                                    </td>
                                    
                                </tr>
                        <?php
                            }
                        } else {
                            echo "<tr><td colspan=\"4\" align=\"center\">Data Tidak Dapat Ditemukan</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <?php
            if(@$_POST['pencarian'] == '') {?>
                <div style="float:left;">"; 
                <?php
                $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
                echo "Jumlah Data : <b>$jml</b>";
                ?>
                </div>
                <div style="float:right;">
                   <ui class="pagination pagination-sm" style="margin:0">
                    <?php
                           $jml_hal = ceil($jml / $batas);
                           for($i=1; $i <= $jml_hal; $i++){
                            if($i=1 != $hal){
                               echo"<li><a href=\"?hal=$i\">$i</a></li>";
                            } else {
                               echo"<li class=\"active\"><a>$i</a></li>";
                            }
                    }
                    ?>
                    </ui>
            </div>
            <?php
                
            } else {
                echo "<div style=\"float:left;\">";
                $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
                echo"Data Hasil Pencarian : <b>$jml</b>";
                echo "</div>";
            }
            ?>
        </div>
        <div class="pull-right">
        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><li class="glyphicon glyphicon-chevron-left"></li></a>
        </div>
        
        </body>
            
</html>
<?php include_once('../_footer.php');?>