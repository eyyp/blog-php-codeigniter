<?php echo form_open_multipart(base_url("index.php/AdminPanel/postsinsert"));?>
<form role="form" method ="post" action="<?php echo base_url('index.php/AdminPanel/postsinsert');?>">
    <div class= "form-group">
        <label class="font-weight-bold">İmage</label>
        <input name="image" type="file" class = "form-control" placeholder="Title">
        <p class="help-block">Please write the image of the post.</p>
    </div>
    <div class= "form-group">
        <label class="font-weight-bold">Title</label>
        <input name="Tittle" class = "form-control" placeholder="Title">
        <p class="help-block">Please write the title of the post.</p>
    </div>
    <div class= "form-group">
        <label class="font-weight-bold">Post Body</label>
        <textarea name ="Body" class = "ckeditor"></textarea>
        <p class="help-block">Please write the body of the post.</p>
    </div>
    <div class= "form-group">
        <label class="font-weight-bold">Post Category</label>
        <select class="form-control" name="Category" id=""  >
            <?php foreach($allCategory as $category) { ?>
              <option value="<?php echo $category->categoryName;?>"><?php echo $category->categoryName; ?></option> 
            <?php } ?>  
        </select>
        <p class="help-block">Please select category</p>
    </div>
    <div class= "form-group">
        <button type="submit" class="btn btn-secondary bg-primary">Add</button>
    </div>
</form>