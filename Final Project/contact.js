$(document).ready(function(){
    $(".cb1").change(function() {
        if(this.checked) {
            $(".s1").show()
        }
        else{
            $(".s1").hide()
        }
    });
});

$(document).ready(function(){
    $(".cb2").change(function() {
        $(".s2").toggle();
    });
});
