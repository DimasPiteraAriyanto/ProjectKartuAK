<?php
include_once('../_header.php');

?>


            <h1>Admin</h1>
            <h4>
                <small>Tambah Data Admin</small>
                <div class="pull-right">
                    <a href="data.php" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                </div>
            </h4>
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                        <form action="proses.php" method="post">
                            <div class="form-group">
                                <label form="nik">NIP</label>
                                <input type="text" name="nip" class="form-control" required autofocus></input>
                            </div>
                        <div class="form-group">
                            <label class="form-group">NAMA LENGKAP</label>
                                <input type="text" name="nama_user" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="form-group">Password</label>
                                <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="bagian">Bidang</label>
                                <select name="bagian" class="form-control" required>
                                    <option value="PENGANTAR KERJA">PENGANTAR KERJA</option>
                                    <option value="KASIE PPTK">KASIE PPTK</option>
                                </select>
                            </div>

                        <div class="form-group">
                            <label class="form-group">Level</label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="jk" value="Pria" required>
                                    <label class="form-check-label">1</label>
                                </div>
                            </div>
                            <div class="form-group pull-right">
                            <label class="col-sm-2 col-form-label">&nbsp;</label>
                                <input type="submit" name="addmin" class="btn btn-success" value="SIMPAN">
                        </div>
                </div>
                        </form>
                    </div>
                </div>
                </div>
<?php
include_once('../_footer.php');?>