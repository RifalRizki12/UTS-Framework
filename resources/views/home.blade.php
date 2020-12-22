@extends('template')
@section('title','Home Blog')
    
@section('content')
    {{-- <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-15">

        <h1 class="my-4">Semua Artikel</h1>

        <!-- Blog Post -->
        @foreach ($data as $artikel)
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title">{{$artikel->title}}</h2>
                    <p class="card-text">{{substr($artikel->content, 0, 300)}}</p>
                    <a href="{{route('blog.show', $loop->index)}}" class="btn btn-primary">Read More &rarr;</a>
                </div>
                <div class="card-footer text-muted">
                    Posted on {{$artikel->datetime}} by {{$artikel->author}}
                </div>
          </div>
        @endforeach

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

      </div>

    </div>
    <!-- /.row -->

  </div> --}}

  <!-- Page Content -->
<div class="container">

  <!-- Page Heading -->
  <h1 class="my-4">Kumpulan Artikel</h1>

  <div class="row">
    @foreach ($data as $artikel)
    <div class="col-lg-4 mb-4">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="https://neilpatel.com/wp-content/uploads/2018/10/blog.jpg" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="{{route('blog.show', $loop->index)}}">{{$artikel->title}}</a>
          </h4>
          <p class="card-text">{{substr($artikel->content, 0, 100)}}</p>
          <p class="text-muted">Posted on {{$artikel->datetime}}, by {{$artikel->author}}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
@endsection