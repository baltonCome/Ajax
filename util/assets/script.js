$(document).ready(function() { 

    function load() {
        $('#update').hide();
        $.ajax({
            url: '../../handler.php',
            type: 'POST',
            data: { action: 'getAll' },
            dataType: 'json',
            success: function(data) {
                $('#body').html(data);
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

    let update_id = null;

    $(document).on('click', '.update', function () {

        $.ajax({
            url: '../../handler.php',
            type: 'POST',
            data: {action: 'update', id:update_id, brand: $('#brand').val(), model: $('#model').val()},
            dataType: 'json',
            success: function(data) {
                $('#add_form')[0].reset();
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
                update_id = data.id;
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