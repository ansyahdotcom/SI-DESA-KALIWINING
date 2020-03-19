<!DOCTYPE html>
<html lang="en">

<head>

<?php $this->load->view("admin/_partials/head.php"); ?>

  <!-- Custom styles for this page -->
  <link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.css');?>" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("admin/_partials/sidebar.php"); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view("admin/_partials/topbar.php"); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Data Kartu Keluarga Desa Kaliwining</h1><br>

          <a href="<?php echo site_url('admin/kk/tambah_kk'); ?>" class="btn btn-primary btn-icon-split">
            <span class="text">Tambah Data</span>
          </a>
          <div class="my-2"></div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>KK</th>
                      <th>RT</th>
                      <th>RW</th>
                      <th>Alamat</th>
                      <th>Kepala</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No.</th>
                      <th>KK</th>
                      <th>RT</th>
                      <th>RW</th>
                      <th>Alamat</th>
                      <th>Kepala</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php
                  // ambil data masukkan dalam tabel 
		              foreach($kk as $k){ ?>
                    <tr>
                        <td><?php echo $k->NO; ?></td>
			                  <td><?php echo $k->KK; ?></td>
                        <td><?php echo $k->RT; ?></td>
                        <td><?php echo $k->RW; ?></td>
                        <td><?php echo $k->ALAMAT; ?></td>
                        <td><?php echo $k->KEPALA; ?></td>
                        <td>
                        <!-- ke halaman ubah data kk -->
                      <?php echo anchor('admin/kk/ubah_kk/'.$k->NO,'Ubah'); ?>
                      <!-- ke halaman hapus data kk -->
                      <?php echo anchor('admin/kk/hapus_kk/'.$k->NO,'Hapus'); ?>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php $this->load->view("admin/_partials/footer.php"); ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php $this->load->view("admin/_partials/modal.php"); ?>

  <?php $this->load->view("admin/_partials/js.php"); ?>

</body>

</html>
