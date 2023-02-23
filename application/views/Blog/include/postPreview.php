<?php
if(!empty($allPosts)) {
	foreach($allPosts as $row)
	{
		?>
		<div class="item mb-5">
			<div class="media">
				<img class="mr-3 img-fluid post-thumb d-no$ne d-md-flex" src="<?php echo base_url('uploads/');?>posts/<?php echo $row->images; ?>" alt="image">
				<div class="media-body">
						<h3 class="title mb-1"><a href="#"><?php echo $row->title; ?></a></h3>
						<div class="meta mb-1">
							<span class="date"><?php echo $row->createDate; ?></span>
						</div>
						<div class="intro"><?php echo mb_strimwidth($row->body); ?></div>
						<a class="more-link" href="#">Daha fazla &rarr;</a>
					</div><!--//media-body-->
			</div><!--//media-->
		</div><!--//item-->
	<?php 
	} 
}
?>

