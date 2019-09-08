@extends('layouts.main')

@section('title', "About Me - Akash Aryal")

@section('navBar')

@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-xs-12 py-4">
          <h1>Akash Aryal</h1>
        </div>
    </div>

    <div class="row">
      <div class="col-md-5 col-xs-12">
        <img class="img-fluid img-responsive" style="max-height: 20rem" src="{{ asset('AkashAryal.jpg') }}">
      </div>
      <div class="col-md-7 col-xs-12 ">
        <p>Hello! My name is Akash Aryal. I am currently a freshmen at Cornell University majoring in CS in the college of Arts and Science. I love
           embarking in fun programming projects whenever I have time (like this one!). I really enjoy the creative and impactful nature of
           development. In all my projects I aim to create products that have impact and are useful in everyday life.<BR><BR>
           In my free time I enjoy reading books and playing tennis. Ah, I'm also a big fan of anime, manga, light novels :p.</p>
      </div>
    </div>
</div>
@endsection
