    $(document).ready(function(){
    	$("#banner1").hide(0, function() {
    	});
    });
    $(document).ready(function(){
        $("#banner2").hide(0, function() {
        });
    });

    $(document).ready(function(){
        $("#banner3").hide(0, function() {
        });
    });



    $(document).ready(function(){
        $("#banner1").show(10000, function() {
            $("#banner1").hide(10000, function() {
                 $("#banner2").show(10000, function() {
                     $("#banner2").hide(10000, function() {
                         $("#banner3").show(10000, function() {
                             $("#banner3").hide(10000, function() {
                                 $("#banner1").show(10000, function() {
        });
        });
        });
        });
        });
        });
        });
    });
