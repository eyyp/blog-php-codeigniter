<?php if(!empty($allMessage)) { ?>
    <?php foreach($allMessage as $row) { ?>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary  mb-1"> <?php echo $row->messageSubName; ?></div>
                            <div class="text-xs font-weight-bold text-gradient-light mb-1"> <?php echo $row->messageEmail; ?></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php echo $row->message; ?>
                            </div>
                            <samll><?php echo $row->messageDate;?></small>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check fa-2x "></i>
                        </div> 
                </div>
                </div>
            </div>
        </div>
<?php   } 
    }
?>