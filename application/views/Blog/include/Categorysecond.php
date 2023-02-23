			
<?php if(!empty($allCategory)) {?>
<ul class = "demo">	
	<?php foreach($allCategory as $category)  {  ?>
    <li class="nav-item">
		<a class ="nav-link p-2" href="<?php echo base_url('index.php/Manager/category/'); echo $category->categorySef; ?>"> <i class="fas fa-award fa-fw mr-2"></i>   
        <samll><?php echo $category->categoryName; ?></small><span class="badge badge-pill" ><?php echo countCategory($category->categoryName); ?></span>	
		</a>
    </li>    
<?php  } } ?> 
</ul> 

				