<form role="form" method ="post" action="<?php echo base_url('index.php/AdminPanel/postseditdata/'); echo ''.$edit->id."" ?>">
    <div class= "form-group">
        <label class="font-weight-bold">Title</label>
        <input name="Tittle" class = "form-control" value="<?php echo $edit->tittle; ?>">
        <p class="help-block">Please write the title of the post.</p>
    </div>
    <div class= "form-group">
        <label class="font-weight-bold">Post Body</label>
        <textarea name ="Body" class = "ckeditor" ><?php echo $edit->body; ?></textarea>
        <p class="help-block">Please write the body of the post.</p>
    </div>
    <div class= "form-group">
        <label class="font-weight-bold">Post Catogory</label>
        <select class="form-control" name="Category" id=""  >
            <?php foreach($allCategory as $category) { ?>
              <option value="<?php echo $category->categoryName;?>"><?php echo $category->categoryName; ?></option> 
            <?php } ?>  
        </select>
        <p class="help-block">Please select category</p>
    </div>
    <div class= "form-group">
        <button type="submit" class="btn btn-secondary bg-primary">Edit</button>
    </div>
</form>