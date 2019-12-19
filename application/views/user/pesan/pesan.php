<img src="<?= base_url().'/assets/image/big_image_1.jpg' ?>" width="100%" alt=""
	style="position:absolute;top:0;background-position:-25px -25px;object-fit: none;height:65%">
<div class="textImageCover text-center">
	<div style="margin-top:15%">
		<p class="robotoDesc pdfLight" style="font-size:65px;color:white">Pemesanan</p>
		<p class="robotoDesc rubikLight" style="font-size:20px;color:white">Isikan data diri anda untuk melakukan
			pemesanan</p>
	</div>
</div>

<div class="container" style="margin-top:40%;margin-bottom:130px">
	<h1 class="pdfMedium">Isi Data Pemesanan</h1>
	<div class="headLine mb-5"></div>

	<div class="d-flex flex-row justify-content-between">

		<div class="formOrder">
			<?php echo form_open_multipart('user/pesan/booking') ?>
			<form action="" method="post" enctype="multipart/form-data">
			<?php foreach($dataUser->data as $d): ?>
				<input type="text" placeholder="Nama Pemesan" name="namaPemesan" value="<?= $d->nama;?>"><br>
				<small class="rubikMedium text-muted">isi nama sesuai dengan KTP</small><br><br><br>
				<input type="text" placeholder="No. Handphone Pemesan" name="noHp" value="<?= $d->no_telp;?>"><br><br><br>
				<input type="text" placeholder="Alamat Email" name="email" value="<?= $d->email;?>"><br><br><br>
			<?php endforeach;?>
				<?php foreach($tipeKamar->data as $kamar) : ?>
					<input type="hidden" name="total" value="<?= $kamar->harga ?>">
				<?php endforeach;?>
				<select class="text-muted" name="idKamar" id="idKamar">
					<?php foreach($tipeKamar->data as $kamar) : ?>
					<option value="<?= $kamar->id_kamar; ?>"><?= $kamar->no_kamar; ?></option>
					<?php endforeach;?>
				</select>
				<br><br><br>
				<div class="d-flex w-100 flex-row justify-content-between">
					<div>
						<label class="text-muted pdfLight" for="checkIn">Check In</label><br>
						<input type="date" id="checkIn" name="checkIn">
					</div>
					<div>
						<label class="text-muted pdfLight" for="checkOut">Check Out</label><br>
						<input type="date" id="checkOut" name="checkOut">
					</div>
				</div><br><br>
				<small class="rubikLight">Dengan mengklik tombol di bawah, Anda mengerti dan menyetujui <span
						style="color:#b99365">Kebijakan Privasi</span> Luxury Hotel.</small><br>
				<button class="px-5 py-3 btnOrder mt-4 rounded">Pesan Sekarang</button>
			</form>
			<?php echo form_close() ?>

		</div>

		<div class="dataRoom card px-2 py-2">
			<?php foreach(array_slice($tipeKamar->data,0,1) as $kamar) : ?>
			<img src="<?= base_url().$kamar->gambar ?>" widht="280px" height="250px" alt="">
			<p class="mt-2  pdfLight text-center" style="font-size:40px;color:#b99365;letter-spacing:3px">Kamar
				<?= $kamar->tipe ;?></p>
			<p class="mt-1 pdfLight text-center" style="font-size:20px;color:#b99365;letter-spacing:3px"> Rp.
				<?= $kamar->harga ?> </p>
			<p class="mt-1 pdfLight" style="font-size:15px"> <?= $kamar->deskripsi ?> </p>
			<hr>
			</hr>
			<p class="d-flex w-100 flex-row justify-content-around">
				<i class="fa fa-bed" aria-hidden="true" style="font-size:30px"></i>
				<i class="fa fa-wifi" aria-hidden="true" style="font-size:30px"></i>
				<i class="fas fa-hot-tub" style="font-size:30px"></i>
				<i class="fas fa-tv" style="font-size:30px"></i>
				<i class="fas fa-pizza-slice" style="font-size:30px"></i>
			</p>
			<hr>
			</hr>
			<p class="descFa d-flex w-100 flex-row justify-content-around">
				<span class="ml-1"><?= $kamar->jml_ranjang ?> Ranjang</span>
				<span class="" style="margin-left:36px">Free Wifi</span>
				<span class="" style="margin-left:17px">Air Panas</span>
				<span class="" style="margin-left:37px">TV</span>
				<span class="mr-2">Sarapan Pagi</span>
			</p>
			<?php endforeach;?>
		</div>

	</div>
</div>
