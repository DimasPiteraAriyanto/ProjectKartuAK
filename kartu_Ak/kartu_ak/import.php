<?php
include_once('../_header.php');

?>


            <h1>Kartu AK / 1</h1>
            <h4>
                <small>Import Data Kartu AK / 1</small>
                <div class="pull-right">
                    <a href="data.php" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                </div>
            </h4>
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                        <form action="proses.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label form="file">File Excel</label>
                                <input type="file" name="file" id="file" class="form-control" required></input>
                            </div>
                        <div class="form-group pull-right">
                            <label class="col-sm-2 col-form-label">&nbsp;</label>
                                <input type="submit" name="import" class="btn btn-success" value="Import">
                        </div>
                    </form>
                    
                </div>          </div>
            </div>
                        </form>
                    </div>
                </div>
</div>

<?php
include_once('../_footer.php');?>