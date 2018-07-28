<?php $this->load->view('layouts/login_layout') ?>

<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
        
            <?php if(isset($error)) { echo $error; }; ?>
            <div class="account-wall">
            <body background="<?php echo base_url('assets/images/bg1.jpg'); ?>">
            <h1 class="text-center login-title">LOGIN</h1> 
            <br> 
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                     alt="">
                <form class="form-signin" method="POST" action="<?php echo base_url() ?>index.php/Login/loginAwal">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Masukkan Username Anda" autofocus>
                        <?php echo form_error('username'); ?>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda">
                        <?php echo form_error('password'); ?>
                    </div>

                    <button class="btn btn-lg btn-primary btn-block" name="btn-login" id="btn-login" type="submit">
                        Masuk</button>

                    <label class="checkbox pull-left">
                        <input type="checkbox" value="remember-me">
                        Ingatkan Saya
                    </label>
                    <div class="text-center"> <a href="<?php echo base_url('index.php/Login/register') ?>">Create an account</a></div>
                </form>
            </div>  
            <div id="error" style="margin-top: 10px"></div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
</body>
</html>