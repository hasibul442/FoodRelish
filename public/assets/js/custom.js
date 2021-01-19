$(document).ready(function(){
    var counter = 2;
    $('#del_file').hide();
    $('#add_file').click(function(){
        $('#file_tools').before('<div class="file_upload" id="f'+counter+'"><input name="file[]" type="file">'+counter+'</div>');
        $('#del_file').fadeIn(0);
        counter++;
    });
    $('#del_file').click(function(){
        if(counter==3){
            $('#del_file').hide();
        }
        counter--;
        $('#f'+counter).remove();
    });
});