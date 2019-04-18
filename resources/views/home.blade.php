@extends('layouts.main') 
@section('title', "Akash's Portfolio") 
@section('content')

<div class="container-fluid" style="background-color:white;">
    <div class="container">
        @if(session("test"))
            <p>jjj{{ session('test') }}</p>
        @endif

        <!--Reason why session is uded above but just var name below is because above is return redirect (post)
        while below is return view() (get)-->
            @isset($KamiSamaPosts)
            <?php $postCounter=0; $first=true;?>
            @foreach($KamiSamaPosts as $post)
                <?php 
                    if($postCounter==0){
                        echo '<div class="row">';
                    }
                
                ?>
                
                    <div class="col-md-4 col-xs-12 py-4">
                        <center>
                            <div class="card">
                                <img class="card-img-top img-fluid img-responsive" style="max-height: 17rem" src="{{$post->picURL}}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text" style="text-align:left; font-weight:900">{{$post->title}}</p>
                                <hr></hr>
                                <p style="text-align:left;">{{$post->postBody}}</p>
                                <hr></hr>
                                <!-- ADD ID HERE FOR EDIT DELETE UPDATE ETC...-->
                               <!-- <a href="{{ route('delete.id', ['id'=>$post->id]) }}">-->
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <form action="{{ route('delete.id', ['id'=>$post->id]) }}" method="POST">
                                            <input class="btn btn-default" type="submit" value="Delete" /> {!! csrf_field() !!}
                                        </form>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                    <a href="{{ route('edit.id', ['id'=>$post->id]) }}">Edit</a>
                                    </div>
                                </div>
                                    
                                </div>
                            </div>
                        </center>
                    </div>
                
                <?php 
                    if($postCounter==3){
                        echo '</div>';
                        $postCounter=0;
                        $first=false;
                    }else{
                        $postCounter++;
                    }
                
                ?>
            @endforeach
            @endisset
                       

    </div>

</div>

</div>
</div>
@endsection


</html>