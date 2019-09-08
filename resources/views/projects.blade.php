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
                              @if(strlen($post->picURL)>0)
                                <img class="card-img-top img-fluid img-responsive" style="max-height: 20rem" src="{{$post->picURL}}" alt="Card image cap">
                              @endif
                                <div class="card-body">
                                    <p class="card-text" style="text-align:left; font-weight:900; font-size:25">{{$post->title}}</p>
                                <hr></hr>
                                <p style="text-align:left; white-space: pre-line;">{{$post->postBody}}</p>

                                <!-- ADD ID HERE FOR EDIT DELETE UPDATE ETC...-->
                               <!-- <a href="{{ route('delete.id', ['id'=>$post->id]) }}">-->


                                </div>
                            </div>
                        </center>
                    </div>

                <?php
                    if($postCounter==2){
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
