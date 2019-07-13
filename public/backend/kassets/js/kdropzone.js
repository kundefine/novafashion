$(document).ready(function(){
    Dropzone.autoDiscover = false;
    var myDropzone = new Dropzone("#myDropzone", {
        url: "/admin/upload-media",
        paramName: 'media',
        addRemoveLinks: true,
        // autoProcessQueue: false,
        uploadMultiple: true,
        clickable: true,
        maxFilesize: 100,

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },



        init: function () {
            var myDropzone = this;


            // Update selector to match your button
/*            $("#button").click(function (e) {
                e.preventDefault();
                myDropzone.processQueue();
            });*/
            this.on("addedfile", function() {
                console.log(myDropzone.files.length);
                // how much file you want to upload at the same time
                myDropzone.options.parallelUploads = myDropzone.files.length;

                $(".progress-bar").width('0px');
            });
            this.on("success", function() {
                $('#button').attr('disabled', 'disabled');
                // setTimeout(function(){window.location.reload()}, 1000);
            });

            this.on('sending', function(file, xhr, formData) {
                // Append all form inputs to the formData Dropzone will POST
                var data = $('#frmTarget').serializeArray();
                $.each(data, function(key, el) {
                    formData.append(el.name, el.value);
                });
            });

            this.on("processing", function() {
                $('#button').text('processing');
            });

            this.on("totaluploadprogress", function(progress) {
                $(".progress-bar").width(progress + '%').html(progress + '% complete');
            });
        }


    });
    console.log(myDropzone);
});

