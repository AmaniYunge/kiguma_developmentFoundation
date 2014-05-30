@extends('layout.admin')

@section('content')
{{ Form::open(array("url"=>url('admin/slideshow/add'),"class"=>"form-horizontal",'files' => true)) }}
@if(isset($emsg))
<div class="alert alert-danger alert-dismissable" >
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>{{ $emsg }}!</strong>
</div>
@endif

@if(isset($msg))
<div class="alert alert-success alert-dismissable" >
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>{{ $msg }}!</strong>
</div>
@endif
<div class='form-group'>
    {{ Form::label('name', 'Title',array('class'=>'control-label col-sm-4')) }}
    <div class='col-sm-8'>{{ Form::text('name','',array('class'=>'form-control','placeholder'=>'Title','required'=>'required')) }} </div>
</div>

<div class='form-group'>
    {{ Form::label('discr', 'Discription',array('class'=>'control-label col-sm-4')) }}
    <div class='col-sm-8'>{{ Form::textarea('discr','',array('class'=>'form-control','placeholder'=>'Discription','required'=>'required')) }} </div>
</div>
<div class='form-group'>
    {{ Form::label('discr', 'Add Image',array('class'=>'control-label col-sm-4')) }}
    <div class='col-sm-8'> <br>{{ Form::file('img1',array('class'=>'input-sm form-control','required'=>'required')) }} </div>
</div>
<div class='col-sm-12 form-group'>
    {{ Form::submit('Submit',array('class'=>'btn btn-primary','id'=>'submitqn')) }}

</div>
{{ Form::close() }}
@stop