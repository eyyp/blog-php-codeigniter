<!DOCTYPE html>
<html lang="en">
    <!-- Kontrol edilmesi gereken kodlar  -->
    <?php  $this->load->view(headPage()); ?>
    <link id="theme-style" rel="stylesheet" href="<?php echo base_url('assets/blog/');?>css/404.css">
    <body>
        <section class="notFound">
            <div class="img">
                <img src="<?php echo base_url('assets/blog/');?>images/blog/page404.png" alt="Back to the Homepage"/>
                <img src="<?php echo base_url('assets/blog/');?>images/blog/page4042.png" alt="El Delorean, El Doc y Marti McFly"/>
            </div>
            <div class="text">
                <h1>404</h1>
                <h2>PAGE NOT FOUND</h2>
                <h3>BACK TO HOME?</h3>
                    <a href="<?php echo base_url('index');?>" class="yes">YES</a>
                    <a href="<?php echo base_url('index');?>">NO</a>
            </div>
    </section>
</body>
         
