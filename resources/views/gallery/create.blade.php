@extends ('layout')
@section ('content')
<link href="/css/gallery.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container-fluid" style="margin-top:20px;">
<h1 style="text-align:center;color:hotpink;">Create a gallery and start uploading </h1><br>
<div class="row">


<div class="main-first"> 
        {{ csrf_field() }}
    Create
    {!! Form::open (array('action' => 'GalleryController@store', 'enctype' =>'multipart/form-data'))!!}

    {!! form::label('name','Name')!!}
    {!! form::text('name','', $attributes= ['placeholder'=> 'Gallery Name', 'name'=> 'name'])!!}

    {!! form::label('description','Description')!!}
    {!! form::text('description','', $attributes= ['placeholder'=> 'Gallery Description', 'name'=> 'description'])!!}

    {!! form::label('cover_image','Cover Image')!!}
    {!! form::file('cover_image')!!}
    {!! Form::submit ('submit', $attributes=['class'=> 'button'])!!}
    {!! Form::close ()!!}
</div>
</div>
@endsection
 