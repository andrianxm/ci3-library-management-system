<?php
defined('BASEPATH') or exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">
		::selection {
			background-color: #E13300;
			color: white;
		}

		::-moz-selection {
			background-color: #E13300;
			color: white;
		}

		body {
			background-color: #fff;
			margin: 0px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
		}

		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
			text-decoration: none;
		}

		a:hover {
			color: #97310e;
		}

		h1 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 19px;
			font-weight: normal;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}

		code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 12px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}

		#body {
			margin: 0 15px 0 15px;
			min-height: 96px;
		}

		p {
			margin: 0 0 10px;
			padding: 0;
		}

		p.footer {
			text-align: right;
			font-size: 11px;
			border-top: 1px solid #D0D0D0;
			line-height: 32px;
			padding: 0 10px 0 10px;
			margin: 20px 0 0 0;
		}

		#container {
			margin: 0px;
			border: 1px solid #D0D0D0;
			box-shadow: 0 0 8px #D0D0D0;
		}
	</style>
</head>

<body>

	<div id="container">

		<header class="header">
			<div class="header-content">
				<h1>Electronic Library Systems</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Explore a world of books at your fingertips.
				</p>
			</div>
			<div class="header-image">
				<!-- Gambar atau ilustrasi bisa dimasukkan di sini -->
				<img src="your-image-url.png" alt="Illustration">
			</div>
		</header>

		<div id="body">
			<section class="catalog">
				<h2>Katalog</h2>
				<div class="search-bar">
					<input type="text" placeholder="Cari buku...">
				</div>
				<div class="book-grid">
					<!-- Item buku -->
					<div class="book-item">
						<img src="book1.jpg" alt="Book Image">
						<h3>Judul Buku</h3>
						<button>Detail</button>
					</div>
					<!-- Tambahkan lebih banyak item buku sesuai dengan kebutuhan -->
				</div>
			</section>
		</div>

		<footer class="footer">
			<p>© 2024 Electronic Library System</p>
		</footer>

</body>

</html>