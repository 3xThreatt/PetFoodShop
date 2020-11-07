while (i < 10) {
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
        $("#banner1").show(1000, function() {
        });
    });
    $(document).ready(function(){
        $("#banner1").hide(1000, function() {
        });
    });


    $(document).ready(function(){
        $("#banner2").show(1000, function() {
        });
    });
    $(document).ready(function(){
        $("#banner2").hide(1000, function() {
        });
    });




    $(document).ready(function(){
        $("#banner3").show(1000, function() {
        });
    });
    $(document).ready(function(){
        $("#banner3").hide(1000, function() {
        });
    });
    i++;
}


