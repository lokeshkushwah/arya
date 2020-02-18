$(document).ready(function () {
    	$('#rootwizard .finish').click(function() {
    		//alert('Finished!, Starting over!');
    		var con=confirm ("Do you want to finshed paper");
                if (con==true){
                    var root = location.protocol + '//' + location.host;
                   window.location.href=root;
                }
    	});
    
     	$('#rootwizard').bootstrapWizard({onTabClick: function(tab, navigation, index) {
		//alert('on tab click disabled');
		//return false;
	}});
    
    $(document).on("keydown", disableF5);
    $(document).keydown(function (event) {
        if (event.keyCode == 123) {
            return false;
        }
        else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {
            return false;
        }
    });

    $(document).on("contextmenu", function (e) {
        e.preventDefault();
    });
    function fullScreen() {
        var el = document.documentElement
                , rfs = // for newer Webkit and Firefox
                el.requestFullScreen
                || el.webkitRequestFullScreen
                || el.mozRequestFullScreen
                || el.msRequestFullScreen
                ;
        if (typeof rfs != "undefined" && rfs) {
            rfs.call(el);
        } else if (typeof window.ActiveXObject != "undefined") {
            // for Internet Explorer
            var wscript = new ActiveXObject("WScript.Shell");
            if (wscript != null) {
                wscript.SendKeys("{F11}");
            }
        }

    }
    $('.myform input').on('change', function () {
        //alert($(this).val());
        // alert($(this).find(".myform input[name='exam']").val());
        //  alert($('.myform input[name=op]:checked').val());
        // alert($('input[name=exam]').val()); alert( $(this).parent(".myform input[name='exam']"));
      //  alert($(this).parents(".tab-pane").find(".myform input[name='question']").val());
        //alert($(this).parents(".tab-pane").find(".myform input[name='exam']").val());
        //alert( $('#user').val() );

    });

 

});

function disableF5(e) {
    if ((e.which || e.keyCode) == 116 || (e.which || e.keyCode) == 82)
        e.preventDefault();
}
;



