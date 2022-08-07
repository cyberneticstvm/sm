$(function() {
    "use strict";

    $(".addControl").click(function(){
        var cntrl = parseInt($("#control").val());
        var num = parseInt($("#number").val());
        if(cntrl == 1 && num > 0){
            $(".pageContent").append("<div class='row gt-3 mt-3'><div class='col-11'><ul class='nav nav-tabs tab-title1'></ul><div class='tab-content one'></div></div><div class='col-1'><a href='javascript:void(0)' onClick='$(this).parent().parent().remove()'><i class='fa fa-trash text-danger'></i></a></div></div>");
            for(var i=1; i<=num; i++){
                var active = (i == 1) ? 'active' : '';
                var show = (i == 1) ? 'show' : '';
                $(".tab-title1").last().append("<li class='nav-item'><a href='#tab1_"+i+"' class='nav-link "+active+"' data-bs-toggle='tab'>Tab_"+i+"</a></li>");
                $(".one").append("<div class='tab-pane "+show+" fade "+active+"' id='tab1_"+i+"'></div>");
                $("#tab1_"+i+"").html("<textarea class='form-control'>Tab_"+i+"</textarea>");
            }
        }
        if(cntrl == 2 && num > 0){
            $(".pageContent").append("<div class='row gt-3 mt-3'><div class='col-3'><div class='nav flex-column nav-tabs tab-title2'></div></div><div class='col-8'><div class='tab-content two'></div></div><div class='col-1'><a href='javascript:void(0)' onClick='$(this).parent().parent().remove()'><i class='fa fa-trash text-danger'></i></a></div></div>");
            for(var i=1; i<=num; i++){
                var active = (i == 1) ? 'active' : '';
                var show = (i == 1) ? 'show' : '';
                $(".tab-title2").last().append("<a href='#tab2_"+i+"' class='nav-link "+active+"' data-bs-toggle='tab'>Tab_"+i+"</a>");
                $(".two").append("<div class='tab-pane "+show+" fade "+active+"' id='tab2_"+i+"'></div>");
                $("#tab2_"+i+"").html("<textarea class='form-control'>Tab_"+i+"</textarea>");
            }
        }
    });
});