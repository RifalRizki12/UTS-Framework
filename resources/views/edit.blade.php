@extends('template')
@section('title','Edit Artikel')
    
@section('content')
    <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Edit Artikel</h1>

        <!-- Blog Post -->
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{route ('blog.update', $id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{$artikel->title}}" required="required" />
                    </div>
    
                    <div class="form-group">
                        <label for="author">Author</label>
                        <input type="text" class="form-control" name="author" id="author" value="{{$artikel->author}}" required="required" />
                    </div>
    
                    <div class="form-group">
                        <label for="content">Konten</label>
                        <textarea class="form-control" name="content" id="content" cols="30" rows="10">{{$artikel->content}}</textarea>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </form>
            </div>

        </div>
      </div>
    </div>
    <!-- /.row -->

  </div>
@endsection