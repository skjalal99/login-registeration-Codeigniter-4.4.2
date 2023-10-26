
    <!-- Modern Heading -->
    <h1 class="page-title wow animate__animated animate__fadeInRight">Al-j IT App</h1>

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="glass-container col-md-4">
                <div class="card-header">
                    Admin Login
                </div>
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                       <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif;?>
                <form action="<?php echo base_url(); ?>SigninController/loginAuth" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary login-btn btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Credit -->
    <div class="credit">
        Developed by SK
    </div>

