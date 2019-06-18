<?php
session_start();
require 'model/angka.php';
if ( isset( $_GET['id'] ) ) {
	$angka = show_angka( $_GET['id'] );
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'partials/headers.php' ?>
</head>

<body>
<div id="app">
    <div class="main-wrapper">
		<?php include 'partials/navbar.php' ?>
		<?php include 'partials/sidebar.php' ?>

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Kelola angka</h1>
                    <!--                    <div class="section-header-breadcrumb">-->
                    <!--                        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>-->
                    <!--                        <div class="breadcrumb-item"><a href="#">Forms</a></div>-->
                    <!--                        <div class="breadcrumb-item">Advanced Forms</div>-->
                    <!--                    </div>-->
                </div>

                <div class="section-body">
                    <h2 class="section-title"> Forms</h2>
                    <p class="section-lead">Masukkan deskripsi dan link angka alphabetnya</p>
                    <div class="row">
                        <div class="col-12 col-md-9 col-lg-9 center mx-auto">
                            <div class="card">
                                <form action="model/angka.php" method="post">
                                    <div class="card-header">
                                        <h4>Input Data</h4>
                                    </div>
                                    <div class="card-body">
                                        <input type="hidden" name="id"
                                               value="<?php echo isset( $angka[0]->id ) ? $angka[0]->id : null ?>">
                                        <div class="form-group">
                                            <label>Nama Alphabet</label>
                                            <input name="nama"
                                                   value="<?php echo isset( $angka[0]->nama_angka ) ? $angka[0]->nama_angka : null ?>"
                                                   type="text" class="form-control col-md-6">
                                        </div>
                                        <div class="form-group">
                                            <label>Link Video</label>
                                            <input name="link" type="text" class="form-control"
                                                   value="<?php echo isset( $angka[0]->link ) ? $angka[0]->link : null ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi Alphabet</label>
                                            <textarea name="diskripsi" rows="5" style="height: 100px" class="form-control"
                                                      placeholder="Masukkan deskripsi angka"><?php echo isset( $angka[0]->desc ) ? $angka[0]->desc : null ?></textarea>
                                        </div>
                                        <button class="btn btn-success" name="button" value="<?php echo $_GET['f'] ?>">
                                            Simpan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
		<?php include 'partials/footer.php' ?>
    </div>
</div>

<?php include 'partials/js.php' ?>
</body>
</html>
