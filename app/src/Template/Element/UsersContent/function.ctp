<script type="text/javascript">

    function updateData(data_update){
        return new Promise((resolve, reject) => {
            $.ajax({
                type: 'POST',
                url: '<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'updateUserData']); ?>',
                data: data_update,
                beforeSend: csrf_token,
                processData: false,
                contentType: false,
                cache: false,
                dataType: "json",
                success: resolve,
                error: reject
            });
        });
    }

    function getCities(province_id){
        return new Promise((resolve, reject) => {
            $.ajax({
                type: 'POST',
                url: '<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'getCities']); ?>',
                data: {'province_id' : province_id},
                beforeSend: csrf_token,
                dataType: "json",
                success: resolve,
                error: reject
            });
        });
    }


</script>
