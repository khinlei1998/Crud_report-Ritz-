$(document).ready(function() {
    $('.js-example-basic-multiple').select2({
       placeholder: "Select Team Member *",
       allowClear: true
   });
});

    CKEDITOR.replace('summary-ckeditor');

   $('.timepicker').datetimepicker({
       icons: {
           time: 'glyphicon glyphicon-time',
           date: 'glyphicon glyphicon-calendar',
           up: 'glyphicon glyphicon-chevron-up',
           down: 'glyphicon glyphicon-chevron-down',
           previous: 'glyphicon glyphicon-chevron-left',
           next: 'glyphicon glyphicon-chevron-right',
           today: 'glyphicon glyphicon-screenshot',
           clear: 'glyphicon glyphicon-trash'
       },
       format: 'HH:mm:ss'
   }); 


          