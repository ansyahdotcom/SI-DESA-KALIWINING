<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/_partials/head.php"); ?>
    
</head>

<body id="page-top">

  	<!-- Page Wrapper -->
  	<div id="wrapper">

    	<!-- Sidebar -->
    	<?php $this->load->view("admin/_partials/sidebar.php"); ?>

    	<!-- Content Wrapper -->
    	<div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view("admin/_partials/topbar.php"); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data KK</h1>
          </div>
          <!-- form pengisian data kk -->
          <form action="<?php echo base_url(). 'admin/kk/pr_tmbh_kk'; ?>" method="post">
            <div class="form-group">
              <label class="col-sm-1 control-label" for="NO"> NO </label>
              <input type="text" id="NO" name="NO" placeholder="NO" required autocomplete="off" class="col-xs-10" />
            </div>
            <div class="form-group">
              <label class="col-sm-1 control-label" for="KK"> KK </label>
              <input type="text" id="KK" name="KK" placeholder="KK" required autocomplete="off" class="col-xs-10" />
            </div>
            <div class="form-group">
              <label class="col-sm-1 control-label" for="RT"> RT </label>
              <input type="text" id="RT" name="RT" placeholder="RT" required autocomplete="off" class="col-xs-10" />
            </div>
            <div class="form-group">
              <label class="col-sm-1 control-label" for="RW"> RW </label>
              <input type="text" id="RW" name="RW" placeholder="RW" required autocomplete="off" class="col-xs-10" />
            </div>
            <div class="form-group">
              <label class="col-sm-1 control-label" for="ALAMAT"> Alamat </label>
              <input type="text" id="ALAMAT" name="ALAMAT" placeholder="ALAMAT" required autocomplete="off" class="col-xs-10" />
            </div>
            <div class="form-group">
              <label class="col-sm-1 control-label" for="KEPALA"> Kepala </label>
              <input type="text" id="KEPALA" name="KEPALA" placeholder="KEPALA" required autocomplete="off" class="col-xs-10" />
            </div>
            <!-- button tambah data kk yang akan dimasukkan dalam tabel di database -->
            <li style='list-style-type: none' >
              <input type="submit" value="Tambah Data">
            </li>
	        </form>	
          
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