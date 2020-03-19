<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SI DESA KALIWINING</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>


<body class="bg-gradient-primary">
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center" >
									<h1 class="h2 text-gray-900">SISTEM INFORMASI DESA KALIWINING, </h1>
                                    <h1 class="h2 text-gray-900">RAMBIPUJI, KABUPATEN JEMBER</h1>
									</div>

                                    <?= $this->session->flashdata('message'); ?>

                                    <form class="user" method="post" action="<?= base_url('login/aksi_login'); ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="USERNAME" name="USERNAME" required placeholder="Enter Username Address..." value="<?= set_value('USERNAME'); ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="PASSWORD" name="PASSWORD" required placeholder="Password" data-toggle="password">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" >Lupa Password?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


    <!-- lihat password -->
    <script type="text/javascript">
        $("#password").password('toggle');
    </script>

</body>
</html>