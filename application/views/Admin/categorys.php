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
                        <p class="mb-4"></p>
                        <!-- Page Heading -->
                        <?php echo $this->session->flashdata('bilgi'); ?>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Categorys &nbsp;<a href="<?php echo base_url('index.php/AdminPanel/categoryadd');?>"><button type="button" class="btn btn-secondary bg-primary ">Add Category</button></a></h6>
                            </div>
                            <div class="card-body">
                                <?php $this->load->view(PageAdmin("tableCategorys")); ?>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <?php $this->load->view(PageAdmin("footer")); ?>
                <!-- End of Footer -->
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <?php $this->load->view(PageAdmin("scrollButton"));?>

        <!-- Logout Modal-->
        <?php $this->load->view(PageAdmin("logoutBar")); ?>

        <!--JavaScript-->
        <?php $this->load->view(PageAdmin("scriptsAdd")); ?> 
    </body>
</html>