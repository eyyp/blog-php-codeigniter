<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
    aria-labelledby="messagesDropdown">
    <h6 class="dropdown-header">
        Message Center
    </h6>
    <?php 
    if(!empty($allMessage)) {    
        foreach($allMessage as $row) { ?>    
        <a class="dropdown-item d-flex align-items-center"  href = "<?php echo base_url('index.php/AdminPanel/messages');?>">
            <div class="dropdown-list-image mr-3">
                <img class="rounded-circle" src="<?php echo base_url('assets/admin/'); ?>img/undraw_profile_2.svg"
                    alt="...">
                <div class="status-indicator bg-success"></div>
            </div>
            <div class="font-weight-bold">
                <div class="text-truncate">
                    <?php echo $row->message;?>
                </div>
                <div class="small text-gray-500"><?php echo $row->messageSubName; echo "//".$row->messageDate?> </div>
            </div>
        </a>
    <?php } }?>    
        <a class="dropdown-item text-center small text-gray-500" href="<?php echo base_url('index.php/AdminPanel/messages');?>" >Read More Messages</a>
</div>