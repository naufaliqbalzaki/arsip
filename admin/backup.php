<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Backup Data</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="index.php#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Backup</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="panel panel">

        <div class="panel-heading">
            <h3 class="panel-title">Backup Data</h3>
        </div>

        <div class="panel-body">
            <div class="row" style="margin-top: 20px;">
                <div class="col-lg-12">
                    <p>Lakukan backup database secara berkala untuk membuat cadangan database yang bisa di-restore kapan saja ketika dibutuhkan. Silahkan klik tombol "Backup" untuk memulai proses backup data. Setelah proses backup selesai, silahkan download file backup database tersebut dan simpan di lokasi yang aman.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <button type="button" class="btn btn-primary" onclick="startBackup()">Backup Data</button>
                </div>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript">
    function startBackup() {
        // Redirect to the PHP script that handles the backup process
        window.location.href = 'backup_script.php';
    }
</script>

<?php include 'footer.php'; ?>