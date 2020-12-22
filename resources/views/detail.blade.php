@extends('template')
@section('title', $artikel->title)
    
@section('content')
    <div class="container">

        <div class="row">

      <!-- Blog Entries Column -->
            <div class="col-md-8">

          <!-- Blog Post -->
                <div class="card my-5">
                    <div class="card-body">
                        <img width="300" height="300" class="card-img-top" src="https://neilpatel.com/wp-content/uploads/2018/10/blog.jpg" alt="">
                        <h1 >{{$artikel->title}}</h1>
                        <p class="text-muted">Posted on {{$artikel->datetime}} by {{$artikel->author}}</p>
                        <p>{{ $artikel->content }}</p>  
                    </div>
                    <div class="card-footer">
                        <a href="{{route('blog.index')}}" class="btn btn-primary">Kembali</a>
                        <div class="float-right">
                            <a href="{{route('blog.edit', $id)}}" class="btn btn-warning">Edit</a>
                            <input type="submit" form="formDelete" role="button" class="btn btn-danger" value="Delete">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form action="{{route('blog.destroy', $id)}}" id="formDelete" method="POST">
        @method('DELETE')
        @csrf
    </form>
@endsection