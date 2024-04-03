<script>
    $(document).ready(function () {
        //Initialize Select2 Elements
        $('.select2').select2()


        // Set the file input value if old input exists
        var fileName = '{{ old('cv') }}';
        if (fileName) {
            $('.custom-file-input').val(fileName);
            $('.custom-file-label').html(fileName);
        }

        // Update the label text when a file is selected
        $('.custom-file-input').on('change', function () {
            var fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').html(fileName);
        });

        //Date picker
        $('#reservationdate').datetimepicker({
            format: 'L'
        });

        $('.delete-btn').click(function(e){
            e.preventDefault();

            Swal.fire({
                title: "Are you sure you want to delete?",
                text: "You won't be able to revert this!",
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
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

        $('.delete-contact').click(function(e){
            e.preventDefault();

            Swal.fire({
                title: "Are you sure to delete this?",
                text: "You won't be able to rever this!",
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
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

        $('.about-delete').click(function(e){
            e.preventDefault();

            Swal.fire({
                title: "Are you want to delete?",
                text: "You won't be able to revert this!",
                icon: "question",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonColor: "#3085d6",
                confirmButtonColor: "#d33",
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

        $('.delete-resume').click(function(e){
            e.preventDefault();

            Swal.fire({
                title: "Are you sure you want to delete?",
                icon: "question",
                text: "You won't be able to revert this!",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonColor: "#3085d6",
                confirmButtonColor: "#d33",
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
                cancelButtonColor: "#3085d6",
                confirmButtonColor: "#d33",
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
                cancelButtonColor: "#3085d6",
                confirmButtonColor: "#d33",
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

        $('.delete-skills').click(function(e){
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
                let skillId = $(this).data('id');
                let origUrl = "{{ route('skills.destroy', 'id') }}";
                let url = origUrl.replace('id', skillId);

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


        $('.delete-blog').click(function(e){
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
                let blogId = $(this).data('id');
                let origUrl = "{{ route('blog.destroy', 'id') }}";
                let url = origUrl.replace('id', blogId);

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

        $('#blog-image').dropify();

    });

</script>
