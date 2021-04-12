$(document).ready(function (){
    $('.btn-check').on('change', function(){
        if($(this).parents('.btn-group').children('input').length < 4){
            if($(this).is(':checked')) {
                $(this).parents('.btn-group').children('input').prop('checked', false).removeAttr('checked');
                $(this).prop('checked', true);
            } else {
                $(this).parents('.btn-group').children('input').prop('checked', false).removeAttr('checked');
            }
        } else{
            if($(this).prop("id") === $(this).parents('.btn-group').children('input:first').prop("id")){
                $(this).parents('.btn-group').children('input').prop('checked', false).removeAttr('checked');
            }
        }
        $('#main_form').submit();
    });
    $('#reset').on('click', function(){
        $('body input:checkbox').prop('checked', false).removeAttr('checked');
        $('#main_form').submit();
    });
});
