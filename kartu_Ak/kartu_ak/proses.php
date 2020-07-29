<?php
require_once "../_config/config.php";
require "../_assets/libs/vendor/autoload.php";


if(isset($_POST['add'])){
    $nik                = trim(mysqli_real_escape_string($con, $_POST['nik']));
    
    $query = mysqli_query($con, "SELECT MAX(no_pendaftaran) as nop FROM tb_ktp");
    $data = mysqli_fetch_array($query);
    $nop = $data['nop'];
    $urutan = (int) substr($nop, 7, 7);
    $urutan++;
    $huruf = "3402";
    $nop = $huruf . sprintf("%07s", $urutan);

    $nama_lengkap       = trim(mysqli_real_escape_string($con, $_POST['nama_lengkap']));
    $tempat_lahir       = trim(mysqli_real_escape_string($con, $_POST['tempat_lahir']));
    $tanggal_lahir      = trim(mysqli_real_escape_string($con, $_POST['tanggal_lahir']));
    $jk                 = trim(mysqli_real_escape_string($con, $_POST['jk']));
    $stats              = trim(mysqli_real_escape_string($con, $_POST['stats']));
    $agama              = trim(mysqli_real_escape_string($con, $_POST['agama']));
    $alamat             = trim(mysqli_real_escape_string($con, $_POST['alamat']));
    $no_telp            = trim(mysqli_real_escape_string($con, $_POST['no_telp']));
    $sd                 = trim(mysqli_real_escape_string($con, $_POST['sd']));
    $sltp               = trim(mysqli_real_escape_string($con, $_POST['sltp']));
    $slta               = trim(mysqli_real_escape_string($con, $_POST['slta']));
    $sltaJur            = trim(mysqli_real_escape_string($con, $_POST['sltaJur']));
    $d1                 = trim(mysqli_real_escape_string($con, $_POST['d1']));
    $d1Jur              = trim(mysqli_real_escape_string($con, $_POST['d1Jur']));
    $d2                 = trim(mysqli_real_escape_string($con, $_POST['d2']));
    $d2Jur              = trim(mysqli_real_escape_string($con, $_POST['d2Jur']));
    $d3                 = trim(mysqli_real_escape_string($con, $_POST['d3']));
    $d3Jur              = trim(mysqli_real_escape_string($con, $_POST['d3Jur']));
    $s1                 = trim(mysqli_real_escape_string($con, $_POST['s1']));
    $s1Jur              = trim(mysqli_real_escape_string($con, $_POST['s1Jur']));
    $s2                 = trim(mysqli_real_escape_string($con, $_POST['s2']));
    $s2Jur              = trim(mysqli_real_escape_string($con, $_POST['s2Jur']));
    $keterampilan1      = trim(mysqli_real_escape_string($con, $_POST['keterampilan1']));
    $keterampilan2      = trim(mysqli_real_escape_string($con, $_POST['keterampilan2']));
    $keterampilan3      = trim(mysqli_real_escape_string($con, $_POST['keterampilan3']));
    $tanggal = date("Y-m-d H:i:s"); 
    $tujuanDalam = trim(mysqli_real_escape_string($con, $_POST['tujuanDalam']));
    $tujuanLuar = trim(mysqli_real_escape_string($con, $_POST['tujuanLuar']));

	

    mysqli_query($con, "INSERT INTO tb_ktp (nik, no_pendaftaran, nama_lengkap, tempat_lahir, tanggal_lahir, jk, stats, agama, alamat, no_telp, sd, sltp, slta, sltaJur, d1, d1Jur, d2, d2Jur, d3, d3jur, s1, s1Jur, s2, s2Jur, keterampilan1, keterampilan2, keterampilan3, tanggal, tujuanDalam, tujuanLuar) 
    VALUES ('$nik','$nop','$nama_lengkap','$tempat_lahir','$tanggal_lahir', '$jk','$stats','$agama','$alamat','$no_telp','$sd','$sltp','$slta','$sltaJur','$d1','$d1Jur','$d2','$d2Jur','$d3','$d3Jur','$s1','$s1Jur','$s2','$s2Jur','$keterampilan1','$keterampilan2','$keterampilan3','$tanggal','$tujuanDalam','$tujuanLuar')") or die(mysqli_error($con));
    echo "<script>window.location='data.php';</script>";
    
}else if(isset($_POST['addmin'])){
    $nip                = trim(mysqli_real_escape_string($con, $_POST['nip']));
    $nama_user          = trim(mysqli_real_escape_string($con, $_POST['nama_user']));
    $password           = sha1(trim(mysqli_real_escape_string($con, $_POST['password'])));
    $bagian             = trim(mysqli_real_escape_string($con, $_POST['bagian']));
    $level              = trim(mysqli_real_escape_string($con, $_POST['level']));

    mysqli_query($con, "INSERT INTO tb_user (nip, nama_user, password, bagian, level) 
    VALUES ('$nip','$nama_user','$password','$bagian','$level')") or die(mysqli_error($con));
    echo "<script>window.location='admin.php';</script>";
    
 



}else if(isset($_POST['edit'])){
    $nik                = $_POST['nik'];
    $nama_lengkap       = trim(mysqli_real_escape_string($con, $_POST['nama_lengkap']));
    $tempat_lahir       = trim(mysqli_real_escape_string($con, $_POST['tempat_lahir']));
    $tanggal_lahir      = trim(mysqli_real_escape_string($con, $_POST['tanggal_lahir']));
    $jk                 = trim(mysqli_real_escape_string($con, $_POST['jk']));
    $stats              = trim(mysqli_real_escape_string($con, $_POST['stats']));
    $agama              = trim(mysqli_real_escape_string($con, $_POST['agama']));
    $alamat             = trim(mysqli_real_escape_string($con, $_POST['alamat']));
    $no_telp            = trim(mysqli_real_escape_string($con, $_POST['no_telp']));
    $sd                 = trim(mysqli_real_escape_string($con, $_POST['sd']));
    $sltp               = trim(mysqli_real_escape_string($con, $_POST['sltp']));
    $slta               = trim(mysqli_real_escape_string($con, $_POST['slta']));
    $sltaJur            = trim(mysqli_real_escape_string($con, $_POST['sltaJur']));
    $d1                 = trim(mysqli_real_escape_string($con, $_POST['d1']));
    $d1Jur              = trim(mysqli_real_escape_string($con, $_POST['d1Jur']));
    $d2                 = trim(mysqli_real_escape_string($con, $_POST['d2']));
    $d2Jur              = trim(mysqli_real_escape_string($con, $_POST['d2Jur']));
    $d3                 = trim(mysqli_real_escape_string($con, $_POST['d3']));
    $d3Jur              = trim(mysqli_real_escape_string($con, $_POST['d3Jur']));
    $s1                 = trim(mysqli_real_escape_string($con, $_POST['s1']));
    $s1Jur              = trim(mysqli_real_escape_string($con, $_POST['s1Jur']));
    $s2                 = trim(mysqli_real_escape_string($con, $_POST['s2']));
    $s2Jur              = trim(mysqli_real_escape_string($con, $_POST['s2Jur']));
    $keterampilan1      = trim(mysqli_real_escape_string($con, $_POST['keterampilan1']));
    $keterampilan2      = trim(mysqli_real_escape_string($con, $_POST['keterampilan2']));
    $keterampilan3      = trim(mysqli_real_escape_string($con, $_POST['keterampilan3']));
    $tanggal = date("Y-m-d H:i:s"); 
    $tujuanDalam = trim(mysqli_real_escape_string($con, $_POST['tujuanDalam']));
    $tujuanLuar = trim(mysqli_real_escape_string($con, $_POST['tujuanLuar']));

	

    mysqli_query($con, "UPDATE tb_ktp SET nama_lengkap = '$nama_lengkap', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', jk = '$jk',
     stats = '$stats', agama = '$agama', alamat = '$alamat', no_telp = '$no_telp', sd = '$sd', sltp = '$sltp', slta = '$slta', sltaJur = '$sltaJur', d1 = '$d1', d1Jur = '$d1Jur', d2 = '$d2', 
     d2Jur = '$d2Jur', d3 = '$d3', d3Jur = '$d3Jur', s1 = '$s1', s1Jur = '$s1Jur', s2 = '$s2', s2Jur = '$s2Jur', keterampilan1 = '$keterampilan1', keterampilan2 = '$keterampilan2', keterampilan3 = '$keterampilan3', tanggal = '$tanggal' , tujuanDalam ='$tujuanDalam', tujuanLuar = '$tujuanLuar' WHERE nik = '$nik' ") or die(mysqli_error($con));
    echo "<script>window.location='data.php';</script>";

} else if (isset($_POST['print'])) {
        $nik                = trim(mysqli_real_escape_string($con, $_POST['nik']));
        $nama_lengkap       = trim(mysqli_real_escape_string($con, $_POST['nama_lengkap']));
        $tempat_lahir       = trim(mysqli_real_escape_string($con, $_POST['tempat_lahir']));
        $tanggal_lahir      = trim(mysqli_real_escape_string($con, $_POST['tanggal_lahir']));
        $jk                 = trim(mysqli_real_escape_string($con, $_POST['jk']));
        $stats              = trim(mysqli_real_escape_string($con, $_POST['stats']));
        $agama              = trim(mysqli_real_escape_string($con, $_POST['agama']));
        $alamat             = trim(mysqli_real_escape_string($con, $_POST['alamat']));
        $no_telp            = trim(mysqli_real_escape_string($con, $_POST['no_telp']));
        $sd                 = trim(mysqli_real_escape_string($con, $_POST['sd']));
        $sltp               = trim(mysqli_real_escape_string($con, $_POST['sltp']));
        $slta               = trim(mysqli_real_escape_string($con, $_POST['slta']));
        $sltaJur            = trim(mysqli_real_escape_string($con, $_POST['sltaJur']));
        $d1                 = trim(mysqli_real_escape_string($con, $_POST['d1']));
        $d1Jur              = trim(mysqli_real_escape_string($con, $_POST['d1Jur']));
        $d2                 = trim(mysqli_real_escape_string($con, $_POST['d2']));
        $d2Jur              = trim(mysqli_real_escape_string($con, $_POST['d2Jur']));
        $d3                 = trim(mysqli_real_escape_string($con, $_POST['d3']));
        $d3Jur              = trim(mysqli_real_escape_string($con, $_POST['d3Jur']));
        $s1                 = trim(mysqli_real_escape_string($con, $_POST['s1']));
        $s1Jur              = trim(mysqli_real_escape_string($con, $_POST['s1Jur']));
        $s2                 = trim(mysqli_real_escape_string($con, $_POST['s2']));
        $s2Jur              = trim(mysqli_real_escape_string($con, $_POST['s2Jur']));
        $keterampilan1      = trim(mysqli_real_escape_string($con, $_POST['keterampilan1']));
        $keterampilan2      = trim(mysqli_real_escape_string($con, $_POST['keterampilan2']));
        $keterampilan3      = trim(mysqli_real_escape_string($con, $_POST['keterampilan3']));
        $tanggal = date("Y-m-d H:i:s"); 
        $tujuanDalam = trim(mysqli_real_escape_string($con, $_POST['tujuanDalam']));
        $tujuanLuar = trim(mysqli_real_escape_string($con, $_POST['tujuanLuar']));
    
        
    
        mysqli_query($con, "SELECT * FROM tb_ktp nama_lengkap = '$nama_lengkap', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', jk = '$jk',
         stats = '$stats', agama = '$agama', alamat = '$alamat', no_telp = '$no_telp', sd = '$sd', sltp = '$sltp', slta = '$slta', sltaJur = '$sltaJur', d1 = '$d1', d1Jur = '$d1Jur', d2 = '$d2', 
         d2Jur = '$d2Jur', d3 = '$d3', d3Jur = '$d3Jur', s1 = '$s1', s1Jur = '$s1Jur', s2 = '$s2', s2Jur = '$s2Jur', keterampilan1 = '$keterampilan1', keterampilan2 = '$keterampilan2', keterampilan3 = '$keterampilan3', tanggal = '$tanggal' , tujuanDalam ='$tujuanDalam', tujuanLuar = '$tujuanLuar' ") or die(mysqli_error($con));
        echo "<script>window.location='data.php';</script>";

}

?>