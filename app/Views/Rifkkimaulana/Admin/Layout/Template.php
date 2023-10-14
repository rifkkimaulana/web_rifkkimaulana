<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/back-rifkkimaulana/plugins/fontawesome-free/css/all.min.css'); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url('assets/back-rifkkimaulana/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url('assets/back-rifkkimaulana/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url('assets/back-rifkkimaulana/plugins/jqvmap/jqvmap.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/back-rifkkimaulana/dist/css/adminlte.min.css'); ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('assets/back-rifkkimaulana/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'); ?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url('assets/back-rifkkimaulana/plugins/daterangepicker/daterangepicker.css'); ?>">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url('assets/back-rifkkimaulana/plugins/summernote/summernote-bs4.min.css'); ?>">

    <link rel="stylesheet" href="<?= base_url('assets/back-rifkkimaulana/plugins/fontawesome-free/css/all.min.css'); ?>">

    <link rel="stylesheet" href="<?= base_url('assets/back-rifkkimaulana/plugins/select2/css/select2.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/back-rifkkimaulana/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css'); ?>">

    <link rel="stylesheet" href="<?= base_url('assets/back-rifkkimaulana/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/back-rifkkimaulana/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/back-rifkkimaulana/plugins/datatables-buttons/css/buttons.bootstrap4.min.css'); ?>">
    <!-- Include Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?= $this->include('Rifkkimaulana/Admin/Layout/Navbar'); ?>
        <?= $this->include('Rifkkimaulana/Admin/Layout/Sidebar'); ?>

        <div class="content-wrapper">
            <div class="card"></div>
            <?= $this->renderSection('content'); ?>
        </div>

        <footer class="main-footer">
            <strong>Copyright &copy; 2023. META IMASNET || rifkkimaulana.com. </strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1
            </div>
        </footer>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url('assets/back-rifkkimaulana/plugins/jquery/jquery.min.js'); ?>"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url('assets/back-rifkkimaulana/plugins/jquery-ui/jquery-ui.min.js'); ?>"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets/back-rifkkimaulana/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- ChartJS -->
    <script src="<?= base_url('assets/back-rifkkimaulana/plugins/chart.js/Chart.min.js'); ?>"></script>
    <!-- Sparkline -->
    <script src="<?= base_url('assets/back-rifkkimaulana/plugins/sparklines/sparkline.js'); ?>"></script>
    <!-- JQVMap -->
    <script src="<?= base_url('assets/back-rifkkimaulana/plugins/jqvmap/jquery.vmap.min.js'); ?>"></script>
    <script src="<?= base_url('assets/back-rifkkimaulana/plugins/jqvmap/maps/jquery.vmap.usa.js'); ?>"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= base_url('assets/back-rifkkimaulana/plugins/jquery-knob/jquery.knob.min.js'); ?>"></script>
    <!-- daterangepicker -->
    <script src="<?= base_url('assets/back-rifkkimaulana/plugins/moment/moment.min.js'); ?>"></script>
    <script src="<?= base_url('assets/back-rifkkimaulana/plugins/daterangepicker/daterangepicker.js'); ?>"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= base_url('assets/back-rifkkimaulana/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
    <!-- Summernote -->
    <script src="<?= base_url('assets/back-rifkkimaulana/plugins/summernote/summernote-bs4.min.js'); ?>"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url('assets/back-rifkkimaulana/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/back-rifkkimaulana/dist/js/adminlte.js'); ?>"></script>
    <script src="<?= base_url('assets/back-rifkkimaulana/plugins/bs-custom-file-input/bs-custom-file-input.min.js'); ?>"></script>

    <script src="<?= base_url('assets/back-rifkkimaulana/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?= base_url('assets/back-rifkkimaulana/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
    <script src="<?= base_url('assets/back-rifkkimaulana/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
    <script src="<?= base_url('assets/back-rifkkimaulana/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
    <script src="<?= base_url('assets/back-rifkkimaulana/plugins/datatables-buttons/js/dataTables.buttons.min.js'); ?>"></script>
    <script src="<?= base_url('assets/back-rifkkimaulana/plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>"></script>
    <script src="<?= base_url('assets/back-rifkkimaulana/plugins/jszip/jszip.min.js'); ?>"></script>
    <script src="<?= base_url('assets/back-rifkkimaulana/plugins/pdfmake/pdfmake.min.js'); ?>"></script>
    <script src="<?= base_url('assets/back-rifkkimaulana/plugins/pdfmake/vfs_fonts.js'); ?>"></script>
    <script src="<?= base_url('assets/back-rifkkimaulana/plugins/datatables-buttons/js/buttons.html5.min.js'); ?>"></script>
    <script src="<?= base_url('assets/back-rifkkimaulana/plugins/datatables-buttons/js/buttons.print.min.js'); ?>"></script>
    <script src="<?= base_url('assets/back-rifkkimaulana/plugins/datatables-buttons/js/buttons.colVis.min.js'); ?>"></script>

    <script src="<?= base_url('assets/back-rifkkimaulana/plugins/chart.js/Chart.min.js'); ?>"></script>

    <script src="<?= base_url('assets/back-rifkkimaulana/plugins/select2/js/select2.full.min.js'); ?>"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        var table = $("#tablerifkkimaulana").DataTable({
            paging: true,
            lengthChange: true,
            searching: true,
            ordering: true,
            info: true,
            autoWidth: false,
            language: {
                lengthMenu: "_MENU_",
                zeroRecords: "No data found",
                info: "Showing _START_ to _END_ of _TOTAL_ entries",
                infoEmpty: "Showing 0 to 0 of 0 entries",
                infoFiltered: "(filtered from _MAX_ total entries)",
                search: "Cari:",
                paginate: {
                    first: "Start",
                    last: "End",
                    next: "Next",
                    previous: "Previous",
                },
            },
            lengthMenu: [5, 10, 50, 100, 500],
            pageLength: 5,
        });

        $("#selectLength").on("change", function() {
            table.page.len($(this).val()).draw();
        });

        // Identifikasi plugin select2
        $('.select2').select2({
            theme: 'bootstrap4'
        });

        // Inisialisasi Notifikasi all pages from session
        <?php if (session()->getFlashdata('success')) : ?>
            toastr.success('<?= session()->getFlashdata('success') ?>');
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')) : ?>
            toastr.error('<?= session()->getFlashdata('error') ?>');
        <?php endif; ?>
    </script>
    <script>
        $(document).ready(function() {
            // Saat checkbox "Pilih Semua" diubah
            $("#selectAll").change(function() {
                // Periksa apakah "Pilih Semua" dicentang atau tidak
                var isChecked = $(this).is(":checked");

                // Atur status checkbox dalam loop sesuai dengan "Pilih Semua"
                $(".checkbox-item").prop("checked", isChecked);
            });

            // Saat salah satu checkbox dalam loop diubah
            $(".checkbox-item").change(function() {
                // Periksa apakah semua checkbox dalam loop sudah dicentang atau tidak
                var allChecked = $(".checkbox-item:checked").length === $(".checkbox-item").length;

                // Jika semua checkbox dalam loop sudah dicentang, centang juga "Pilih Semua"
                $("#selectAll").prop("checked", allChecked);
            });
        });
    </script>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>

    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>

</body>

</html>