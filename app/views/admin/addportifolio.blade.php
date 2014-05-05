@extends('layout.admin')

@section('content')
<!--response messages-->
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
{{ Form::open(array("url"=>route('addportifolio1'),"class"=>"form-horizontal" ,'files' => true)) }}
<div class='form-group'>
    {{ Form::label('name', 'Portifolio Title',array('class'=>'control-label col-sm-4')) }}
    <div class='col-sm-8'>{{ Form::text('name','',array('class'=>'form-control','placeholder'=>'Title','required'=>'required')) }} </div>
</div>

<div class='form-group'>
    {{ Form::label('discr', 'Discription',array('class'=>'control-label col-sm-4')) }}
    <div class='col-sm-8'>{{ Form::textarea('discr','',array('class'=>'form-control','placeholder'=>'Discription','required'=>'required')) }} </div>
</div>
<span class="help-block text-center">**choose at least one image and maximum of three images</span>
<div class='form-group'>
    {{ Form::label('img1', 'Image',array('class'=>'control-label col-sm-4')) }}
    <div class='col-sm-8'>{{ Form::file('img1',array('class'=>'form-control','required'=>'required')) }} </div>
</div>
<div class='col-sm-12 form-group text-center'>
    {{ Form::submit('Save and add Images',array('class'=>'btn btn-primary','id'=>'submitqn')) }}

</div>
{{ Form::close() }}
<script>
    $(document).ready(function(){
        $("#category").change(function(){
            var url = "<?php echo url("admin/subaddcat") ?>/";
            url+= $(this).val();
            $("#subcats").html("<i class='fa fa-spinner fa-spin'></i> wait...");
            $("#subcats").load(url);
        })
    });
</script>
@stop
