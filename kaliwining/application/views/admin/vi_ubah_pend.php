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
            <h1 class="h3 mb-0 text-gray-800">Ubah Data Penduduk</h1>
          </div>
		<!-- form ubah data penduduk -->
          <?php foreach ($penduduk as $pnd) { ?>
        <form action="<?php echo base_url(). 'admin/penduduk/pr_ubah_pnd'; ?>" method="post">
        <div class="form-group">
			<!-- <label class="col-sm-1 control-label" for="NO"> NO </label> -->
			<input type="hidden" id="NO" name="NO" value="<?= $pnd->NO; ?>" placeholder="NO" required autocomplete="off" class="col-xs-10" />
		</div>
		<div class="form-group">
			<label class="col-sm-1 control-label" for="NAMA"> Nama </label>
			<input type="text" id="NAMA" name="NAMA" value="<?= $pnd->NAMA; ?>" placeholder="Nama" required autocomplete="off" class="col-xs-10" />
		</div>
        <div class="form-group">
			<label class="col-sm-1 control-label" for="NIK"> NIK </label>
			<input type="text" id="NIK" name="NIK" value="<?= $pnd->NIK; ?>" placeholder="NIK" required autocomplete="off" class="col-xs-10" />
		</div>
        <div class="form-group">
			<label class="col-sm-1 control-label" for="KK"> KK </label>
			<input type="text" id="KK" name="KK" value="<?= $pnd->KK; ?>" placeholder="KK" required autocomplete="off" class="col-xs-10" />
		</div>
        <div class="form-group">
			<label class="col-sm-1 control-label" for="JK"> Jenis Kelamin </label>
			<input type="text" id="JK" name="JK" value="<?= $pnd->JK; ?>" placeholder="JK" required autocomplete="off" class="col-xs-10" />
		</div>
        <div class="form-group">
			<label class="col-sm-1 control-label" for="AGAMA"> Agama </label>
			<input type="text" id="AGAMA" name="AGAMA" value="<?= $pnd->AGAMA; ?>" placeholder="Agama" required autocomplete="off" class="col-xs-10" />
		</div>
		<div class="form-group">
			<label class="col-sm-1 control-label" for="TPT_LHR"> Tempat Lahir </label>
			<input type="text" id="TPT_LHR" name="TPT_LHR" value="<?= $pnd->TPT_LHR; ?>" placeholder="Tempat Lahir" required autocomplete="off" class="col-xs-10" />
		</div>
		<div class="form-group">
			<label class="col-sm-1 control-label" for="TGL_LHR"> Tanggal Lahir </label>
			<input type="text" id="TGL_LHR" name="TGL_LHR" value="<?= $pnd->TGL_LHR; ?>" placeholder="Tanggal Lahir" required autocomplete="off" class="col-xs-10" />
		</div>
		<div class="form-group">
			<label class="col-sm-1 control-label" for="PENDIDIKAN"> Pendidikan </label>
			<input type="text" id="PENDIDIKAN" name="PENDIDIKAN" value="<?= $pnd->PENDIDIKAN; ?>" placeholder="Pendidikan" required autocomplete="off" class="col-xs-10" />
		</div>
		<div class="form-group">
			<label class="col-sm-1 control-label" for="PEKERJAAN"> Pekerjaan </label>
			<input type="text" id="PEKERJAAN" name="PEKERJAAN" value="<?= $pnd->PEKERJAAN; ?>" placeholder="Pekerjaan" required autocomplete="off" class="col-xs-10" />
		</div>
		<!-- button ubah data penduduk -->
		<li style='list-style-type: none' >
			<input type="submit" value="Ubah Data">
		</li>
	    </form>	
          <?php } ?>
          
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