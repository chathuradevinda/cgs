
$(function(){

    $('#a_add_qualification').validate({

        rules:{
            'qualification_title':{
                required:true,
            },

            qualification_type:{
                required:true,

            },
            'qualification_description':{
                required:true,
            },
            prior_qualification:{
                required:true,
            },
            'speciality':{
              required:true,
            },
            'nvq_level':{
              required:true,
            },
            'prefix':{
              required:true,
            },
            'postfix':{
              required:true,
            },





        },
        messages:{

            'qualification_title':{
                required:'Please enter qualification title',
            },

            qualification_type:{
                required:'Please select a qualification type ',
                //date:'Please enter valid date',

            },
            'qualification_description':{
              required:'Please enter the qualification description',

            },
            'prior_qualification':{
              required:'Please select a prior qualification',

            },
            'speciality':{
              required:'Please enter speciality',

            },
            'nvq_level':{
              required:'Please enter a nvq level',


            },
            'prefix':{
              required:'Please enter a prefix',

            },
            'postfix':{
              required:'Please enter a postfix',

            },


        },
    });
});
