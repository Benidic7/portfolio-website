<script>
    $(document).ready(function () {
        //Initialize Select2 Elements
        $('.select2').select2()
    });

    // Set the file input value if old input exists
    $(document).ready(function() {
        var fileName = '{{ old('cv') }}';
        if (fileName) {
            $('.custom-file-input').val(fileName);
            $('.custom-file-label').html(fileName);
        }
    });

    // Update the label text when a file is selected
    $('.custom-file-input').on('change', function () {
        var fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').html(fileName);
    });

     //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    $(document).ready(function(){
        $('.delete-btn').click(function(e){
            e.preventDefault();

            Swal.fire({
                title: "Are you sure you want to delete?",
                text: "You won't be able to revert this!",
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!",
                reverseButtons: true,
            }).then((result) => {
                let homeId = $(this).attr('data-id');
                let origRoute = "{{ route('home.destroy', 'id') }}";
                let route = origRoute.replace('id', homeId);

                if(result.isConfirmed){
                    $.ajax({
                        url: route,
                        type: 'DELETE',
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(data){
                            deleted(data)
                        },
                        error: function(xhr, status, error) {
                            console.error('Error deleting info:', error);
                        }
                    });

                    function deleted(data){
                        Swal.fire({
                            title: "Delete Success!",
                            html: data.success,
                            icon: "success",
                        }).then((result) => {
                            if(result.isConfirmed){
                                location.reload();
                            }
                        });
                    }
                }
            });
        });
    });

    $(document).ready(function(){
        $('.delete-contact').click(function(e){
            e.preventDefault();

            Swal.fire({
                title: "Are you sure to delete this?",
                text: "You won't be able to rever this!",
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!",
                reverseButtons: true,
            }).then((result) => {
                let contactId = $(this).attr('data-id');
                let origRoute = "{{ route('contact.destroy', 'id') }}";
                let route = origRoute.replace('id', contactId);

                if(result.isConfirmed){
                    $.ajax({
                        url: route,
                        type: 'DELETE',
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(data){
                            deleted(data)
                        },
                        error: function(xhr, status, error){
                            console.error('Error deleting info:', error)
                        }
                    });

                    function deleted(data){
                        Swal.fire({
                            title: "Delete Success",
                            icon: "success",
                            html: data.success,
                        }).then((result) => {
                            if(result.isConfirmed){
                                location.reload();
                            }
                        });
                    }
                }
            });
        });
    });

    $(document).ready(function(){
        $('.about-delete').click(function(e){
            e.preventDefault();

            Swal.fire({
                title: "Are you want to delete?",
                text: "You won't be able to revert this!",
                icon: "question",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonColor: "#d33",
                confirmButtonColor: "#3085d6",
                reverseButtons: true
            }).then((result) => {
                if(result.isConfirmed){
                    let aboutId = $(this).attr('data-id');
                    let origRoute = "{{ route('about.destroy', 'id') }}";
                    let route = origRoute.replace('id', aboutId);

                    $.ajax({
                        url: route,
                        type: 'DELETE',
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(data){
                            deleted(data)
                        },
                        error: function(xhr, status, error){
                            console.error('Error deleting info:', error);
                        }
                    });

                    function deleted(data){
                        Swal.fire({
                            title: "Delete Success",
                            html: data.success,
                            icon: "success",
                        }).then((result) => {
                            if(result.isConfirmed){
                                location.reload();
                            }
                        });
                    }
                }
            });
        });
    });

    $(document).ready(function(){
        $('.delete-resume').click(function(e){
            e.preventDefault();

            Swal.fire({
                title: "Are you sure you want to delete?",
                icon: "question",
                text: "You won't be able to revert this!",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                reverseButtons: true,
            }).then((result) => {
                let resumeId = $(this).attr('data-id');
                let origRoute = "{{ route('resume.destroy', 'id') }}";
                let route = origRoute.replace('id', resumeId);

                if(result.isConfirmed){
                    $.ajax({
                        url: route,
                        type: 'DELETE',
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(data){
                            deleted(data)
                        },
                        error: function(xhr, status, error){
                            console.error('Error deleting info:', error);
                        }
                    });

                    function deleted(data){
                        Swal.fire({
                            title: "Delete Success",
                            html: data.success,
                            icon: "success",
                        }).then((result) => {
                            if(result.isConfirmed){
                                location.reload();
                            }
                        });
                    }
                }
            });
        });


        $('.delete-educ').click(function(e){
            e.preventDefault();

            Swal.fire({
                title: "Are you sure you want to delete?",
                text: "You won't be able to revert this!",
                icon: "question",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                reverseButtons: true,
            }).then((result) => {
                let educId = $(this).attr('data-id');
                let origRoute = "{{ route('education.destroy', 'id') }}";
                let route = origRoute.replace('id', educId);

                if(result.isConfirmed){
                    $.ajax({
                        url: route,
                        type: 'DELETE',
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(data){
                            deleted(data)
                        },
                        error: function(xhr, status, error){
                            console.error('Error deleting info:', error);
                        }
                    });

                    function deleted(data){
                        Swal.fire({
                            title: "Delete Success",
                            html: data.education,
                            icon: "success",
                        }).then((result) => {
                            if(result.isConfirmed){
                                location.reload();
                            }
                        });
                    }
                }
            });
        });


        $('.delete-exp').click(function(e){
            e.preventDefault();

            Swal.fire({
                title: "Are you sure you want to delete?",
                text: "You won't be able to revert this!",
                icon: "question",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                reverseButtons: true,
            }).then((result) => {
                let expId = $(this).attr('data-id');
                let origRoute = "{{ route('experience.destroy', 'id') }}";
                let route = origRoute.replace('id', expId);

                if(result.isConfirmed){
                    $.ajax({
                        url: route,
                        type: 'DELETE',
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(data){
                            deleted(data)
                        },
                        error: function(xhr, status, error){
                            console.error('Error deleting info:', error);
                        }
                    });

                    function deleted(data){
                        Swal.fire({
                            title: "Delete Success",
                            html: data.exp,
                            icon: "success",
                        }).then((result) => {
                            if(result.isConfirmed){
                                location.reload();
                            }
                        });
                    }
                }
            });
        });
    });


</script>
