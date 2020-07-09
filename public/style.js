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


           $('#team_id').on('change', function () {
               $('#t_member_id').empty();
               // $("#t_member_id").append(new Option("","",false,false));
               var t_member = $('#team_id').find(':selected').val();
               console.log("N blade: [user/create] component :[User dropdown] from:user.create Selected Team =>"+t_member);
               getAssibleUser(t_member);
           });

           function getAssibleUser(t_member){
               $.ajax({
                   headers: {
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                   },
                   method: "POST",
                   url: "/getUser",
                   data:{
                       "_token": "{{ csrf_token() }}",
                       "t_member": t_member
                   }
               }).done(function (data) {
                console.log(data);
                for (var i = 0; i < data.length; i++) {
                   var newOption = new Option(data[i].name, data[i].name, false, false);
                   $('#t_member_id').append(newOption);
                   console.log(newOption);
                }
                  
               }).fail(function (jqXHR, textStatus) {
                   console.log("F blade: [employee/create] component :[department dropdown] from:employee.create Fail =>" + textStatus)
               });
           }

           window.onload = function () {
               $.ajax({
                   headers: {
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                   },
                   method: "POST",
                   url: "/getUser",
                   data:{
                       "_token": "{{ csrf_token() }}",
                       "t_member": 1
                   }
               }).done(function (data) {
                console.log(data);
                for (var i = 0; i < data.length; i++) {
                   var newOption = new Option(data[i].name, data[i].name, false, false);
                   $('#t_member_id').append(newOption);
                   console.log(newOption);
                }
                  
               }).fail(function (jqXHR, textStatus) {
                   console.log("F blade: [employee/create] component :[department dropdown] from:employee.create Fail =>" + textStatus)
               });
              
           }