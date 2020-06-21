@extends('layouts.app')
@section('content')

<div class="d-flex justify-content-end my-2">
	<a href="{{route('post.create')}}" class="btn btn-success float-right">Add Post</a>
</div>

<div class="card card-default">

	<div class="card-header">Posts</div>
	<div class="card-body">
		
		<table class="table">
			
			<thead>

				<th>Image</th>
				<th>Title</th>
				<th>Content</th>
				<th>Description</th>
				<th></th>
				<th></th>

			</thead>
			<tbody>
				
				@foreach($posts as $post)
				<td>
					<img src="{{asset($post->image)}}" width="60px" height="60px">
				</td>
				<td>
					{{$post->title}}
				</td>
				<td>{{$post->content}}</td>
				<td>{{$post->description}}</td>
				<td>
					<a href="" class="btn btn-info btn-sm">Edit</a>
				</td>
				<td>
					<a href="" class="btn btn-danger btn-sm">Trash</a>
				</td>
				@endforeach
			</tbody>
		</table>
	</div>

</div>

@endsection