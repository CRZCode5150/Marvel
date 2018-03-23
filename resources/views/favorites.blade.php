@extends('master') @section('content')



    <?php dump($allFavorites); ?>

    <div class="row figure justify-content-center">


        @foreach($allFavorites as $singleComic)
                <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image1" src = "{{$singleComic['data']['results'][0]['images'][0]['path']}}/detail.{{$singleComic['data']['results'][0]['images'][0]['extension']}}">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">{{$singleComic['data']['results'][0]['title']}}</h3>
                            <br>
                            <h3 class="content-title">{{$singleComic['data']['results'][0]['description']}}</h3>
                            <br>
                            <h3 class="content-title">Price: {{$singleComic['data']['results'][0]['prices'][0]['price']}}</h3>
                            <br>
                            <h3 class="content-title">Characters: {{$singleComic['data']['results'][0]['characters']['items'][0]['name']}}, {{$singleComic['data']['results'][0]['characters']['items'][1]['name']}}</h3>
                            <br>
                            <h3 class="content-title">Creators: {{$singleComic['data']['results'][0]['creators']['items'][0]['name']}}, {{$singleComic['data']['results'][0]['creators']['items'][1]['name']}}, {{$singleComic['data']['results'][0]['creators']['items'][2]['name']}} </h3>
                            <br>
                            <input id="toggle-heart" type="checkbox" />
                            <label for="toggle-heart">❤</label>
                        </div>
                </div>
            @endforeach

    </div>


@endsection
