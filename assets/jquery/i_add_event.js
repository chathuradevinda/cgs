
$(function(){

    $('#i_add_event').validate({

        rules:{
            'eventName':{
                required:true,
            },

            'date':{
                required:true,
                date:true,
            },
            'startTime':{
                required:true,
            },
            'endTime':{
                required:true,
            },
            'venue':{
                required:true,
            },
            'entryFee':{
                required:true,
                number:true,
            },
            'content':{
                required:true,
            },
            'details':{
                required:true,
            },
            'resourse_person_1':{
                required:true,
            },





        },
        messages:{

            'eventName':{
                required:'Please enter event name',
            },

            'date':{
                required:'Please select a date ',
                //date:'Please enter valid date',

            },
            'startTime':{
              required:'Please select a start time',

            },
            'endTime':{
              required:'Please select a end time',

            },
            'venue':{
              required:'Please enter venue',

            },
            'entryFee':{
              required:'Please enter a event entry fee',
              number:'Please Enter numeric values only',

            },
            'content':{
              required:'Please enter a event content',

            },
            'details':{
              required:'Please enter the event details',

            },
            'resourse_person_1':{
              required:'Please enter a resourse person #1 deatails',

            },

        },
    });
});
