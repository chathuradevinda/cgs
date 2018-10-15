
$(function(){

    $('#s_reg').validate({

        rules:{
            'firstName':{
                required:true,
            },
            'lastName':{
                required:true,
            },

            'nic':{
                required:true,
                maxlength:10
            },
            'dob':{
                required:true,
                date:true,
            },
            'addressNo':{
                required:true,
            },
            'addressLine_1':{
                required:true,
            },

            'city':{
                required:true,
            },
            'mobile':{
                required:true,
                number:true,
                maxlength:10,
            },

          'residence':{
              number:true,
              maxlength:10,
          },

          'email':{
            required:true,
            email:true,

          },

            'pwd':{
            required:true,
            minlength:5,
            },

        },
        messages:{

            'firstName':{
                required:'Please enter first name',
            },
            'lastName':{
                required:'Please enter last name',
            },

            'nic':{
                required:'Please enter NIC no ',
                maxlength:'Please enter the valid NIC',

            },
            'website':{
              required:'Please enter a wesite',

            },

            'addressNo':{
              required:'Please enter address no',

            },
            'addressLine_1':{
              required:'Please enter a address line 1',

},
            'city':{
              required:'Please enter the city',

            },
            'mobile':{
              required:'Please enter mobile no',
              number:'Please enter only numeric values',
              maxlength:'Please enter a valid telephone number',
            },

            'residence':{

              number:'Please enter only numeric values ',
              maxlength:'please enter a valid residence telephone number',

            },

            'email':{
              required:'Please enter a email',
              email:'Please enter a valid email address',

            },

            'pwd':{
              required:'Please enter your password',
              minlength:'please enter password at least 5 characters',

            }

    });
});
});
