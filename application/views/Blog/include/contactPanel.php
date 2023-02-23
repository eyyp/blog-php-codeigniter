<form method="POST" action="<?php echo base_url('index.php/Manager/messageSend');?>" class="mb-5 ml-auto mr-0 tm-contact-form">                        
    <div class="form-group row mb-4">
        <label name="name" for="name" class="col-sm-3 col-form-label text-right tm-color-primary">Ad Soyad</label>
        <div class="col-sm-9">
            <input class="form-control mr-0 ml-auto" name="name" id="name" type="text" required>                            
        </div>
    </div>
    <div class="form-group row mb-4">
        <label name="email" for="email" class="col-sm-3 col-form-label text-right tm-color-success">Email</label>
        <div class="col-sm-9">
            <input class="form-control mr-0 ml-auto" name="email" id="email" type="email" required>
        </div>
    </div>
    <div class="form-group row mb-4">
        <label name="subject" for="subject" class="col-sm-3 col-form-label text-right tm-color-primary">Konu</label>
        <div class="col-sm-9">
            <input class="form-control mr-0 ml-auto" name="subject" id="subject" type="text" required>
        </div>
    </div>
    <div class="form-group row mb-5">
        <label name="message" for="message" class="col-sm-3 col-form-label text-right tm-color-primary">Mesaj</label>
        <div class="col-sm-9">
            <textarea class="form-control mr-0 ml-auto" name="message" id="message" rows="8" required></textarea>                                
        </div>
    </div>
    <div class="form-group row text-right">
        <div class="col-12">
            <button class="tm-btn tm-btn-primary tm-btn-small">Gönder</button>                        
        </div>                            
    </div>                                
</form>