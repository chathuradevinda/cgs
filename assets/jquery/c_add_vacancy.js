
$(function(){

    $('#c_add_vacancy').validate({

        rules:{
            'title':{
                required:true,
            },

            'description':{
                required:true,
            },
            'minimum_qualification':{
                required:true,
            },

            'salary':{
                required:true,
                number:true,
            },
            'cv_mail':{
                required:true,
                email:true,
            },
            'skills_required':{
                required:true,
            },
        },
        messages:{

            'title':{
                required:'Please enter vacancy title',
            },

            'description':{
              required:'Please enter a vacancy description',

            },
            'minimum_qualification':{
              required:'Please enter a minimum qualification',

            },

            'salary':{
              required:'Please enter a salary',
              number:'Please Enter numeric values only',

            },
            'cv_mail':{
              required:'Please enter a event cv mail address',
              email:'Please enter a valid email address',

            },
            'skills_required':{
              required:'Please enter the vacancy required skills',

            },


        },
    });
});
