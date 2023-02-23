<?php $this->load->view(Page("head")); ?> 
<body> 
<?php $this->load->view(Page("header")); ?>
    <div class="main-wrapper">
        <?php $this->load->view(Page("found"));?>
        <section class="blog-list px-3 py-5 p-md-5">
                <div class="row">
                    <div class="col-sm-3">
                        <?php $this->load->view(Page("category"));?>                     
                    </div> <!--  //col-sm-3 -->
                    <div class="col-sm-9">
                        <?php $this->load->view(Page("preview")); ?>  
                        <?php $this->load->view(Page("pagination")); ?>
                    </div> <!-- //col-sm-9 -->                  
                </div> <!-- //row --> 
                <?php $this->load->view(Page("footer")); ?>        
        </section>                 
     </div><!--//main-wrapper-->                   
    <?php  $this->load->view(Page("chosecloor")); ?>
    <?php $this->load->view(Page("javascriptadd")); ?>
<body> 