<?php
        echo $this->session->flashdata('conclusion'); 
		if(!empty($allPosts)){
			foreach($allPosts as $row)
			{
 ?>
				<div class="item mb-5">
					<div class="media">
						<a class="link-secondary" href="<?php echo base_url('index.php/Manager/post/'); echo ''.$row->postslink.'' ?> " >
							<img class="mr-3 img-fluid post-thumb d-no$ne d-md-flex" src="<?php echo base_url('uploads/');?><?php echo $row->images; ?>" alt="image">
								<div class="media-body">
								<h3 class="title mb-1"><?php echo $row->title; ?></h3>
						</a>          
								<div class="meta mb-1">		  
									<span class="date"><?php echo $row->createDate; ?></span>
								</div>
								<div class="intro">
										<p>
										<?php echo  mb_strimwidth($row->body, 0, 150, "...");?>
										</p>
								</div>
								<a class = "link-secondary" href="<?php echo base_url('index.php/Manager/post/'); echo ''.$row->postslink.'' ?> " > Daha fazla &rarr;</a>
								</div> <!--//media-body-->  	       
					</div><!--//media-->
				</div><!--//item-->
<?php 
			} 
		}
		else{
			echo '<p>Henuz hiç post yok</p>';
		}
?>
