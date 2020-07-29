<?php
include_once('../_header.php');

?>


            <h1>Kartu AK / 1</h1>
            <h4>
                <small>Tambah Data Kartu AK / 1</small>
                <div class="pull-right">
                    <a href="data.php" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                </div>
            </h4>
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                        <form action="proses.php" method="post">
                            <div class="form-group">
                                <label form="nik">NIK</label>
                                <input type="text" name="nik" class="form-control" required autofocus></input>
                            </div>
                        <div class="form-group">
                            <label class="form-group">NAMA LENGKAP</label>
                                <input type="text" name="nama_lengkap" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="form-group">TEMPAT LAHIR</label>
                                <input type="text" name="tempat_lahir" class="form-control" required>
                        </div>
                        <div class="form-group"><label class="form-group">Tanggal Lahir</label>
                                <input type="text" id="tanggal" name="tanggal_lahir">
                        </div>
                        <div class="form-group">
                            <label class="form-group">JENIS KELAMIN</label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="jk" value="Pria" required>
                                    <label class="form-check-label">LAKI-LAKI</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="jk" value="Wanita" required>
                                    <label class="form-check-label">PEREMPUAN</label>
                                </div>
                            </div>

                            <div class="form-group">
                            <label class="stats">STATUS</label>
                                <select name="stats" class="form-control" required>
                                    <option value="Kawin">KAWIN</option>
                                    <option value="Belum kawin">BELUM KAWIN</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label class="agama">AGAMA</label>
                                <select name="agama" class="form-control" required>
                                    <option value="Islam">ISLAM</option>
                                    <option value="Katolik">KATOLIK</option>
                                    <option value="Protestan">PROTESTAN</option>
                                    <option value="Hindu">HINDU</option>
                                    <option value="Budha">BUDHA</option>
                                    <option value="Lain-lain">LAIN-LAIN</option>
                                </select>
                            </div>
                        <div class="form-group">
                            <label class="alamat">ALAMAT</label>
                                <input type="text" name="alamat" class="form-control" size="50" required>
                        </div>
                        <div class="form-group">
                            <label class="no_telp">NO TELP</label>
                                <input type="text" name="no_telp" class="form-control" size="50" required>
                        </div>
                        <div class="form-group">
                            <label><h2>Tahun Kelulusan : </h2></label>
                        </div>
                        <div class="form-group">
                            <label class="sd">SD</label>
                                <input type="text" name="sd" class="form-control" size="50">
                        </div>
                        <div class="form-group">
                            <label class="sltp">SLTP</label>
                                <input type="text" name="sltp" class="form-control" size="50">
                        </div>
                        <div class="form-group">
                            <label class="slta">SMA / SMK</label>
                                <input type="text" name="slta" class="form-control" size="50">
                        </div>
                        <div class="form-group">
                            <label class="slta">Jurusan SMA / SMK</label>
                                <input type="text" name="sltaJur" class="form-control" size="50">
                        </div>
                        <div class="form-group">
                            <label class="d1">D1</label>
                                <input type="text" name="d1" class="form-control" size="50">
                        </div>
                        <div class="form-group">
                            <label class="d1Jur">Jurusan D1</label>
                                <input type="text" name="d1Jur" class="form-control" size="50">
                        </div>
                        <div class="form-group">
                            <label class="d2">D2</label>
                                <input type="text" name="d2" class="form-control" size="50">
                        </div>
                        <div class="form-group">
                            <label class="d2Jur">Jurusan D2</label>
                                <input type="text" name="d2Jur" class="form-control" size="50">
                        </div>
                        <div class="form-group">
                            <label class="d3">D3</label>
                                <input type="text" name="d3" class="form-control" size="50">
                        </div>
                        <div class="form-group">
                            <label class="d3Jur">Jurusan D3</label>
                                <input type="text" name="d3Jur" class="form-control" size="50">
                        </div>
                        <div class="form-group">
                            <label class="s1">S1</label>
                                <input type="text" name="s1" class="form-control" size="50">
                        </div>
                        <div class="form-group">
                            <label class="s1Jur">Jurusan S1</label>
                                <input type="text" name="s1Jur" class="form-control" size="50">
                        </div>
                        <div class="form-group">
                            <label class="s2">S2</label>
                                <input type="text" name="s2" class="form-control" size="50">
                        </div>
                        <div class="form-group">
                            <label class="s2Jur">Jurusan S2</label>
                                <input type="text" name="s2Jur" class="form-control" size="50">
                        </div>
                        <div class="form-group">
                            <label class="keterampilan1">KETERAMPILAN1</label>
                                <input type="text" name="keterampilan1" class="form-control" size="50">
                        </div>
                        <div class="form-group">
                            <label class="keterampilan2">KETERAMPILAN2</label>
                                <input type="text" name="keterampilan2" class="form-control" size="50">
                        </div>
                        <div class="form-group">
                            <label class="keterampilan3">KETERAMPILAN3</label>
                                <input type="text" name="keterampilan3" class="form-control" size="50">
                        </div>
                        <div class="form-group">
                            <label class="keterampilan3">Tujuan Dalam Negeri</label>
                                <input type="text" name="tujuanDalam" class="form-control" size="50">
                        </div>
                        <div class="form-group">
                            <label class="keterampilan3">Tujuan Luar Negeri</label>
                                <input type="text" name="tujuanLuar" class="form-control" size="50">
                        </div>
                        <div class="form-group pull-right">
                            <label class="col-sm-2 col-form-label">&nbsp;</label>
                                <input type="submit" name="add" class="btn btn-success" value="SIMPAN">
                        </div>
                    </form>
                    
                </div>          </div>
            </div>
                        </form>
                    </div>
                </div>
</div>

                    <script>
                    $('#tanggal').datepicker({
                            format: 'yyyy-mm-dd',
                            daysOfWeekDisabled: "0",
                            autoclose:true
                        });
                    </script>


<?php
include_once('../_footer.php');?>