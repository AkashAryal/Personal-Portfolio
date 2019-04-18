@extends('layouts.main')

@section('title', "Insert Text Creator")

@section('content')
    {!! Form::open(['route' => array('edit.id',)] !!}
    <!--label : html name, actual label --> 
        {{ Form::label('title', 'Title') }} 
        {{ Form::text('title', old('title'), array('placeholder'=>'Title', 'class'=>'form-control')) }}
        
        {{Form::label('picURL', 'Picture URL')}} 
        {{Form::text('picURL', old('picURL') , array('placeholder'=>'Picture URL', 'class'=>'form-control'))}}
        
        {{Form::label('postBody', 'Enter Post')}} 
        {{Form::textarea('postBody',  old('postBody') , array('placeholder'=>'Enter Post', 'class'=>'form-control'))}}

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