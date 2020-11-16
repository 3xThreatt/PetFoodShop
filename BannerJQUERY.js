    $(document).ready(function(){         //hides  all images on load //
    	$("#banner1").hide(0, function() {
    	});
    });
    $(document).ready(function(){   //hides  all images on load //
        $("#banner2").hide(0, function() {
        });
    });

    $(document).ready(function(){   //hides  all images on load //
        $("#banner3").hide(0, function() {
        });
    });



    $(document).ready(function(){
        $("#banner1").show(10000, function() {   //slowly shows first image
            $("#banner1").hide(10000, function() { //slowly hides first image
                 $("#banner2").show(10000, function() {//slowly shows second image
                     $("#banner2").hide(10000, function() {//slowly hides second image
                         $("#banner3").show(10000, function() {//slowly shows third image
                             $("#banner3").hide(10000, function() {//slowly hides third image
                                 $("#banner1").show(10000, function() {//ends with last image permanantely visible
        });
        });
        });
        });
        });
        });
        });
    });
