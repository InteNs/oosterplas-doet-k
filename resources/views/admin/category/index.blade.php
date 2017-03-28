@extends('layouts.dashdefault')

@section('content')
	<h3>
		Categoriën
	</h3>
	<table class="table table-striped table-hover ">
		<tr>
			<td>
				#id
			</td>
			<td>
				titel
			</td>
			<td>
				beschrijving
			</td>
			<td>

			</td>
			<td>

			</td>
			<td>

			</td>
		</tr>
		@foreach ($categories as $category)
			<tr>
				<td>
					#{{$category->id}}
				</td>
				<td>
					{{$category->title}}
				</td>
				<td>
					{{$category->description}}
				</td>
				<td>
					<a href="/beheer/categorie/{{$category->id}}" title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
				</td>
				<td>
					<a href="/beheer/categorie/{{$category->id}}/edit" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
				</td>
				<td>
					<a href="javascript:checkDelete({{$category->id}});" title="Delete"><i class="fa fa-times" aria-hidden="true"></i></a>
				</td>
			</tr>
		@endforeach
	</table>
	{{ $categories->links() }}
	<script>
		function checkDelete(id) {
			//Declaration
			var token = $('#token').val();
			var id = id;

			$.ajaxSetup({
				headers: {
					'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
				}
			});

			//Delete request
			$.ajax({
				type:   'DELETE',
				url:    '/beheer/categorie/' + id,
				data:   { _token :token },
				success: function(data){

				}
			});

			window.location.href = "/beheer/categorie";
		}
	</script>

@endsection