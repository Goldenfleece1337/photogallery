@extends ('layout')
@section ('content')
<link href="/css/gallery.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container-fluid" style="margin-top:20px;">
<h1 style="text-align:center;color:hotpink;">Photo Gallery </h1><br>





@if(Session::has('message'))
<div class="alert alert-info">
    {{Session::get('message')}}
</div>
@endif; 


<div class="gallery">
  
  
    <?php foreach($galleries as $gallery) : ?>
  <a href="/gallery/show/{{ $gallery->id}}">
    <img src="/images/{{ $gallery->cover_image}}" alt="Cinque Terre" width="300" height="200">
  </a>
  <div class="desc">{{$gallery->name}}</div>
  <p> {{$gallery->description}}  </p>
  <?php endforeach; ?>
</div><hr noshade style="margin-top:-20px;">



@endsection
