$(document).ready(function () {
    setInterval(function () {
        var countdown = $('.countdown').text();
        if (countdown == "00 hours, 00 min and 00 sec") {

            alert('OOps Time out');
            window.location.reload();
        }
//alert('5 second');
    }, 5000);


    //$('input[name="op"]').on('click', function(e){
    $('input').on('change', function () {
        var exam_id = $('#exam_id').val();

        var showing_question = $(this).closest(".tab-pane").find("#sq_id").val();
        var mysubject = $.trim($('.nav-tabs .active').find('a').attr('href').replace('#', ''));
        var tabs = '#tab' + mysubject.toString();
        //  alert(tabs);
        // alert($(tabs + " .nav-pills li.active").find('a').css("background-color"));

        $(tabs + " .nav-pills li.active").find('a').css("background-color", "rgb(0,128,0)");
        $(tabs + " .nav-pills li.active").find('a').css("color", "white");

        // alert(showing_question);
        var question_id = $(this).closest(".tab-pane").find(".myform input[name='question']").val();
        //alert(question_id);
        $(this).attr('checked', 'checked');
        var answer_id = $(this).val();
        $.ajax({
            url: $('#submitURL').val(),
            data: {exam_id: $('#exam_id').val(), question_id: $(this).closest(".tab-pane").find(".myform input[name='question']").val(), answer_id: answer_id},
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

    $('.canceled').click(function () {
        //$('#myCheckbox').attr('checked', false);
        // alert(url);
        var mysubject1 = $.trim($('.nav-tabs .active').find('a').attr('href').replace('#', ''));
        var exam_id = $('#exam_id').val();
        var question_id = $(this).attr("qt");
        var question_no = $(this).attr("qn");
        // alert(question_no);
        // alert(question_id);
        $.ajax({
            url: 'delete-user-answer',
            data: {exam_id: $('#exam_id').val(), del_question: question_id},
            dataType: 'json',
            type: 'post',
            success: function (data) {
                if (data.status == 4) {
                    //  alert('Reset');
                    //  window.location.reload();
                }
                console.log(data);
            },
        });


        // alert(mysubject);
        $(" #q" + mysubject1 + question_no + " input:radio").removeAttr("checked");

        var mysubject1 = $.trim($('.nav-tabs .active').find('a').attr('href').replace('#', ''));
        var tabs = '#tab' + mysubject1.toString();
        // alert(tabs);
        // alert($(tabs + " .nav-pills li.active").find('a').css("background-color"));

        var activetab = $(tabs + " .nav-pills li.active").find('a');
        //alert(activetab.css('background-color') );
        if (activetab.css('background-color') == "rgb(0, 128, 0)") {
            var ref_this1 = activetab.css("background-color", "red");
            var ref_this1 = activetab.css("color", "white");
        } else if (activetab.css('background-color') == "rgb(51, 122, 183)") {

            var ref_this1 = activetab.css("background-color", "red");
            var ref_this1 = activetab.css("color", "white");
        } else if (activetab.css('background-color') == "rgb(128, 0, 128)") {

            var ref_this1 = activetab.css("background-color", "red");
            var ref_this1 = activetab.css("color", "white");
        }
        //rgb(128, 0, 128)

        // alert(activetab.attr("href"));
    });


    $('.marked').click(function () {


        //   alert(mysubject);
        var showing_question = $(this).closest(".tab-pane").find("#sq_id").val();
        //   alert(showing_question);
        var mysubject1 = $.trim($('.nav-tabs .active').find('a').attr('href').replace('#', ''));
        var tabs = '#tab' + mysubject1.toString();
        // alert(tabs);
        // alert($(tabs + " .nav-pills li.active").find('a').css("background-color"));

        var activetab = $(tabs + " .nav-pills li.active").find('a');
       // alert(activetab.css("background-color"));
        // var activetab = $('#q' + mysubject + ' .nav-pills li.active').find('a');
        //  alert(activetab.css("background-color"));
        if (activetab.css('background-color') == "rgb(0, 128, 0)") {

        } else {
            var ref_this1 = activetab.css("background-color", "purple");
            var ref_this1 = activetab.css("color", "white");
        }

        // alert(activetab.attr("href"));
    });
    $('.next').click(function () {


        // alert(mysubject);

        var mysubject1 = $.trim($('.nav-tabs .active').find('a').attr('href').replace('#', ''));
        var tabs = '#tab' + mysubject1.toString();
        var activetab = $(tabs + " .nav-pills li.active").find('a');
        // alert(activetab.css("background-color"));
        if (activetab.css('background-color') == "rgb(51, 122, 183)") {
            var ref_this1 = activetab.css("background-color", "red");
            var ref_this1 = activetab.css("color", "white");
        } else if (activetab.css('background-color') == "rgb(128, 0, 128)") {

        } else {

        }

        // alert(activetab.attr("href"));
    });

    $('.previous').click(function () {
        var mysubject = $.trim($('.nav-tabs .active').text().toLowerCase());
        //alert(mysubject);
        var mysubject1 = $.trim($('.nav-tabs .active').find('a').attr('href').replace('#', ''));
        var tabs = '#tab' + mysubject1.toString();
        var activetab = $(tabs + " .nav-pills li.active").find('a');
        // alert(activetab.css("background-color"));
        if (activetab.css('background-color') == "rgb(0, 128, 0)") {

        } else if (activetab.css('background-color') == "rgb(128, 0, 128)") {

        } else {
            var ref_this1 = activetab.css("background-color", "red");
            var ref_this1 = activetab.css("color", "white");
        }

        // alert(activetab.attr("href"));
    });

    $("a[data-toggle='tab']").click(function () {
       // var mysubject = $.trim($('.nav-tabs .active').text().toLowerCase());
        var mysubject1 = $.trim($('.nav-tabs .active').find('a').attr('href').replace('#', ''));
        var tabs = '#tab' + mysubject1.toString();
        var activetab = $(tabs + " .nav-pills li.active").find('a');

        // alert($(tabs + " .nav-pills li.active").find('a').attr("href"));
        if ($(tabs + " .nav-pills li.active").find('a').css('background-color') == "rgb(51, 122, 183)") {

            $(tabs + " .nav-pills li.active").find('a').css("background-color", "red");
            $(tabs + " .nav-pills li.active").find('a').css("color", "white");
        } else if ($(tabs + " .nav-pills li.active").css('background-color') == "rgb(238, 238, 238)") {

        }

    })


});