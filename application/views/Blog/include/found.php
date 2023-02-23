
<section class="cta-section theme-bg-light py-5">
    <div class="container text-center">
	    <h2 class="heading">Blogumda bazen işinize yarayabilicek bazen de eğlenceli yazılar paylaşıyorum.</h2>
	    <div class="intro">Bloğuma hoş geldiniz.Abone olun ve yazılarım hakkında bilgi alın.Abone olmak için e-posta kullanın.</div>
	    <form class="signup-form form-inline justify-content-center pt-3" method="post" action= "<?php echo base_url('index.php/AdminPanel/abone'); ?>">
            <div class="form-group">
                <label class="sr-only" for="semail">Mail</label>
                <input type="email" id="semail" name="email" class="form-control mr-md-1 semail" placeholder="E-postanızı girin">
            </div>
            <button type="submit" class="btn btn-primary">Abone</button>
        </form>
    </div><!--//container-->
			<?php echo $this->session->flashdata('conclusion'); ?>
</section>