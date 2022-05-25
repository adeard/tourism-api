<section class="awe-parallax register-page-demo">
    <div class="awe-overlay"></div>
    <div class="container">
        <div class="login-register-page__content">
            <div class="content-title">
                <span>Don’t stay at home</span>
                <h2>JOIN US !</h2>
            </div>
            <?php echo $this->Form->create(null, ['url' => '', 'autocomplete' => 'off', 'role' => 'form']); ?>
                <div class="form-item">
                    <label>Username</label>
                    <input type="text" name="new_username" id="NewUsername" required>
                </div>
                <div class="form-item">
                    <label>Email</label>
                    <input type="email" name="new_email" id="NewEmail" required>
                </div>
                <div class="form-item">
                    <label>Password</label>
                    <input type="password" name="new_password" id="NewPassword" required>
                </div>
                <div class="form-item">
                    <label>Confirm password</label>
                    <input type="password" name="new_repassword" id="NewRepassword" required>
                </div>
                <div class="form-actions">
                    <input type="submit" value="Register">
                </div>
            <?php echo $this->Form->end(); ?>
            <div class="login-register-link">
                Already have Account? <a href="<?php echo $this->request->webroot ?>users">Log in HERE</a>
            </div>
        </div>
    </div>
</section>
