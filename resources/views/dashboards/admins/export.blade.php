<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
</head>
<body>
<table class="table table-bordered datatable" style="width: 100%">
            <thead>
                <tr>
                    
                    <th>Participant Image</th>
                    <th>Email</th>
                    <th>Name of Participant</th>
                    <th>School</th>
                    <th>District</th>
                    <th>Activity</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
          </table>


<script type="text/javascript">
        $(function(){
			$.ajaxSetup({
				headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
			});
			var table = $('.datatable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                processing: true,
                serverSide: true,
				responsive: true,
                ajax: "{{ route('admin.export') }}",
                columns: [
                    {
                        data: 'par_image',
                        name: 'par_image',
                        render: function (data, type, row, meta) {
                            return '<img src=" {{asset('images')}}/' + data +'" height="50" width="50"/>';
                        }
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
					          {
                        data: 'name_participant',
                        name: 'name_participant'
                    },
					          {
                        data: 'school',
                        name: 'school'
                    },
					          {
                        data: 'district',
                        name: 'district'
                    },
                    {
                        data: 'activities',
                        name: 'activities'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },

                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        })
</script>
</body>
</html>