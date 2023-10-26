
    <!-- Modern Heading -->
    <h1 class="page-title wow animate__animated animate__fadeInRight">Al-j IT App</h1>

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="glass-container col-md-4">
                <div class="card-header">
                    Signup
                </div>
                <?php if(isset($validation)):?>
                <div class="alert alert-warning">
                   <?= $validation->listErrors() ?>
                </div>
                <?php endif;?>
                <form action="<?php echo base_url(); ?>SignupController/store" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="uname" placeholder="Name" value="<?= set_value('uname') ?>" class="form-control"  >
                    </div>
                    <div class="form-group">
                        <label for="username">Fullname</label>
                        <input type="text" name="fname" placeholder="Full Name" value="<?= set_value('fname') ?>" class="form-control"  >
                    </div>
                    <div class="form-group">
                        <label for="username">Email</label>
                        <input type="text" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control"  >
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Password"  class="form-control"  >
                    </div>
                    <div class="form-group">
                        <label for="password">Confirm Password</label>
                        <input type="password" name="confirmpassword" placeholder="Confirm Password"  class="form-control"  >
                    </div>
                    <button type="submit" class="btn btn-primary login-btn btn-block">Register</button>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Credit -->
    <div class="credit">
        Developed by SK
    </div>

