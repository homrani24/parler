@extends('base')

@section('styles')

<!-- Latest compiled and minified CSS -->
<link href="https://datatables.yajrabox.com/css/datatables.bootstrap.css" rel="stylesheet">
@endsection


@section('content')
    <!-- Content -->
<table id="users-table" class="table">
	<thead>
		<tr>
			<td>id</td>
			<td>Name</td>
			<td>description</td>
			<td>date</td>
			<td>catégorie</td>
		</tr>
	</thead>
</table>
@endsection

@section('scripts')

<script src="https://datatables.yajrabox.com/js/jquery.min.js"></script>
<script src="https://datatables.yajrabox.com/js/bootstrap.min.js"></script>
<script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
<script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>
<script type="text/javascript">
    $(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: 'http://localhost/crudUpload-laravel/public/article/get_datatable',
            columns : [
	            {data: 'id'},
	            {data: 'nom'},
	            {data: 'description'},
	            {data: 'date'},
	            {data: 'categories'},
            ],
            pageLength: 5,
        });
    });
</script>
@endsection
