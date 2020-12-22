@extends('template')
@section('title','Membuat Artikel Baru')
    
@section('content')
    <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Buat Artikel Baru</h1>

        <!-- Blog Post -->
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{route ('blog.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" name="title" id="title" value="" required="required" />
                    </div>
    
                    <div class="form-group">
                        <label for="author">Author</label>
                        <input type="text" class="form-control" name="author" id="author" value="" required="required" />
                    </div>
    
                    <div class="form-group">
                        <label for="content">Konten</label>
                        <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Buat">
                </form>
            </div>

        </div>

      </div>



    </div>
    <!-- /.row -->

  </div>
@endsection