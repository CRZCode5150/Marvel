@extends('master') @section('content')
<div class="row figure justify-content-center">



        @if(!empty($comics1))

            <div class="content">
                    <div class="content-overlay"></div>
                    <img class="content-image1" src = "{{$comics1['data']['results'][0]['images'][0]['path']}}/detail.{{$comics1['data']['results'][0]['images'][0]['extension']}}">
                    <div class="content-details fadeIn-bottom">
                        <h3 class="content-title">{{$comics1['data']['results'][0]['title']}}</h3>
                        <br>
                        <h3 class="content-title">{{$comics1['data']['results'][0]['description']}}</h3>
                        <br>
                        <h3 class="content-title">Price: {{$comics1['data']['results'][0]['prices'][0]['price']}}</h3>
                        <br>
                        <h3 class="content-title">Characters: {{$comics1['data']['results'][0]['characters']['items'][0]['name']}}, {{$comics1['data']['results'][0]['characters']['items'][1]['name']}}</h3>
                        <br>
                        <h3 class="content-title">Creators: {{$comics1['data']['results'][0]['creators']['items'][0]['name']}}, {{$comics1['data']['results'][0]['creators']['items'][1]['name']}}, {{$comics1['data']['results'][0]['creators']['items'][2]['name']}} </h3>
                        <br>
                        <input id="toggle-heart" type="checkbox" />
                        <label for="toggle-heart">❤</label>
                    </div>
                </a>
            </div>


        @endif
</div>

@endsection
