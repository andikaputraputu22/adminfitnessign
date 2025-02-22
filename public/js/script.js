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