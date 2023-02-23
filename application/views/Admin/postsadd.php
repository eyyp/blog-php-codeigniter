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
                <div class="container-fluid">
                <div class="container-fluid">
                <p class="mb-4">Aşağıdaki alandan yeni bir post atabilirsiniz.</p>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"> 
                        <a href="<?php echo base_url('index.php/AdminPanel/posts');?>"><button type="button" class="btn btn-primary">Posts</button></a>
                    </h1> 

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Post Verileri</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                             <?php $this->load->view(PageAdmin("formAddPosts"));?>
                            </div>
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
    <?php $this->load->view(PageAdmin("scrollButton")); ?>

    <!-- Logout Modal-->
    <?php $this->load->view(PageAdmin("logoutBar")); ?>

    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view(PageAdmin("scriptsAdd")); ?>
</body>

</html>