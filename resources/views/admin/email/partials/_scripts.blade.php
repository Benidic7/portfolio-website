<script>

    $(document).ready(function () {
        $('.delete-email').click(function(e){
            e.preventDefault();

            Swal.fire({
                title: "Are you sure you want delete?",
                text: "You won't be able to revert this!",
                icon: "question",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonColor: "#3085d6",
                confirmButtonColor: "#d33",
                reverseButtons: true,
            }).then((result) => {
                let emailId = $(this).data('id');
                let origUrl = "{{ route('email.destroy', 'id') }}";
                let url = origUrl.replace('id', emailId);

                if(result.isConfirmed){
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(data){
                            Swal.fire({
                                title: "Deleted Success!",
                                html: data.success,
                                icon: "success",
                            }).then((result) => {
                                if(result.isConfirmed){
                                    location.reload();
                                }
                            });
                        },
                        error: function(xhr, status, error){
                            console.error('Error deleting info:', error);
                        }
                    });
                }
            });
        });
    });

</script>
