$(function(){
    "use strict";

    $('#dataTbl').dataTable({
        responsive: true
    });

    $('table').addClass('table-striped table-bordered')
});

$(window).resize(function(){
    //alert(document.getElementById("leftdiv").style.height)
});