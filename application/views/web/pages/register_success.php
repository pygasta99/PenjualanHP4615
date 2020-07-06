

<div class="main">
    <div class="content" style="text-align: center">
        <div class="register_account" style="text-align:center;display:inline-block;float: none">
            <h3>Selamat Datang di OKShop <?php echo $this->session->flashdata('customer_name'); ?></h3>
            
            <p>Hi <?php echo $this->session->flashdata('customer_name'); ?>, Kamu Telah Berhasil Membuat Akun,Cek Email Sekarang? <a href="mailto:<?php echo $this->session->flashdata('customer_email'); ?>"><b><?php echo $this->session->flashdata('customer_email'); ?></b></a>
                Dan Aktifkan Akunmu . Terimakasih Sudah Bergabung.
            </p>
            
            
            
        </div>  	
        <div class="clear"></div>
    </div>
</div>