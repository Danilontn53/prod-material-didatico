$(function(){
    $('#btnModalRealizarLogin').click(function(){
        $('#modalRealizarLogin').modal('show')
            .find('#modalContentRealizarLogin')
            .load($(this).attr('value'));
    });

    $('#btnModalRealizarLogin1').click(function(){
        $('#modalRealizarLogin1').modal('show')
            .find('#modalContentRealizarLogin1')
            .load($(this).attr('value'));
    });

});