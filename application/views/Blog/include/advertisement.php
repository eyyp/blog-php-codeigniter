<?php 
    if(!empty($allAdvertisement)) { 
        foreach($allAdvertisement as $row)
        {
            ?>
                <a href ="<?php echo $row->advertisementSef; ?>"> 
                    <h6 class = "center-my" ></h6>
                    <img src="<?php echo base_url('uploads'); echo $row->img;?>" >
                </a>
            <?php
        }
    }
?>