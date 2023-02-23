<div class="table-responsive">
    <form role="form" method ="post" action="<?php echo base_url('index.php/AdminPanel/categorydbadd');?>">
        <div class= "form-group">
            <label class="font-weight-bold">Category Name</label>
            <input name="categoryName" class = "form-control" placeholder="Category Name">
            <p class="help-block">Please write the Name of the category.</p>
        </div>
        <div class= "form-group">
            <button type="submit" class="btn btn-secondary bg-primary">Add</button>
        </div>
    </form>
</div>