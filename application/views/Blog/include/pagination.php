 <nav class="blog-nav nav nav-justified my-5">
 	<?php 
		if($this->session->userdata('page') > 5){
	?>
		<a href="<?php echo base_url('index.php/Manager/backPage'); ?>" class="nav-link-next nav-item nav-link rounded mr-5" href="<?php ?>">Back<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
	<?php  } ?>
	<?php 
		if($this->session->userdata('page') > postCount()){
	?>
		<a class="nav-link-next nav-item nav-link rounded ml-5" href="<?php echo base_url('index.php/Manager/nextPage'); ?>">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
	<?php  } ?>
 </nav>