<?php
$this->load->view(Page("head"));
?>  
<link href="<?php echo base_url('assets/blog/');?>css/templatemo-xtra-blog.css" rel="stylesheet">
<?php
$this->load->view(Page("header"));
?>

<div class ="main-wrapper">  
<?php $this->load->view(Page("found"));?>
    <section class="blog-list px-3 py-5 p-md-5">
        <div class="row">
            <div class="row tm-row tm-mb-120">
                <div class="col-12">
                    <?php echo $this->session->flashdata('conclusion'); ?>
                </div>
                <div class="col-lg-7 tm-contact-left">
                    <?php $this->load->view(Page("contactPanel")); ?>
                </div>
                <div class="col-lg-5 tm-contact-right">
                    <?php $this->load->view(Page("contactMessage")); ?>
                </div>
            </div>
        </div>    
    </section>    
</div>     