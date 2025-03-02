@extends('main') 

@section('title','View Rlog')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>{{ $post->title }}</h1>

			{{ $post->body }}
		</div>
		<div class="col-md-4">
			<div class="card card-body bg-light">
				<dl class="dl-horizontal">
					<dt>URL Slug:</dt>
					<dd><a href="{{ route('blog.single',$post->slug) }}" class="">{{$post->slug}}</a></dd>
				</dl>
				<dl class="dl-horizontal">
					<dt>Created At:</dt>
					<dd>{{date('M j Y h:i a',strtotime($post->created_at))}}</dd>
				</dl>
				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{date('M j Y h:i a',strtotime($post->updated_at))}}</dd>
				</dl>
				<hr>

				{!! Form::open(['route' =>['posts.destroy',$post->id ],'method' => 'DELETE']) !!}
					<div class="row">
						<div class="col-sm-6 d-grid">
							{!!Html::linkRoute('posts.edit','Edit',array($post->id),array('class'=>'btn btn-primary'))!!}
							
						</div>
						<div class="col-sm-6 d-grid">
							{!! Form::submit('Delete',['class' =>'btn btn-danger'])!!}
						</div>
					</div>
				{!! Form::close()!!}
				<div class="row">
					<div class="col-md-12 d-grid mt-3">
						{!!Html::linkRoute('posts.index','<< See All The Posts ',array($post->id),array('class'=>'btn btn-outline-dark'))!!}
					</div>
				</div>
			</div>
		</div>
</div>
	
	
@endsection