$(function(){
    "use strict";

    $('#dataTbl').dataTable({
        responsive: true
    });

    $('table').addClass('table-striped table-bordered');
});
function Resize(){
    var side = $(".sldiv").height();
    side = side - 270;
    document.getElementById("mqdiv").style.height = side+"px";
}
window.addEventListener('resize', function(e){
    Resize();
});
