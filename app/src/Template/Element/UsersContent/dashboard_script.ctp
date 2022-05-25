<script type="text/javascript">

    $(".date").datepicker({
		format: 'yyyy-mm-dd',
		autoclose: true,
		minView: 2,
		weekStart: 1,
		language: 'id',
		startDate: '',
		endDate: '<?php echo date('Y-m-d H:i:s') ?>',
		todayHighlight: true,
	});

    $('#ChangePassBtn').click(function(){
        $('#ForgotPasswordForm').show('slow');
        $('#ChangePassBtn').hide('slow');
    });

    $('#ChangeAccountData').click(function(){
        
        var form_data = new FormData();

        var profile_photo = $('#ProfilePhoto').prop('files')[0];
        var cover_photo = $('#CoverPhoto').prop('files')[0];
        var email = $('#EmailAccount').val();
        
        form_data.append('photo_profile', profile_photo);
        form_data.append('photo_cover', cover_photo);
        form_data.append('email', email);

        updateData(form_data)
        .then(result => {
            if (result == 'success') {
                $('#WarningDashboard').html(`
                    <div class="alert alert-success">
                        Data berhasil diubah
                    </div>
                `);
            } else {
                $('#WarningDashboard').html(`
                    <div class="alert alert-danger">
                        `+result+`
                    </div>
                `);
            }

            $('#WarningDashboard').show('slow');

            setTimeout(function() {
                $('#WarningDashboard').hide('slow');
            }, 3000);
        });
    });

    $('#ProvinceUser').change(function(){
        
        getCities(this.value)
        .then(result => {
            if (result.data.length > 0) {
                $('#CityUser').html('<option value="">--Please Select--</option>');

                for (let i = 0; i < result.data.length; i++) {
                    $('#CityUser').append(`
                    <option value="`+result.data[i].id+`">`+result.data[i].name+`</option>
                    `);
                }

            } else {
                $('#CityUser').html('<option value="">Data Not Found</option>');
            }
            
        });
        
    });

    $('#SaveUpdateUser').click(function(){

        var form_data = new FormData();

        var data_post = {
            'fullname' : $('#FullnameUser').val(),
            'birth_date' : $('#BirthDateUser').val(),
            'gender_id' : $('#GenderUser').val(),
            'phone_number' : $('#PhoneNumberUser').val(),
            'address' : $('#AddressUser').val(),
            'province_id' : $('#ProvinceUser').val(),
            'city_id' : $('#CityUser').val()
        };

        form_data.append('fullname', data_post.fullname);
        form_data.append('birth_date', data_post.birth_date);
        form_data.append('gender_id', data_post.gender_id);
        form_data.append('phone_number', data_post.phone_number);
        form_data.append('address', data_post.address);
        form_data.append('province_id', data_post.province_id);
        form_data.append('city_id', data_post.city_id);

        $(this).attr('disabled', true);

        updateData(form_data)
        .then(result => {
            $('#SaveUpdateUser').removeAttr('disabled');

            if (result == 'success') {
                $('#WarningDashboard').html(`
                    <div class="alert alert-success">
                        Data berhasil diubah
                    </div>
                `);
            } else {
                $('#WarningDashboard').html(`
                    <div class="alert alert-danger">
                        `+result+`
                    </div>
                `);
            }

            $('#WarningDashboard').show('slow');

            setTimeout(function() {
                $('#WarningDashboard').hide('slow');
            }, 3000);
        });

    });

</script>
