
<?php $this->load->view(Page("head")); ?>
<body> 
    <?php $this->load->view(Page("header")); ?> 
    <div class="main-wrapper">	
        <section class="blog-list px-3 py-5 p-md-5">
                <div class="row">   
                    <div class="col-sm-9"> 
                       <?php $this->load->view(Page("blogContents")); ?>
                    </div><!--//col9--> 
                    <div class="col-sm-3"> 
                        <div class="row">
                            <div class="col-sm-12">
                                <?php $this->load->view(Page("recommendation")); ?>
                            </div>    
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <?php //$this->load->view(Page("advertisement")); ?>
                            </div>    
                        </div>      
                    </div><!--//col9-->                                            
                </div><!--row-->           
                <!-- footer -->	
        </section><!--//blog-list -->                 
     </div><!--//main-wrapper-->                   
    <?php  $this->load->view(Page("chosecloor")); ?>
    <?php $this->load->view(Page("javascriptadd")); ?>
<body>