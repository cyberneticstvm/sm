$(function() {
    "use strict";

    $(".addControl").click(function(){
        var cntrl = parseInt($("#control").val());
        var num = parseInt($("#number").val());
        for(var i=1; i<=num; i++){
            $(".page-content").append("<div class='mt-3 row'><div class='col mt-3'><select class='form-control ctype'><option value='0'>Select</option><option value='1'>New Content</option><option value='2'>Existing Content</option></select></div></div><div class='mt-3 row'><div class='col content'></div></div>");
        }
    });

    $(document).on("change", ".ctype", function(){
        var type = $(this).val();
        if(type == 1){
            $(this).parent().parent().next().find(".content").summernote();
        }else{
            $(this).parent().parent().next().find(".content").html("<select class='form-control'><option value='0'>Select</option><option value='1'>Content-1</option><option value='2'>Content-2</option></select>");
        }
    })
});