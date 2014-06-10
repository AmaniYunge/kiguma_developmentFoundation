@extends('layout.admin')

@section('content')
<h3>Manage Resources</h3>
@if($resources->count() == 0)
<h3>There Are no Resource</h3>
@else
<table class="table table-responsive">
    <tr>
        <th>#</th>
        <th class="col-sm-3">
            Category
        </th>
        <th>
            Tittle
        </th>

        <th>
            Description

        </th><th>
            Action
        </th>

    </tr>
    <?php
    $count=1
    ?>
    @foreach($resources as $us)
    <tr>
        <td>{{ $count++ }}</td>
        <td>{{ $us->type }} </td>
        <td>{{ $us->title }} </td>
        <td>{{ $us->discr }} </td>
        <td id='{{ $us->id }}' >
            <br><a href="#b" title="delete Resource" class="deleteresources"><i class="fa fa-trash-o text-danger"></i> delete</a>
        </td>


        @endforeach


</table>
@endif
@stop
