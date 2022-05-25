<section class="awe-parallax login-page-demo">
    <div class="awe-overlay"></div>
    <div class="container">
        <div class="login-register-page__content">
            <div class="content-title">
                <span>Welcome back</span>
                <h2>EXPLORER!</h2>
            </div>
            <?php echo $this->Form->create(null, ['url' => '', 'autocomplete' => 'off', 'role' => 'form']); ?>
                <div class="form-item">
                    <label>Username</label>
                    <input type="text" name="username">
                </div>
                <div class="form-item">
                    <label>Password</label>
                    <input type="password" name="password">
                </div>
                <a href="#" class="forgot-password">Forgot Password</a>
                <div class="form-actions">
                    <input type="submit" value="Log In">
                </div>
            <?php echo $this->Form->end(); ?>
            <div class="login-register-link">
                Dont have account yet? <a href="<?php echo $this->request->webroot ?>users/register">Register HERE</a>
            </div>
        </div>
    </div>
</section>
