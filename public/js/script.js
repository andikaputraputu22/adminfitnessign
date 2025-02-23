$(document).ready(function() {
    $('#tableService').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true
    });

    $('#tableInstructor').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true
    });

    $('#deleteService').click(function(e) {
        e.preventDefault();
        let deleteUrl = $(this).data("url");
        Swal.fire({
            title: "Are you sure?",
            text: "This action cannot be undone!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = deleteUrl;
            }
        });
    });
});

$(document).on("click", '#editService', function() {
    let serviceId = $(this).data("id");
    let categoryId = $(this).data("category");
    let name = $(this).data("name");
    let description = $(this).data("description");

    $('#editServiceCategory').val(categoryId);
    $('#editServiceName').val(name);
    $('#editServiceDescription').val(description);

    $('#formEditService').attr("action", `/services/${serviceId}/update`);

    $('#modalEditService').modal('show');
});

$('#modalAddService').on('show.bs.modal', function() {
    $(this).find('form')[0].reset();
});

$(document).on('trix-file-accept', function(e) {
    e.preventDefault();
});

function applyDnDFile($el) {
    const $beforeUploadEl = $el.find(".before-upload");
    const $afterUploadEl = $el.find(".after-upload");
    const $inputFile = $el.find("input");
    const $imagePreview = $el.find(".after-upload img");
    const $clearBtn = $el.find(".after-upload .clear-btn");

    function showImagePreview(img) {
        if (img) {
            const blobUrl = URL.createObjectURL(img);
            $imagePreview.attr("src", blobUrl);
            $afterUploadEl.show();
            $beforeUploadEl.hide();
        }
    }

    $beforeUploadEl.on("click", function(e) {
        e.preventDefault();
        $inputFile.trigger("click");
    });

    $inputFile.on("change", function(e) {
        e.preventDefault();
        showImagePreview(this.files[0]);
    });

    $clearBtn.on("click", function(e) {
        e.preventDefault();
        $afterUploadEl.hide();
        $beforeUploadEl.css("display", "flex");
    });

    $beforeUploadEl.on("dragover", function(e) {
        e.preventDefault();
        $el.addClass("active");
    });
    
    $beforeUploadEl.on("dragleave", function(e) {
        e.preventDefault();
        $el.removeClass("active");
    });

    $beforeUploadEl.on("drop", function(e) {
        e.preventDefault();
        $el.removeClass("active");
        showImagePreview(e.originalEvent.dataTransfer.files[0]);
    });
}

applyDnDFile($(".file-dnd"));