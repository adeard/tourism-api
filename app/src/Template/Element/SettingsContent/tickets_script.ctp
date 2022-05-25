<script>
    $(document).ready(function(){
        $(".date-ticket").datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            minView: 2,
            weekStart: 1,
            language: 'id',
            startDate: '',
            endDate: '<?php echo date('Y-m-d H:i:s') ?>',
            todayHighlight: true,
        });
    });

    $('#ListTicketBtn').click(function(e){
        e.preventDefault();

        tickets();

        $('.setting_tab').hide('slow');
        $('#TicketsTab').show('slow');
    });

    $('#FilterTicket').click(function(){
        var data_get = {
            'start_date' : $('#StartDateTicket').val(),
            'finish_date' : $('#FinishDateTicket').val(),
        };

        tickets(data_get);
    })
</script>