<script type="text/javascript">
    if($(".contact-form").length > 0) {
          // Validate the contact form
        $('.contact-form').validate({
            // Add requirements to each of the fields
            rules: {
              name: {
                required: true,
                minlength: 2
              },
              email: {
                required: true,
                email: true
              },
              message: {
                required: true,
                minlength: 10
              }
            },

            // Specify what error messages to display
            // when the user does something horrid
            messages: {
              name: {
                required: "Silahkan masukkan nama.",
                minlength: $.format("At least {0} characters required.")
              },
              email: {
                required: "Silahkan masukkan email.",
                email: "Email tidak valid."
              },
              message: {
                required: "Silahkan masukkan pesan.",
                minlength: $.format("At least {0} characters required.")
              }
            },

            submitHandler: function(form) {
                $.ajax({
                    type: 'POST',
                    url: '<?php echo $this->Url->build(['controller' => 'ContactUs', 'action' => 'addFeedback']); ?>',
                    data: $(form).serialize(),
                    beforeSend: csrf_token,
                    dataType: "json",
                    success: function(result){
                        if (result.response_code == 201) {
                            $('#WarningFeedback').html(`
                                <div class="alert alert-success">Terima kasih atas kritik & saran Anda</div>
                            `);
                        } else {
                            $('#WarningFeedback').html(`
                                <div class="alert alert-danger">Gagal</div>
                            `);
                        }

                        $('#WarningFeedback').show('slow');
                        setTimeout(function(){ 
                            $('#WarningFeedback').hide('slow');
                        }, 3000);
                    }
                });
            }
        });
    }

    // $('#SubmitFeedback').click(function(){
    //     var data_post = {
    //         'fullname' : $('#FullnameFeedback').val(),
    //         'email' : $('#EmailFeedback').val(),
    //         'message' : $('#MessageFeedback').val()
    //     };

        
    // });
</script>