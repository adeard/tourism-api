<script>
    $('#ListUsersBtn').click(function(e){
        e.preventDefault();

        users();

        $('.setting_tab').hide('slow');
        $('#UsersTab').show('slow');
    });
</script>