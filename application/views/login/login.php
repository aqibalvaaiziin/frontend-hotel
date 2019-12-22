<img src="<?= base_url().'/assets/image/big_image_1.jpg' ?>" width="100%" alt=""
	style="position:absolute;top:0;background-position:-25px -25px;object-fit: none;height:65%">
<div class="textImageCover text-center">
	<div style="margin-top:15%">
		<p class="robotoDesc pdfLight" style="font-size:65px;color:white">Log In</p>
		<p class="robotoDesc rubikLight" style="font-size:20px;color:white">Lakukan Log In untuk mengakses pelayanan kami</p>
		<p class="robotoDesc rubikLight" style="font-size:20px;color:white">Daftarkan diri anda jika anda tidak memiliki akun</p>
	</div>
</div>
<div class="formCenter">
    <div class="cardForm">
        <?php 
        form_open('login/proses_login');
        ?>
        <form action="login/proses_login" method="post" role="form">
        <div class="cardBody container mt-2 d-flex flex-column justify-content-around">
                <input type="text" placeholder="Username" name="username">
                <input type="password" placeholder="Password" name="password">
                <button class="btnLogin py-2 mt-3">Log In</button>
                <small class="smallSignUp text-muted">Apakah anda punya akun? <a href="<?= base_url().'register' ?>">Dafar Disini</a></small>
            </div>
        </form>
        <?php 
        form_close();
        ?>
    </div>
</div>