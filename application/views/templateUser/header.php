<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url().'/assets/css/user/home.css' ?>">
	<link rel="stylesheet" href="<?= base_url().'/assets/css/user/kamar.css' ?>">
	<link rel="stylesheet" href="<?= base_url().'/assets/css/user/cek.css' ?>">
	<link rel="stylesheet" href="<?= base_url().'/assets/css/user/pesan.css' ?>">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<title>Document</title>
</head>

<body>

	<nav class="navbar navbar-expand-lg" style="z-index:1">
		<a class="navbar-brand text-white" href="<?= base_url().'user/Home'?>" style="letter-spacing:4px;margin-top:-5px">Luxury </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?= base_url().'user/Kamar'?>">Kamar</a>
				</li>
			</ul>
			<div class="form-inline my-2 my-lg-0">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a href="<?= base_url().'user/CekPesanan'?>" class="nav-link">Cek Pesanan</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url().'user/Login'?>" class="nav-link">Masuk</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url().'user/Register'?>" class="nav-link">Daftar</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
