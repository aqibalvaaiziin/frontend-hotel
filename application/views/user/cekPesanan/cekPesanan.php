<img src="<?= base_url().'/assets/image/big_image_1.jpg' ?>" width="100%" alt=""
	style="position:absolute;top:0;background-position:-25px -25px;object-fit: none;height:65%">
<div class="textImageCover text-center">
	<div style="margin-top:15%">
		<p class="robotoDesc pdfLight" style="font-size:65px;color:white">Cek Pesanan</p>
		<p class="robotoDesc rubikLight" style="font-size:20px;color:white">Lakukan Pengecekan pada pesanan anda</p>
	</div>
</div>


<div class="container" style="margin-top:38%;margin-bottom:100px">
    <h1 class="text-center mb-5 pdfMedium">Cek Pesanan</h1>
    <div class="d-flex flex-column justify-content-between">
        <div class="card inputSearch p-4 mb-5" style="width:100%">
        <?php echo form_open_multipart('user/cekPesanan/cekOrder') ?>
			<form action="" method="post" enctype="multipart/form-data">
                <input type="text" placeholder="Masukkan Kode Pesanan" name="keyword"><br>
                <small class="rubikMedium text-muted">Masukkan kode pesanan dari transaksi yang anda lakukan</small>
                <br>
                <button class="px-5 py-2 btnOrder mt-4 rounded float-right">Cari</button>
            </form>
        <?php echo form_close() ?>
        </div>

        <?php
            $params = $_SERVER['QUERY_STRING']; 
            foreach($transaksi->data as $t){
                if("id_transaksi=".$t->id_transaksi == $params){
                    $html = '
                    <div class="card inputSearch p-4" style="width:100%;height:166px">
                        <p>Id Transaksi : </p>
                        <p>Id Kamar : </p>
                        <p>Id User :</p>
                        <p>Tanggal :</p>
                        <p>Check In :</p>
                        <p>Check out : </p>
                        <p>Total : </p>
                        <p>No Kamar : </p>
                        <p>Nama : </p>
                    </div>
                    ';
                    libxml_use_internal_errors(true);
                    $doc = new DOMDocument(); 
                    $doc->loadHTML($html);
                    echo $doc->saveHTML();
                }else{
                    $html = '
                        <div class="card inputSearch p-4" style="width:100%;height:166px">
                            <h1>Data Tidak Ditemukan</h1>
                        </div>
                    ';
                    libxml_use_internal_errors(true);
                    $doc = new DOMDocument(); 
                    $doc->loadHTML($html);
                    echo $doc->saveHTML();
                }
        
            }
        ?>

    </div>
</div>