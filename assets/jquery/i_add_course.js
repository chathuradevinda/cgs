$(function()
{
    $('#i_add_course').validate(
      {
        rules:
        {
          'course_name':{
            required:true,
          },
          course_type:
          {
            required: true
          },
          speciality:{
            required:true
          },

          delivery_type:{
            required:true
          },
          'fee':{
            required:true,
            number:true
          },
          duration:{
            required:true
          },
          target_audience:{
            required:true
          },
          qualification_category:{
            required:true
          },
          prerequisite:{
            required:true
          }
          'description':{
            required:true
          },
          'course_content':{
            required:true
          },
        },
        messages:{

            'course_name':{
                required:'Please enter course name',
            },

            course_type:{
                required:'Please select the course type ',
                //date:'Please enter valid date',

            },
            speciality:{
              required:'Please select the speciality',

            },
            delivery_type:{
              required:'Please select the a delivery type',

            },
          'fee':{
              required:'Please enter course fee',
              number:'Please enter the numeric values only',

            },
            duration:{
              required:'Please select the a course duration',


            },
          target_audience:{
              required:'Please select the target audience',

            },
            qualification_category:{
              required:'Please select the qualification category',

            },
            prerequisite:{
              required:'Please select the a prerequisite',

            },
              'description':{
              required:'Please enter a description about a course',

            },
            'course_content':{
              required:'Please enter the course content',

            },

        },

      });
});
