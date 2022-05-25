<script>
    $('#ListCustomerFeedbackBtn').click(function(e){
        e.preventDefault();

        feedback();

        $('.setting_tab').hide('slow');
        $('#FeedbackTab').show('slow');
    });
</script>