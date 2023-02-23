<article class="blog-post px-3 py-5 p-md-5">
	<div class="container">
		<header class="blog-post-header">
			<h2 class="title mb-2"><?php echo $post->title; ?></h2>
			<div class="meta mb-3"><span class="date"></span><?php echo $post->createDate;?><span class="time"></span><i class="fas-fa fa-eye"></i><span class="comment"><a href="#"> <?php echo $post->postsSeen?> </a></span></div>
		</header>
	</div>
	<div class="blog-post-body">
		<figure class="blog-banner">
			<a href=""><img class="img-fluid" src="<?php echo base_url('uploads/'); echo $post->images;?>" alt="image" width="600px" height="300px"></a>
		</figure>
		<p>
			<?php echo $post->body; ?>
		</p>									
	</div><!--//blog-posts -->
</article> 