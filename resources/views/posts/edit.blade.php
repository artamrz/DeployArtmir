@extends('main') 

@section('title','Edit Post')

@section('content')
     <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
                <h1 class="display-5 fw-bold">Edit Your Post</h1>
                <hr>
                    <form action="{{ route('posts.update', $post->id) }}" method="PUT" data-parsley-validate>
                        @csrf
                         <label for="title">Title:</label>
                         <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}" required>

                         <label for="slug">URL Slug:</label>
                         <input type="text" name="slug" id="slug" class="form-control" maxlength="255" minlength="5" value="{{ $post->slug }}" required>

                        <label for="body">Post Content</label>
                        <input type="textarea" name="body" id="body" class="form-control" value="{{ $post->body }}"required><br>

                        <div class="col-md-4 mt-4">
                            <div class="card card-body bg-light">
                                <dl class="dl-horizontal">
                                    <dt>Created At:</dt>
                                    <dd>{{date('M j Y h:i a',strtotime($post->created_at))}}</dd>
                                </dl>
                                <dl class="dl-horizontal">
                                    <dt>Last Updated:</dt>
                                    <dd>{{date('M j Y h:i a',strtotime($post->updated_at))}}</dd>
                                </dl>
                                <hr>
                                <div class="row">
                                     <div class="col-sm-6 d-grid">
                                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-outline-dark">Cancel</a>
                                     </div>
                                     <div class="col-sm-6 d-grid"> 
                                         <button type="submit" class="btn btn-dark"> Save Post</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                  
        </div>
    </div>

@endsection