@extends('main')

@section('title', 'Create A Post')

@section('stylesheets')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
      tinymce.init({
        selector: 'textarea',
        plugins: 'link',
        manubar: false,
      });
    </script>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
                <h1 class="display-5 fw-bold">Create A New Post</h1>
                <hr>
                    <form action="{{route('posts.store') }}" method="POST" data-parsley-validate>
                        @csrf
                         <label for="title">Title:</label>
                         <input type="text" name="title" id="title" class="form-control" required>

                         <label for="slug">URL Slug:</label>
                         <input type="text" name="slug" id="slug" class="form-control" maxlength="255" minlength="5" required>

                        <label for="body">Post Content</label>
                        <textarea id="textarea" name="body" id="body" class="form-control" rows="5"></textarea><br>

                        <div class="d-grid gap-2 mt-1">
                        <button type="submit" class="btn btn-dark"> Create Post</button>
                        </div> 

                    </form>
                  
        </div>
    </div>

@endsection

@section('scrtips')
    <script type="text/javascript" src="js/parsley.min.js"></script>
@endsection