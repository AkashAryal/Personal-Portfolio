@extends('layouts.main')

@section('title', "Insert Text Creator")

@section('content')
  <!--change edit.id. its wrong route. have to create new one-->
    {!! Form::open(['route' => ['update.id',$id] ]) !!}
    <!--label : html name, actual label -->
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', $title, array( 'class'=>'form-control')) }}

        {{Form::label('picURL', 'Picture URL')}}
        {{Form::text('picURL',$picURL , array( 'class'=>'form-control'))}}

        {{Form::label('postBody', 'Enter Post')}}
        {{Form::textarea('postBody',  $postBody , array('class'=>'form-control'))}}

        {{Form::submit('Submit', array('class'=>'btn btn-primary'))}}
    {!! Form::close() !!}
    @if(count($errors))
    <div class="form-group">
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
@endsection
