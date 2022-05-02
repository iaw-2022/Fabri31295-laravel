Dropzone.options.dropzone =
{
    maxFilesize: 12,
    resizeQuality: 1.0,
    acceptedFiles: ".jpeg,.jpg,.png,.gif",
    addRemoveLinks: true,
    timeout: 60000,
    removedfile: function(file)
    {
        var name = file.upload.filename;
        $.ajax({
            headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },
            type: 'POST',
            url: '{{ url("files/destroy") }}',
            data: {filename: name},
            success: function (data){
                console.log("File has been successfully removed!!");
            },
            error: function(e) {
                console.log(e);
            }});
            var fileRef;
            return (fileRef = file.previewElement) != null ?
            fileRef.parentNode.removeChild(file.previewElement) : void 0;
    },
    success: function (file, response) {
        console.log(response);
    },
    error: function (file, response) {
        return false;
    }
};
