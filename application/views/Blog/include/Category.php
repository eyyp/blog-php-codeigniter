<a href="<?php echo base_url('index.php');?>"><h4 class = "center-my" ><button type="button" class="btn btn-primary justify-content-center">Konular</button></h4></a>  
<?php if(!empty($allCategory)) { ?> 
<ul class="list-group list-group-flush">	 
	<?php foreach($allCategory as $category)  {  ?>
		<a href="<?php echo base_url('index.php/Manager/category/'); echo $category->categorySef; ?>">  
			<li class="list-group-item">  
				<div class="d-flex flex-column">  
					<button type="button" class="btn btn-primary p-2 text-left"><small><?php echo $category->categoryName; ?></small><span class="badge badge-pill" ><?php echo countCategory($category->categoryName); ?></span></button>
				</div>	
			</li> 
		</a>
<?php  } 
} else {
	?> <p class="ml-4">Henuz konu eklenmedi</p> <?php 
}  
?>
</ul> 
