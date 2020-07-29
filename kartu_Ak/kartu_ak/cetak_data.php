<?php include_once('../_header.php');?>
<html>
<body>
<link href="<?=base_url('_assets/libs/DataTables/datatables.min.css');?>" rel="stylesheet">
        <div class="box">
            <h1>Kartu AK / 1</h1>
            <h4>
                <small>Data Kartu AK / 1</small>
                <div class="pull-right">
                    <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                    <a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i>Tambah Data</a>
                </div>
            </h4>
                
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="kartu_ak">
                    <thead>
                        <tr>
                            <th><small>No</small></th>
                            <th><small>No Pendaftaran</small></small>
                            <th><small>NIK</small></th>
                            <th><small>Nama Lengkap</small></th>
                            <th><small>Tempat, Tanggal Lahir</small></th>
                            <th><small>Status</small></th>
                            <th><small>Jenis Kelamin</small></th>
                            <th><small>Agama</small></th>
                            <th><small>Alamat</small></th>
                            <th><small>Nomor Telepon</small></th>
                            <th><small>SD</small></th>
                            <th><small>SMP</small></th>
                            <th><small>SMA / SMK</small></th>
                            <th><small>Jurusan SMA</small></th>
                            <th><small>D1</small></th>
                            <th><small>Jurusan D1</small></th>
                            <th><small>D2</small></th>
                            <th><small>Jurusan D2</small></th>
                            <th><small>D3</small></th>
                            <th><small>Jurusan D3</small></th>
                            <th><small>S1</small></th>
                            <th><small>Jurusan S1</small></th>
                            <th><small>S2</small></th>
                            <th><small>Jurusan S2</small></th>
                            <th><small>Keterampilan 1</small></th>
                            <th><small>Keterampilan 2</small></th>
                            <th><small>Keterampilan 3</small></th>
                            <th><small>Tujuan Dalam Negeri</small></th>
                            <th><small>Tujuan Luar Negeri</small></th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $sql_ak = mysqli_query($con,"SELECT * , SUBSTRING(tanggal, 9, 2) as hari, SUBSTRING(tanggal, 6, 2) as bulan, SUBSTRING(tanggal, 3, 2) as th FROM tb_ktp") or die (mysqli_error($con));
                        if(mysqli_num_rows($sql_ak) > 0){
                            while($data = mysqli_fetch_array($sql_ak)) { 
                        ?>
                                <tr>
                                    <td><small><?=$no++?><small></td>
                                    <td><small><?=$data['no_pendaftaran']?>-<?=$data['hari']?><?=$data['bulan']?><?=$data['th']?></small></td>
                                    <td><small><?=$data['nik']?></small></td>
                                    <td><small><?=$data['nama_lengkap']?></small></td>
                                    <td><small><?=$data['tempat_lahir']?>,<?=$data['tanggal_lahir']?></small></td>
                                    <td><small><?=$data['stats']?></small></td>
                                    <td><small><?=$data['jk']?></small></td>
                                    <td><small><?=$data['agama']?></small></td>
                                    <td><small><?=$data['alamat']?></small></td>
                                    <td><small><?=$data['no_telp']?></small></td>
                                    <td><small><?=$data['sd']?></small></td>
                                    <td><small><?=$data['sltp']?></small></td>
                                    <td><small><?=$data['slta']?></small></td>
                                    <td><small><?=$data['sltaJur']?></small></td>
                                    <td><small><?=$data['d1']?></small></td>
                                    <td><small><?=$data['d1Jur']?></small></td>
                                    <td><small><?=$data['d2']?></small></td>
                                    <td><small><?=$data['d2Jur']?></small></td>
                                    <td><small><?=$data['d3']?></small></td>
                                    <td><small><?=$data['d3Jur']?></small></td>
                                    <td><small><?=$data['s1']?></small></td>
                                    <td><small><?=$data['s1Jur']?></small></td>
                                    <td><small><?=$data['s2']?></small></td>
                                    <td><small><?=$data['s2Jur']?></small></td>
                                    <td><small><?=$data['keterampilan1']?></small></td>
                                    <td><small><?=$data['keterampilan2']?></small></td>
                                    <td><small><?=$data['keterampilan3']?></small></td>
                                    <td><small><?=$data['tujuanDalam']?></small></td>
                                    <td><small><?=$data['tujuanLuar']?></small></td>
                                    
                                    
                                    
                                </tr>
                        <?php
                        
                            }
                        } else {
                            echo "<tr><td colspan=\"4\" align=\"center\">Data Tidak Dapat Ditemukan</td></tr>";
                        }
                        
                        ?>
                        <script>
                        $(document).ready(function() {
                            $('#kartu_ak').DataTable( {
                                dom: 'Bfrtip',
                                buttons: [
                                    'copy', 'csv', 'excel',
                                ]
                            } );
                        } );
                        </script>
                    </tbody>
                </table>
            </div>
            
        </div>
        <div class="pull-left">
        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><li class="glyphicon glyphicon-chevron-left"></li></a>
        </div>
</body>
<script 
        src="<?=base_url('_assets/libs/DataTables/datatables.min.js')?>">
        <script src="<?=base_url('_assets/libs/DataTables/Buttons-1.6.2/js/buttons.flash.min.js')?>"></script>
        <script src="<?=base_url('_assets/libs/DataTables/JSZIP-2.5.0/jszip.min.js')?>"></script>
        <script src="<?=base_url('_assets/libs/DataTables/Buttons-1.6.2/js/buttons.html5.min.js')?>"></script>
        <script src="<?=base_url('_assets/libs/DataTables/Buttons-1.6.2/js/buttons.print.min.js')?>"></script>
</script>
</html>
<?php include_once('../_footer.php');?>