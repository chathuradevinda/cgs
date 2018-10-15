
$(function(){

    $('#i_reg').validate({

        rules:{
            'institute_name':{
                required:true,
            },

            'registration_no':{
                required:true,
            },
            'website':{
                required:true,
            },
            'email':{
                required:true,
                email:true,
            },
            'address_no':{
                required:true,
            },
            'address_line_1':{
                required:true,
            },

            'city':{
                required:true,
            },
            'telephone_1':{
                required:true,
                number:true,
                maxlength:10
            },

          'telephone_2':{
              number:true,
              maxlength:10
          },

          'fax':{
            required:true,
            number:true,
            maxlength:10
          },

            'pwd':{
            required:true,
            minlength:5,
            },

        },
        messages:{

            'institute_name':{
                required:'Please enter company name',
            },

            'registration_no':{
                required:'Please enter company registration no ',
                //date:'Please enter valid date',

            },
            'website':{
              required:'Please select a start time',

            },
            'email':{
              required:'Please enter a email',
              email:'Please enter a valid email address',

            },
            'address_no':{
              required:'Please enter company address no',

            },
            'address_line_1':{
              required:'Please enter a address line 1',



            'city':{
              required:'Please enter the city',

            },
            'telephone_1':{
              required:'Please enter a no in telephone line #1',
              number:'Please enter only numeric values ',
              maxlength:'please enter a valid telephone number',

            },
            'telephone_2':{

              number:'Please enter only numeric values ',
              maxlength:'please enter a valid telephone number',

            },
            'fax':{
              required:'Please enter a fax number',
              number:'Please enter only numeric values ',
              maxlength:'please enter a valid fax number',

            },
            'pwd':{
              required:'Please enter your password',
              minlength:'please enter password at least 5 characters',

            },
        },
    });
});
