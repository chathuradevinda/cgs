$(function () {
  $('#data_form').validate({
    rules:{
      skill_name:{
        required:true,
        text:true
      }
    },

    messages:{
      skill_name:{
        required: 'Please enter a valid skill',

      }
    }
  });
}

);
