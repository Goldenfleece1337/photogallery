@extends ('layout')
@section ('content')
<link href="/css/gallery.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container-fluid" style="margin-top:20px;">
<h1 style="text-align:center;color:hotpink;">Upload a photo to the gallery </h1><br>
<div class="row">


<div class="main-first"> 
        {{ csrf_field() }}
    Create
    {!! Form::open (array('action' => 'PhotoController@store', 'enctype' =>'multipart/form-data'))!!}

    {!! form::label('title','Title')!!}
    {!! form::text('title','', $attributes= ['placeholder'=> 'Photo title', 'name'=> 'title'])!!}

    {!! form::label('description','Description')!!}
    {!! form::text('description','', $attributes= ['placeholder'=> 'Photo Description', 'name'=> 'description'])!!}

    {!! form::label('description','Location')!!}
    {!! form::text('location','', $attributes= ['placeholder'=> 'Photo location', 'name'=> 'location'])!!}

    {!! form::label('image','Photo')!!}
    {!! form::file('image')!!}

    <input type="hidden" name="gallery_id" value="{{$gallery_id}}">
    {!! Form::submit ('submit', $attributes=['class'=> 'button'])!!}
    {!! Form::close ()!!}
</div>
</div>
@endsection
 