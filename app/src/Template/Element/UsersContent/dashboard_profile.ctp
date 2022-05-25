<div class="panel panel-primary">
  <div class="panel-heading">Account Data</div>
  <div class="panel-body">
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label>Username</label>
          <input type="text" class="form-control input-sm" name="" value="<?php echo $this->request->session()->read('Auth.User.username') ?>" disabled>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control input-sm" name="email_account" id="EmailAccount" value="<?php echo $Users['email'] ?>">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label>Profile Photo</label>
          <input type="file" class="form-control input-sm" accept="image/*" name="profile_photo" id="ProfilePhoto" value="">
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label>Cover Photo</label>
          <input type="file" class="form-control input-sm" accept="image/*" name="cover_photo" id="CoverPhoto" value="">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <button type="button" name="button" class="btn btn-sm btn-primary" id="ChangeAccountData">Save</button>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <button type="button" name="button" class="btn btn-sm btn-success" id="ChangePassBtn">Change Password</button>
        </div>
      </div>
    </div>
    <div class="row" id="ForgotPasswordForm" hidden>
      <div class="col-sm-4">
        <div class="form-group">
          <label>Old Password</label>
          <input type="password" class="form-control input-sm" name="" value="">
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label>New Password</label>
          <input type="password" class="form-control input-sm" name="" value="">
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label>Confirm New Password</label>
          <input type="password" class="form-control input-sm" name="" value="">
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
          <button type="button" class="btn btn-sm btn-success" name="button"> Change Password </button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="panel panel-primary">
  <div class="panel-heading">Profile Data</div>
  <div class="panel-body">
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label>Fullname</label>
          <input type="text" class="form-control input-sm" name="fullname_user" id="FullnameUser" value="<?php echo $Users['fullname'] ?>">
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label>Birth Date</label>
          <input type="text" class="form-control input-sm date" name="birth_date_user" id="BirthDateUser" placeholder="yyyy-mm-dd" value="<?php echo $Users['birth_date'] ?>">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <label for="">Gender</label>
        <select class="form-control" name="gender_user" id="GenderUser">
          <option value="">--Please Select--</option>
          <option value="1" <?php echo ($Users['gender_id'] == 1)? 'selected':'' ?> >Laki - Laki</option>
          <option value="2" <?php echo ($Users['gender_id'] == 2)? 'selected':'' ?> >Perempuan</option>
        </select>
      </div>
      <div class="col-sm-6">
        <label for="">Phone Number</label>
        <input type="text" class="form-control input-sm" id="PhoneNumberUser" name="phone_number" value="<?php echo $Users['phone_number'] ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="form-group">
          <label>Address</label>
          <textarea name="address_user" id="AddressUser" rows="5" class="form-control input-sm"><?php echo $Users['address'] ?></textarea>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6" hidden>
        <label>Province</label>
        <select name="province_user" class="form-control" id="ProvinceUser">
          <option value="">--Please Select--</option>
          <?php foreach($getProvinces as $province){ ?>
            <option value="<?php echo $province['id'] ?>" <?php echo ($province['id'] == $this->request->session()->read('Auth.User.province_id'))? 'selected' : ''; ?>><?php echo $province['name'] ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="col-sm-6" hidden>
        <label>City</label>
        <select name="city_user" class="form-control" id="CityUser"></select>
      </div>
    </div>
    <div class="row">
      <br>
      <div class="col-sm-12">
        <button class="btn btn-sm btn-primary form-control" type="button" name="save_update_user" id="SaveUpdateUser">Save !</button>
      </div>
    </div>
  </div>
</div>