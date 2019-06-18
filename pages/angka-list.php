<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'partials/headers.php' ?>
</head>
<?php
require 'model/angka.php';
$angkas = show_angka();
?>
<body>
<div id="app">
    <div class="main-wrapper">
		<?php include 'partials/navbar.php' ?>
		<?php include 'partials/sidebar.php' ?>

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 mt-4">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h4>Data angka</h4><br>
                                <a href="angka-management.php?f=tambah" class="btn btn-sm btn-primary">Tambah</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="table-1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table class="table table-striped dataTable no-footer" id="table-1">
                                                    <thead>
                                                    <tr role="row">
                                                        <th class="text-center sorting_asc">
                                                            No
                                                        </th>
                                                        <th class="text-center sorting_asc">
                                                            Nama angka
                                                        </th>
                                                        <th class="text-center sorting_asc">
                                                            Link Video
                                                        </th>
                                                        <th class="text-center sorting_asc">
                                                            Deskripsi
                                                        </th>
                                                        <th class="text-center sorting_asc">
                                                            Aksi
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
													<?php foreach ( $angkas as $key => $angka ): ?>
                                                        <tr role="row">
                                                            <td class="sorting_1">
																<?php echo $key + 1 ?>
                                                            </td>
                                                            <td><?php echo $angka->nama_angka ?></td>
                                                            <td>
																<?php echo $angka->link ?>
                                                            </td>
                                                            <td>
                                                                <p><?php echo $angka->diskripsi ?></p>
                                                            </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <a class="btn btn-secondary"
                                                                       href="angka-management.php?f=edit&id=<?php echo $angka->id ?>"><i
                                                                                class="fa fa-pencil-alt"
                                                                                aria-hidden="true"></i>
                                                                    </a>
                                                                    <button type="button" id="btn-modal"
                                                                            class="btn btn-danger"
                                                                            data-toggle="modal"
                                                                            data-target="#header-filled-error-modal"
                                                                            data-id="<?php echo $angka->id ?>">
                                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
													<?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
		<?php include 'partials/footer.php' ?>
		<?php include 'partials/modal.php' ?>
    </div>
</div>
<?php include 'partials/js.php' ?>
<script>
    $(document).on('click', '#btn-modal', function () {
        let id = $(this).data('id');
        $('div.modal-header>h4').text('Peringatan !!!');
        let textDialog = $('.modal-body').children('#textDialog');
        let operationButton = $('.modal-footer').children('#operation');

        if (textDialog.length == 0) {
            $('.modal-body').append('<p id="textDialog" class="h6">Apakah anda yakin untuk menghapus ruangan?</p>');
            $('.modal-footer').append('<a href="./model/angka.php?f=delete&id=' + id + '" id="operation" class="btn btn-sm btn-danger">Delete</a>');
        } else {
            textDialog.replaceWith('<p id="textDialog" class="h6">Apakah anda yakin untuk menghapus ruangan?</p>');
            operationButton.replaceWith('<a href="./model/angka.php?f=delete&id=' + id + '" id="operation" class="btn btn-sm btn-danger">Delete</a>');
        }

    });
    $('#myModal').on('hidden.bs.modal', function () {
        $('#textDialog').remove();
        $('a#operation').remove();
    });
    $("#spk-data-table").DataTable({})
</script>
</body>
</html>
