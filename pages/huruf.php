<!DOCTYPE html>
<?php include "./model/huruf.php";
$huruf = show_huruf($_GET['id']);
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>Mari mengenal huruf,Stisla</title>

	<!-- General CSS Files -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
	      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<!-- CSS Libraries -->

	<!-- Template CSS -->
	<link rel="stylesheet" href="../assets/css/style.css">
	<link rel="stylesheet" href="../assets/css/components.css">
</head>

<body class="layout-3">
<div id="app">
	<div class="main-wrapper container">
		<div class="navbar-bg"></div>
		<nav class="navbar navbar-expand-lg main-navbar">
			<a href="belajar-huruf.php" class="navbar-brand sidebar-gone-hide">ABC</a>
			<div class="navbar-nav">
				<a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
			</div>
			<h3 class="text-white">Selamat datang</h3>
		</nav>

		<nav class="navbar navbar-secondary navbar-expand-lg">
			<div class="container">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a href="belajar-huruf.php" class="nav-link"><i class="fas fa-fire"></i><span>Belajar</span></a>
					</li>
					<li class="nav-item ">
						<a href="belajar-huruf.php?mode=video" class="nav-link"><i class="far fa-heart"></i><span>Kumpulan Video</span></a>
					</li>
				</ul>
			</div>
		</nav>

		<!-- Main Content -->
		<div class="main-content">
			<section class="section">
				<div class="section-header">
					<h1>Belajar Huruf</h1>
					<!--					<div class="section-header-breadcrumb">-->
					<!--						<div class="breadcrumb-item active"><a href="#">Dashboard</a></div>-->
					<!--						<div class="breadcrumb-item"><a href="#">Layout</a></div>-->
					<!--						<div class="breadcrumb-item">Top Navigation</div>-->
					<!--					</div>-->
				</div>

				<div class="section-body">
					<h2 class="section-title">Alphabet</h2>
					<p class="section-lead">Sambil belajar sambil menonton video</p>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<h1 class="text-center" style="font-size: 3000%"><?php echo $huruf[0]->nama_huruf?></h1>
									<h1><?php echo $huruf[0]->nama_huruf?></h1>
									<h6><?php echo $huruf[0]->diskripsi ?></h6>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<h4>Belajar dengan melihat video</h4>
								</div>
								<div class="card-body">
									<!--                                    <div class="row mt-4">-->
									<div class="embed-responsive embed-responsive-16by9">
										<iframe class="embed-responsive-item" src="//<?php echo $huruf[0]->link ?>" allowfullscreen></iframe>
									</div>
									<!--                                    </div>-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<footer class="main-footer">
			<div class="footer-left">
				Copyright &copy; 2018
				<div class="bullet"></div>
				Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
			</div>
			<div class="footer-right">
				2.3.0
			</div>
		</footer>
	</div>
</div>

<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="../assets/js/stisla.js"></script>

<!-- JS Libraies -->

<!-- Page Specific JS File -->

<!-- Template JS File -->
<script src="../assets/js/scripts.js"></script>
<script src="../assets/js/custom.js"></script>
</body>
</html>
