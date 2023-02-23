<form role="form" method ="post" action="<?php echo base_url('index.php/AdminPanel/navbarinsert');?>">
  <?php foreach($allNavbar as $navbar) { ?>
    <div class= "form-group">
        <label class="font-weight-bold">Title</label>
        <input name="Tittle" class = "form-control" placeholder="<?php echo $navbar->title;?>">
        <p class="help-block">Please write the title of the navbar.</p>
    </div>
    <div class= "form-group">
        <label class="font-weight-bold">Preface</label>
        <input name="Preface" class = "form-control" placeholder="<?php echo $navbar->preface;?>">
        <p class="help-block">Please write the preface of the navbar.</p>
    </div>
    <div class= "form-group">
        <label class="font-weight-bold">İnstagram Link</label>
        <input name="Instagram" class = "form-control" placeholder="<?php echo $navbar->instagram;?>">
        <p class="help-block">Please write the instagram link of the navbar.</p>
    </div>
    <div class= "form-group">
        <label class="font-weight-bold">Linkedin Link</label>
        <input name="Linkedin" class = "form-control" placeholder="<?php echo $navbar->linkedin;?>">
        <p class="help-block">Please write the Linkedin link of the navbar.</p>
    </div>  
    <div class= "form-group">
        <label class="font-weight-bold">Github Link</label>
        <input name="Github" class = "form-control" placeholder="<?php echo $navbar->github;?>">
        <p class="help-block">Please write the Github link of the navbar.</p>
    </div>  
    <div class= "form-group">
        <label class="font-weight-bold">Stackoverflow Link</label>
        <input name="Stackoverflow" class = "form-control" placeholder="<?php echo $navbar->stackoverflow;?>">
        <p class="help-block">Please write the Stackoverflow link of the navbar.</p>
    </div>  
    <div class= "form-group">
        <label class="font-weight-bold">Codeopen Link</label>
        <input name="Codeopen" class = "form-control" placeholder="<?php echo $navbar->codeopen;?>">
        <p class="help-block">Please write the Codeopen link of the navbar.</p>
    </div>                         
    <div class= "form-group">
        <button type="submit" class="btn btn-secondary bg-primary">Add</button>
    </div>
    <?php } ?>
</form>