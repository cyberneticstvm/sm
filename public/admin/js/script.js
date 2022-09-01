var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
$(function() {
    "use strict";

    $('.select2').select2();
    $(".search-select").select2({
        allowClear: true
    });

    $('#dataTbl').dataTable({
        responsive: true
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('form').submit(function(){
        $(".btn-submit").attr("disabled", true);
        $(".btn-submit").html("<span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true'></span>&nbsp;Loading...");
    });

    $(".addControl").click(function(){
        var cntrl = parseInt($("#control").val());
        var sec = $("#control").find(':selected').text();
        var num = parseInt($("#number").val());
        $(".page-content").append("<div class='border p-3 mt-3 section'><h5 class='text-primary'>"+sec+"</h5>");
        for(var i=1; i<=num; i++){
            $(".section").last().append("<div class='mt-3 row'><div class='col mt-3'><select class='form-control ctype' name='content_type[]' data-section='"+cntrl+"'><option value='0'>Select</option><option value='1'>New Content</option></select></div></div><div class='mt-3 row'><div class='col content'></div></div>");
        }
        $(".section").last().append("<div class='text-end mt-1'><a href='javascript:void(0)' class='text-danger' onclick='$(this).parent().parent().remove()'>Remove this section</a></div>");
        $(".page-content").append("<input type='hidden' name='stype[]' value='"+cntrl+"' /><input type='hidden' name='scount[]' value='"+num+"'/></div>");
    });

    $(document).on("change", ".ctype", function(){
        var dis = $(this).parent().parent().next();
        var type = $(this).val();
        var cntrl = $(this).data('section');
        if(type == 1){
            dis.find(".content").html("<input type='hidden' name='cctype[]' value='"+type+"' /><input type='hidden' name='sectype[]' value='"+cntrl+"'/><input type='text' class='form-control' name='content_title[]' placeholder='Content Title' /><textarea class='form-control' name='ccontent[]' required></textarea>");
            //var ele = dis.find('textarea').last().attr('class');
            var cls = (Math.random() + 1).toString(36).substring(7);
            //dis.find('textarea').last().addClass(cls);
            dis.find('textarea').last().attr("id", cls);
            CKEDITOR.replace(cls, options);
        }else{
            /*$.ajax({
                type: 'GET',
                url: '/get-page-list/',
                success: function(data){
                    dis.find(".content").html("<input type='hidden' name='cctype[]' value='"+type+"' /><input type='hidden' name='sectype[]' value='"+cntrl+"' /><select class='form-control pageList' name='ccontent[]' required><option value='0'>Select</option></select>");
                    $.each(data, function (i, value) {
                        $(".pageList").last().append('<option value="' + value.id + '">' + value.name + '</option>');
                    });
                },
                error: function(XMLHttpRequest, textStatus, errorThrown){
                    console.log(XMLHttpRequest);
                },
            });*/
        }
    });

    $(".btn-create-page").click(function(){
        $(this).closest('form').submit();
    });

    $(document).on("click", ".dlt", function(){
        var id = $(this).data("id");
        var type = $(this).data('type');
        $.ajax({
            type: 'POST',
            url: '/admin/delete/'+id+'/'+type,
            data: {},
            success: function(data){
                alert(data);
                location.reload();
            },
            error: function(XMLHttpRequest, textStatus, errorThrown){
                console.log(XMLHttpRequest);
            },
        });
    });

});