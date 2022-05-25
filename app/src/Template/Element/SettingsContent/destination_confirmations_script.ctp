<script>
    $('#ListDestinationConfirmationBtn').click(function(e){
        e.preventDefault();

        getDestinationConfirmation();

        $('.setting_tab').hide('slow');
        $('#DestinationConfirmationsTab').show('slow');
    });

    $('#SaveDestinationConfirmation').click(function(){

        var data_post = {
            'tourism_id' : $('#DestinationConfirmationId').val(),
            'price' : $('#DestinationConfirmationPrice').val(),
            'admin_username' : $('#DestinationConfirmationAdminUsername').val(),
            'admin_phone' : $('#DestinationConfirmationAdminPhone').val(),
            'admin_email' : $('#DestinationConfirmationAdminEmail').val()
        };

        approveDestinationConfirmation(data_post);

    })

    $('#ResultDestinationConfirmations').on('click', '.approve_destination_confirmation', function(){
        var id = this.id;

        $('#DestinationConfirmationModalTitle').html(`Verifikasi Tujuan Destinasi`);

        getDetailDestinations(id);
    });
</script>