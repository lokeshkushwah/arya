$(document).ready(function () {
 
    //$('input[name="op"]').on('click', function(e){
    $('.myform input').on('change', function () {
                

        var exam_id = $('#exam_id').val();
        var showing_question = $(this).parents(".tab-pane").find("#sq_id").val();

        $(".nav-pills li a[href='#tab"+ showing_question+ "']").css("background-color", "rgb(0,128,0)");
         $(".nav-pills li a[href='#tab"+ showing_question+ "']").css("color", "white");
    
   
    var question_id = $(this).parents(".tab-pane").find(".myform input[name='question']").val();
    $(this).attr('checked', 'checked');
    var answer_id = $(this).val();
    $.ajax({
    url: $('#submitURL').val(),
            data: {exam_id: $('#exam_id').val(), question_id: $(this).parents(".tab-pane").find(".myform input[name='question']").val(), answer_id: answer_id},
            dataType: 'json',
            type: 'post',
            success: function (data) {
                if (data.status == 2) {
                    alert('Oops Time Out');
                    window.location.reload();
                }
                console.log(data);
            },
    });
    });
    
       $('.next').click(function () {
       var activetab=$('.nav-pills li.active').find('a');
    //   alert(activetab.css("background-color"));
        if (activetab.css('background-color')=="rgb(0, 128, 0)")  {
            
        }else {
        var ref_this1 =$('.nav-pills li.active').find('a').css("background-color", "red");
               var ref_this1 =$('.nav-pills li.active').find('a').css("color", "white");
    }
    
     // alert(activetab.attr("href"));
    });
    
      $('.previous').click(function () {
       var activetab=$('.nav-pills li.active').find('a');
    //   alert(activetab.css("background-color"));
        if (activetab.css('background-color')=="rgb(0, 128, 0)")  {
            
        }else {
        var ref_this1 =$('.nav-pills li.active').find('a').css("background-color", "red");
         var ref_this1 =$('.nav-pills li.active').find('a').css("color", "white");
    }
    
     // alert(activetab.attr("href"));
    });
    
    $('a[data-toggle="tab"]').click(function () {
           var activetab=$('.nav-pills li.active').find('a');
      // alert(activetab.css("background-color"));
        if (activetab.css('background-color')=="rgb(51, 122, 183)")  {
             var ref_this1 =$('.nav-pills li.active').find('a').css("background-color", "red");
         var ref_this1 =$('.nav-pills li.active').find('a').css("color", "white");
        }
    })

   
});