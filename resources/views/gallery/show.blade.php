@extends ('layout')
@section ('content')

<link href="/css/gallery.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container-fluid" style="margin-top:20px;">
    <a href="/">Back </a>
<h1 style="text-align:center;color:hotpink;"> {{$gallery->name}} </h1>
<p> {{$gallery->description}}  </p>
<a class="button" href="/photo/create/{{$gallery->id}}"> Upload photo </a>
<br>


@if(Session::has('message'))
<div class="alert alert-info">
    {{Session::get('message')}}
</div>
@endif; 


<div class="gallery">
  
<?php foreach ($photos as $photo) : ?>
 <div class="column">
     <a href="/photo/details/{{$photo->id}}">
         <img class="thumbnail" src="/images/{{$photo->image}}">
     </a>
     <h5>{{$photo->title}} </h5>
     <p> {{$photo->description}} </p>
 </div>
 @endforeach 

</div><hr noshade style="margin-top:-20px;">



@endsection
