	
<?php if(!empty($allNavbar)) { ?>
	<header class="header text-center">
		<?php foreach($allNavbar as $navbar) { ?>
		<h1 class="blog-name pt-lg-4 mb-0"><a href="#"><?php echo $navbar->title; ?></a></h1>

		<nav class="navbar navbar-expand-lg navbar-dark" >

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >
				<div class="profile-section pt-3 pt-lg-0">
					<img class="profile-image mb-3 rounded-circle mx-auto" src="<?php echo base_url('assets/blog/');?>images/profil.png" alt="image" >

					<div class="bio mb-3"><?php echo $navbar->preface; ?><br></div><!--//bio-->
					<ul class="social-list list-inline py-3 mx-auto">
						<li class="list-inline-item"><a href="<?php echo $navbar->instagram; ?>"><i class="fab fa-instagram fa-fw"></i></a></li>
						<li class="list-inline-item"><a href="<?php echo $navbar->linkedin ?>"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
						<li class="list-inline-item"><a href="<?php echo $navbar->github; ?>"><i class="fab fa-github-alt fa-fw"></i></a></li>
						<li class="list-inline-item"><a href="<?php echo $navbar->stackoverflow; ?>"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
						<li class="list-inline-item"><a href="<?php echo $navbar->codeopen; ?>"><i class="fab fa-codepen fa-fw"></i></a></li>
					</ul><!--//social-list-->
					<hr>
				</div><!--//profile-section-->
		<?php } ?>  
				<ul class="navbar-nav flex-column text-left">
					<?php  $array = explode('/',$_SERVER['REQUEST_URI']); ?>
					<li class="nav-item <?php if(end($array) == 'index.php'){ echo "active"; }?>">
						<a class="nav-link" href="<?php echo base_url('index.php'); ?>"><i class="fas fa-user fa-fw mr-2"></i> About</a>
					</li>
					<li class="nav-item <?php if(end($array) == 'blog'){ echo "active"; }?>">
						<a class="nav-link" href="<?php echo base_url('index.php/Manager/blog');?>"><i class="fas fa-blog fa-fw mr-2"></i>Blog</a>
					</li>
					<li class="nav-item <?php if(end($array) == 'cv'){ echo "active"; }?>">
						<a class="nav-link" href="<?php echo base_url('index.php/Manager/cv');?>"><i class="fas fa-bookmark fa-fw mr-2"></i>CV</a>
					</li>
					<li class="nav-item <?php if(end($array) == 'contact'){ echo "active"; }?>">
						<a class="nav-link" href="<?php echo base_url('index.php/Manager/contact');?>"><i class="fas fa-user fa-fw mr-2"></i>Contact</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
<?php } ?>