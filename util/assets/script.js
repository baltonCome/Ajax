$(document).ready(function() { 

    function load() {
        $.ajax({
            url: '../../handler.php',
            type: 'POST',
            data: { action: 'getAll' },
            dataType: 'json',
            success: function(data) {
                $('#body').html(data);
                $('#update').hide();
            }
        });
    }

    $('#add').click(function() {
        $.ajax({
            url: '../../handler.php',
            type: 'POST',
            data: {action: 'save', brand: $('#brand').val(), model: $('#model').val()},
            success: function(data) {
                $('#add_form')[0].reset();
                window.alert(data);
                load();
            }
        });
    });

    $(document).on('click', '.delete', function () {

        $.ajax({
            url: '../../handler.php',
            type: 'POST',
            data:{id: $(this).attr('id'), action: 'delete'},
            dataType: 'json',
            success: function(data){
                window.alert(data);
                load();
            }
        });
    });

    $(document).on('click', '.edit', function () {

        $.ajax({
            url: '../../handler.php',
            type: 'POST',
            data:{id: $(this).attr('id'), action: 'find'},
            dataType: 'json',
            success: function(data){ 
                $('#brand').val(data.brand);
                $('#model').val(data.model);
                $('#title').html('Update Vehicle');
                $('#add').hide();
                $('#update').show();
                let found_id = val(data.id);

                $('#action').val('update');
                $('#id').val(found_id);
                
                $.ajax({
                    url: '../../handler.php',
                    type: 'POST',
                    data: {action: 'update', id:found_id, brand: $('#brand').val(), model: $('#model').val()},
                    success: function(data) {
                        $('#add_form')[0].reset();
                        window.alert(data);
                        load();
                        
                    }
                });
            }
        });
    });

    $('#search').on('input', function(){

        let keyword = $(this).val();

        $ajax({
            url: '../../handler.php',
            type: 'POST',
            data: {action: 'save', keyword : keyword},          
            dataType : 'json',
            success: function(data){
                $('#body').html(data);
                load();
            }
        })
    });
    load();
});