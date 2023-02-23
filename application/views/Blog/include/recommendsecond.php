<h6 class = "center-my" >Tavsiye Edilen Yazılar</h6>
<ul class = "demo">
	<?php
	if(!empty($allRecommendation)){  
		foreach($allRecommendation as $row)  {  ?>
                    <li>
					    <div class="d-flex flex-column">
							<button type="button" class="btn btn-primary p-2 text-left">	
								<a class ="text-white" href="<?php echo base_url('index.php/Manager/post/'); echo ''.$row->recommendationSef.'' ?>">
                        			<samll><?php echo $row->title; ?></small>
								</a>
							</button>
						</div>
                    </li>    
<?php 	
		} 
	} 
?>
</ul>				
						