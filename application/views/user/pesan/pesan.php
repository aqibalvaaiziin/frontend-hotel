<img src="<?= base_url().'/assets/image/big_image_1.jpg' ?>" width="100%" alt=""
	style="position:absolute;top:0;background-position:-25px -25px;object-fit: none;height:65%">
<div class="textImageCover text-center">
	<div style="margin-top:15%">
		<p class="robotoDesc pdfLight" style="font-size:65px;color:white">Pemesanan</p>
		<p class="robotoDesc rubikLight" style="font-size:20px;color:white">Isikan data diri anda untuk melakukan
			pemesanan</p>
	</div>
</div>

<div class="container" style="margin-top:40%;margin-bottom:100px">
	<h1 class="pdfMedium">Isi Data Pemesanan</h1>
	<div class="headLine mb-5"></div>

	<div class="d-flex flex-row justify-content-between">

		<div class="formOrder">

			<form method="post">
				<input type="text" placeholder="Nama Pemesan"><br>
				<small class="rubikMedium text-muted">isi nama sesuai dengan KTP</small><br><br><br>
				<input type="text" placeholder="No. Handphone Pemesan"><br><br><br>
				<input type="text" placeholder="Alamat Email"><br><br>
				<div class="dropdown">
					<button class="btnChooseRoom text-muted dropdown-toggle" type="button" id="dropdownMenuButton"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Pilih Nomor Kamar
					</button>
					<div class=" dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <p>dasda</p>
                        <p>dasda</p>
                        <p>dasda</p>
                    </div>
				</div><br><br>
				<small class="rubikLight">Dengan mengklik tombol di bawah, Anda mengerti dan menyetujui <span
						style="color:#b99365">Kebijakan Privasi</span> Luxury Hotel.</small><br><br>
				<button class="px-5 py-3 btnOrder mt-4 rounded">Pesan Sekarang</button>
			</form>

		</div>

		<div class="dataRoom card px-2 py-2 text-center">
            <img src="<?= base_url().'/assets/image/img_5.jpg' ?>" widht="280px" height="250px" alt="">
            <p class="mt-2  pdfLight" style="font-size:40px;color:#b99365;letter-spacing:3px">Kamar Reguler</p>
			<p class="mt-1 pdfLight" style="font-size:30px;color:#b99365;letter-spacing:3px"> Rp. 300000 </p>
			<hr></hr>
			<p class="d-flex w-100 flex-row justify-content-around">
				<i class="fa fa-bed" aria-hidden="true" style="font-size:30px"></i>
				<i class="fa fa-wifi" aria-hidden="true" style="font-size:30px"></i>
				<i class="fa fa-bath" aria-hidden="true" style="font-size:30px"></i>
				<i class="fas fa-hot-tub" style="font-size:30px"></i>
				<i class="fas fa-wine-bottle" style="font-size:30px"></i>
				<i class="fas fa-tv" style="font-size:30px"></i>
				<i class="fas fa-pizza-slice" style="font-size:30px"></i>
				
			</p>
		</div>

	</div>
</div>
