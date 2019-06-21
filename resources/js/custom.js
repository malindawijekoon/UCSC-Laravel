$('.datepicker').datepicker({
    format: 'yyyy/mm/dd',
    startDate: '0d',
    autoclose: true
});

$(".my-success-msg").delay( 1000 ).fadeOut('slow');



$( ".model-pop" ).click(function() {
    $('#id').val($(this).data('id'));
});
