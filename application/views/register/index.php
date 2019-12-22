<div class="topHead">
    <div class="d-flex w-100 flex-row justify-content-between py-4">
        <div>
            <span>Luxury Hotel</span> 
        </div>
        <div>
            <span><a class="linkReg" href="<?= base_url().'/user/home' ?>">Halaman Utama</a></span>
            <span><a class="linkReg" href="<?= base_url().'/login' ?>">Login</a></span> 
        </div>
    </div>
</div>
<div class="topHead2"> 
    <h5 class="pdfMedium">Hotel terbaik untuk liburan anda</h5> 
    <p class="robotoLight">Daftarkan diri anda untuk mendapatkan layanan terbaik di hotel kami</p>
</div>
<div class="formReg">
    <div class="cardReg">
        <div class="regBody mt-4">
            <h2 class="text-center pdfLight">Register</h2>
            <div class="container h-100">
                <?php
                form_open('register/prosesPost');
                ?>                
                <form action="<?= base_url().'register/prosesPost' ?>" method="post" class="d-flex flex-column justify-content-around h-100">
                    <input type="text" placeholder="NAMA" name="nama">
                    <input type="text" placeholder="EMAIL" name="email">
                    <input type="text" placeholder="NO TELEPHONE" name="no_telp">
                    <input type="text" placeholder="USERNAME" name="username">
                    <input type="text" placeholder="PASSWORD" name="password">
                    <button>Daftar</button>
                </form>
                <?php 
                form_close();
                ?>
            </div>
        </div>
    </div>
</div>


<div class="boxDesc">
    <div class="d-flex flex-wrap">
        <div class="box1 w-50">
            <img src="<?= base_url().'/assets/icons/save-money.png' ?>" width="60px" height="60px" alt="">
            <h4 class="rubikMedium mt-2">Harga Terjangkau</h4>
            <p class="robotoLight">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error eius facilis dicta porro, illo perspiciatis, necessitatibus explicabo placeat, numquam molestiae hic. Alias libero totam eos perferendis! Sint nobis labore quam!</p>
        </div>
        <div class="box1 w-50">
            <img src="<?= base_url().'/assets/icons//good-feedback.png' ?>" width="60px" height="60px" alt="">
            <h4 class="rubikMedium mt-2">Kenyamanan Transaksi</h4>
            <p class="robotoLight">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error eius facilis dicta porro, illo perspiciatis, necessitatibus explicabo placeat, numquam molestiae hic. Alias libero totam eos perferendis! Sint nobis labore quam!</p>
        </div>
        <div class="box1 w-50 mt-4">
            <img src="<?= base_url().'/assets/icons/smartphone.png' ?>" width="60px" height="60px" alt="">
            <h4 class="rubikMedium mt-2">Mudah Diakses</h4>
            <p class="robotoLight">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error eius facilis dicta porro, illo perspiciatis, necessitatibus explicabo placeat, numquam molestiae hic. Alias libero totam eos perferendis! Sint nobis labore quam!</p>
        </div>
    </div>
</div>