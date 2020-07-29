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
                    <a href="add_admin.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i>Tambah Data</a>
                </div>
            </h4>
                
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="kartu_ak">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</>
                            <th>Nama</th>
                            <th>Bagian</th>
                            <th><i class="glyphicon glyphicon-cog"></i> Aksi</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $sql_ak = mysqli_query($con,"SELECT * FROM tb_user") or die (mysqli_error($con));
                        if(mysqli_num_rows($sql_ak) > 0){
                            while($data = mysqli_fetch_array($sql_ak)) { 
                        ?>
                                <tr>
                                    <td><?=$no++?></td>
                                    <td><?=$data['nip']?></td>
                                    <td><?=$data['nama_user']?></td>
                                    <td><?=$data['bagian']?></td>
                                    <td class="text-center">
                                        <a href="edit.php?id=<?=$data['nik']?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                                        <a href="del.php?id=<?=$data['nip']?>" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                                    </td>
                                </tr>
                        <?php
                        
                            }
                        } else {
                            echo "<tr><td colspan=\"4\" align=\"center\">Data Tidak Dapat Ditemukan</td></tr>";
                        }
                        
                        ?>
                        <script>
                        $(document).ready(function() {
                        $('#kartu_ak').DataTable();
                        });
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