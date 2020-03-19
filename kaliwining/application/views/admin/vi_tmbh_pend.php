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
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Penduduk</h1>
          </div>
			<!-- form pengisian data penduduk -->
		  	<form class="form-horizontal" role="form"
			  action="<?php echo base_url(). 'admin/penduduk/pr_tambah_pnd'; ?>" method="post">
			  <div class="form-group">
					<label class="col-sm-1 control-label" for="NO"> NO </label>
					<input type="text" id="NO" name="NO" placeholder="NO" required autocomplete="off" class="col-xs-10" />
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label" for="NAMA"> Nama </label>
					<input type="text" id="NAMA" name="NAMA" placeholder="Nama" required autocomplete="off" class="col-xs-10" />
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label" for="NIK"> NIK </label>
					<input type="text" id="NIK" name="NIK" placeholder="NIK" required autocomplete="off" class="col-xs-10" />
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label" for="KK"> No. KK </label>
					<input type="text" id="KK" name="KK" placeholder="No. KK" required autocomplete="off" class="col-xs-10" />
				</div>
				<!-- pilih jenis kelamin -->
				<div class="form-group">
					<label class="col-sm-2 control-label" for="JK"> Jenis Kelamin </label>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="JK" id="JK" value="Laki-laki">
						<label class="form-check-label" for="JK">Laki-laki</label>
					</div>
						<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="JK" id="JK" value="Perempuan">
						<label class="form-check-label" for="JK">Perempuan</label>
					</div>
				</div>
				<!-- pilih agama -->
				<div class="form-group">
					<label class="col-sm-2 control-label" for="AGAMA"> Agama </label>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="AGAMA" id="AGAMA" value="Islam">
						<label class="form-check-label" for="AGAMA">Islam</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="AGAMA" id="AGAMA" value="Kristen">
						<label class="form-check-label" for="AGAMA">Kristen</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="AGAMA" id="AGAMA" value="Katolik">
						<label class="form-check-label" for="AGAMA">Katolik</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="AGAMA" id="AGAMA" value="Hindu">
						<label class="form-check-label" for="AGAMA">Hindu</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="AGAMA" id="AGAMA" value="Budha">
						<label class="form-check-label" for="AGAMA">Budha</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="AGAMA" id="AGAMA" value="Konghucu">
						<label class="form-check-label" for="AGAMA">Konghucu</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label" for="TPT_LHR"> Tempat Lahir </label>
					<input type="text" id="TPT_LHR" name="TPT_LHR" placeholder="Tempat Lahir" required autocomplete="off" class="col-xs-10" />
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label" for="TGL_LHR"> Tanggal Lahir </label>
					<input type="text" id="TGL_LHR" name="TGL_LHR" placeholder="Tanggal Lahir" required autocomplete="off" class="col-xs-10" />
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label" for="PENDIDIKAN"> Pendidikan </label>
					<input type="text" id="PENDIDIKAN" name="PENDIDIKAN" placeholder="Pendidikan" required autocomplete="off" class="col-xs-10" />
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label" for="PEKERJAAN"> Pekerjaan </label>
					<input type="text" id="PEKERJAAN" name="PEKERJAAN" placeholder="Pekerjaan" required autocomplete="off" class="col-xs-10" />
				</div>
				<!-- button tambah data penduduk yang akan dimasukkan dalam tabel di database -->
				<li style='list-style-type: none' >
					<input type="submit" value="Tambah Data">
				</li>
			</form>
          
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