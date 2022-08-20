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
            dis.find(".content").html("<input type='hidden' name='cctype[]' value='"+type+"' /><input type='hidden' name='sectype[]' value='"+cntrl+"'/><input type='text' class='form-control' name='content_title[]' placeholder='Content Title' /><textarea class='form-control textarea' name='ccontent[]' required></textarea>");
            //$('textarea').last().summernote();
            tinymce.init({
                selector: '.textarea',
                plugins: 'advlist link image lists table',
                automatic_uploads: true,
                images_upload_url: "/tinymce/upload/",
                file_picker_callback: function(cb, value, meta) {
                    var input = document.createElement('input');
                    input.setAttribute('type', 'file');
                    input.setAttribute('accept', 'image/*');
                    input.onchange = function() {
                        var file = this.files[0];
    
                        var reader = new FileReader();
                        reader.readAsDataURL(file);
                        reader.onload = function () {
                            var id = 'blobid' + (new Date()).getTime();
                            var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                            var base64 = reader.result.split(',')[1];
                            var blobInfo = blobCache.create(id, file, base64);
                            blobCache.add(blobInfo);
                            cb(blobInfo.blobUri(), { title: file.name });
                        };
                    };
                    input.click();
                }
            });
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

    var c = 1;
    $(".textarea").each(function(){
        var data = $(this).data('content');
        tinymce.init({
            selector: '#ta_'+c,
            plugins: 'advlist link image lists table',
            automatic_uploads: true,
            images_upload_url: "/tinymce/upload/",
            setup: function (editor) {
                editor.on('init', function () {
                    editor.setContent(data);
                });
            }
        });
        c++
    });

    $(".btn-create-page").click(function(){
        $(this).closest('form').submit();
    });

    tinymce.init({
        selector: 'textarea#news-events',
        plugins: 'advlist link image lists table',
        automatic_uploads: true,
        images_upload_url: "/tinymce/upload/",
        file_picker_callback: function(cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');
            input.onchange = function() {
                var file = this.files[0];

                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function () {
                    var id = 'blobid' + (new Date()).getTime();
                    var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(',')[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);
                    cb(blobInfo.blobUri(), { title: file.name });
                };
            };
            input.click();
        },
        toolbar: 'undo redo | formatselect | ' +
        'bold italic backcolor | alignleft aligncenter ' +
        'alignright alignjustify | bullist numlist outdent indent | ' +
        'removeformat | help',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
    });
});