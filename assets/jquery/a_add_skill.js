$(function(){
    $('#a_add_skill').validate({

        rules:{
            'skillName':{
                required:true,
            },

            'description':{
                required:true,
            },


        },
        messages:{

            'skillName':{
                required:'Please enter skill name',
            },

            'description':{
              required:'Please enter the skill description',

            },


        },
    });
});
