<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    var gArrayFonts = ['Roboto'];
    var argimentsEditor = {
        fontNames: gArrayFonts,
        fontNamesIgnoreCheck: gArrayFonts,
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript', 'Roboto']],
            ['font', ['bold', 'underline', 'clear']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            // ['view', ['fullscreen', 'codeview', 'help']],
            // ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
            // ['float', ['floatLeft', 'floatRight', 'floatNone']],
            // ['remove', ['removeMedia']],
            ['link', ['linkDialogShow', 'unlink']],
            // ['add', ['addRowDown', 'addRowUp', 'addColLeft', 'addColRight']],
            // ['delete', ['deleteRow', 'deleteCol', 'deleteTable']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
        ],
    };
    $(document).ready(function() {
        $('#editor').summernote(argimentsEditor);
        $('#short_description').summernote(argimentsEditor);
        $('#parameters').summernote(argimentsEditor);
    });
</script>
