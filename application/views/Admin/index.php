<?php $this->load->view(PageAdmin("head")); ?>
    <body id="page-top"> 
        <!-- Page Wrapper --> 
        <div id="wrapper"> 
            <?php $this->load->view(PageAdmin("leftBar")); ?>
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <?php $this->load->view(PageAdmin("topBar")); ?> 
                    <!-- Begin Page Content --> 
                    <div class="container-fluid"> 
                        <?php $this->load->view(PageAdmin("pageHeading")); ?> 
                        <!-- Content Row --> 
                        <div class="row"> 
                            <!-- Area Chart -->                             
                            <?php $this->load->view(PageAdmin("earningsRow")); ?>
                        </div>
                        <div class="row">
                            <div class="col-xl-8 col-lg-7">  
                                <?php $this->load->view(PageAdmin("earningsOverview")); ?>
                            </div>    
                            <div class="col-xl-4 col-lg-5">
                                <?php $this->load->view(PageAdmin("revenueSources")); ?>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Content Column -->
                            <div class="col-lg-6 mb-4">  
                                <?php $this->load->view(PageAdmin("projectBar")); ?>
                                <div class="row">
                                    <?php $this->load->view(PageAdmin("colorBar")); ?>
                                <div>
                            </div>       
                            <div class="col-lg-6 mb-4">
                                <?php $this->load->view(PageAdmin("illustrationsBar"));?>
                                <?php $this->load->view(PageAdmin("approachBar")); ?>
                            </div>       
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->    
                <?php $this->load->view(PageAdmin("footer")); ?>
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->
        
        <!-- Scroll to Top Button-->            
        <?php $this->load->view(PageAdmin("scrollButton")); ?>
        <!-- Logout Modal-->
        <?php $this->load->view(PageAdmin("logoutBar")); ?>
        <!--JavaScript-->
        <?php $this->load->view(PageAdmin("scriptsAdd")); ?>
    </body>
</html>                                                             
