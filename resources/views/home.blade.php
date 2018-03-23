@extends('master') @section('content')

<?php dump($comics); ?>

<div class="row justify-content-center">
    <div class="col-6 search-form text-center">
        <h1 class="A2">Featured Heroes</h1>
    </div>
</div>
<div class="A4 row">
    <div class="col-3">
        <h1 class="backrndshdw1">Daredevil</h1>
    </div>
    <div class="col-3">
        <div class="content">
            <a href="/comicdetails/66273/" target="_blank">
                <div class="content-overlay"></div>
                <img class="content-image" src="http://i.annihil.us/u/prod/marvel/i/mg/9/b0/5a8482fe91be2.jpg"></a>
                <div class="content-details fadeIn-bottom">
                    <h3 class="content-title">Daredevil (2015) #599</h3>
                    <p class="content-text">While Mayor Fisk continues his crusade against vigilantes, a new player joins the resistance against him…the psychopathic murder artist Muse! Can Daredevil deal with assaults from both sides of this conflict?</p>
                    <input id="toggle-heart" type="checkbox"/>
                    <label class="heart" data-comic-id="66273" data-comic-name="Daredevil (2015) #599" for="toggle-heart">❤</label>
                </div>
            </a>
        </div>
    </div>

    <div class="col-3">
        <div class="content">
            <a href="/comicdetails/66276/" target="_blank">
                <div class="content-overlay"></div>
                <img class="content-image" src="http://i.annihil.us/u/prod/marvel/i/mg/c/30/5a84830be6acd.jpg">
                <div class="content-details fadeIn-bottom">
                    <h3 class="content-title">Defenders (2017) #10</h3>
                    <p class="content-text">Daredevil takes on the underworld single-handed as KINGPINS OF NEW YORK reaches a dramatic crescendo!</p>
                    <input class="heart" data-comic-id="66276" data-comic-name="Defenders (2017) #10" id="toggle-heart1" type="checkbox" />
                    <label for="toggle-heart1">❤</label>
                </div>
            </a>
        </div>
    </div>
    <div class="col-3">
        <div class="content">
                <div class="content-overlay"></div>
                <a href="/comicdetails/66092"><img class="content-image" src="http://i.annihil.us/u/prod/marvel/i/mg/f/80/5a72446d12210.jpg">
                <div class="content-details fadeIn-bottom">
                    <h3 class="content-title">Daredevil (2015) #598</h3>
                    <p class="content-text">While Mayor Fisk continues his crusade against vigilantes, a new player joins the resistance against him…the psychopathic murder artist Muse! Can Daredevil deal with assaults from both sides of this conflict?</p>
                    <input class="heart" data-comic-id="66092" data-comic-name="Daredevil (2015) #598" id="toggle-heart2" type="checkbox" />
                    <label for="toggle-heart2">❤</label>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="A5 row">
    <div class="col-3">
        <h1 class="backrndshdw1">Galactus</h1>
    </div>
    <div class="col-3">
        <div class="content">
                <div class="content-overlay"></div>
                <a href="/comicdetails/61712"><img class="content-image" src="http://i.annihil.us/u/prod/marvel/i/mg/b/e0/5a8de8a2211af.jpg">
                <div class="content-details fadeIn-bottom">
                    <h3 class="content-title">Thanos (2016) #16</h3>
                    <p class="content-text">The secret origins of King Thanos’ right-hand man, the cosmic spirit of vengeance, Ghost Rider! Just who IS this madman and how did he become allies with the most evil man in the Universe?</p>
                    <input class="heart" data-comic-id="61712" data-comic-name="Thanos (2016) #16" id="toggle-heart3" type="checkbox" />
                    <label for="toggle-heart3">❤</label>
                </div>
            </a>
        </div>
    </div>
    <div class="col-3">
        <div class="content">
                <div class="content-overlay"></div>
                <a href="/comicdetails/60724"><img class="content-image" src="http://i.annihil.us/u/prod/marvel/i/mg/6/00/5a6b442ae6380.jpg">
                <div class="content-details fadeIn-bottom">
                    <h3 class="content-title">Moon Girl and Devil Dinosaur (2015) #26</h3>
                    <p class="content-text">The Fantastic Four may be no more, but no one told GALACTUS! The former Devourer of Worlds and his former herald THE SILVER SURFER have returned to Earth once more, but do they come as friends or foes?!</p>
                    <input class="heart" data-comic-id="60724" data-comic-name="Moon Girl and Devil Dinosaur (2015) #26" id="toggle-heart4" type="checkbox" />
                    <label for="toggle-heart4">❤</label>
                </div>
            </a>
        </div>
    </div>
    <div class="col-3">
        <div class="content">
                <div class="content-overlay"></div>
                <a href="/comicdetails/64221"><img class="content-image" src="http://i.annihil.us/u/prod/marvel/i/mg/9/b0/597bbd98b1a80.jpg">
                <div class="content-details fadeIn-bottom">
                    <h3 class="content-title">Ultimates 2 (2016) #100</h3>
                    <p class="content-text">A double-sized issue celebrating ULTIMATES #100! Eternity is free - but can even he stand against the might of the First Firmament? Or does the embodiment of everything need help - from Outside? Featuring the Ultimates and - the Ultimates?</p>
                    <input class="heart" data-comic-id="64221" data-comic-name="Ultimates 2 (2016) #100" id="toggle-heart5" type="checkbox" />
                    <label for="toggle-heart5">❤</label>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="A6 row">
    <div class="col-3">
        <h1 class="backrndshdw1">Thor</h1>
    </div>
    <div class="col-3">
        <div class="content">
                <div class="content-overlay"></div>
                <a href="/comicdetails/66546"><img class="content-image" src="http://i.annihil.us/u/prod/marvel/i/mg/8/c0/5aa960c4c5e01.jpg">
                <div class="content-details fadeIn-bottom">
                    <h3 class="content-title">Mighty Thor (2015) #705</h3>
                    <p class="content-text">The epic showdown years in the making finally explodes across the heavens. Thor battles the unstoppable Mangog, with the fate of all Asgardia hanging in the balance.</p>
                    <input class="heart" data-comic-id="66546" data-comic-name="Mighty Thor (2015) #705" id="toggle-heart6" type="checkbox" />
                    <label for="toggle-heart6">❤</label>
                </div>
            </a>
        </div>
    </div>
    <div class="col-3">
        <div class="content">
                <div class="content-overlay"></div>
                <a href="/comicdetails/66282"><img class="content-image" src="http://i.annihil.us/u/prod/marvel/i/mg/c/03/5a8484e193317.jpg">
                <div class="content-details fadeIn-bottom">
                    <h3 class="content-title">Incredible Hulk (2017) #713</h3>
                    <p class="content-text">RETURN TO PLANET HULK PART 5 HULK has reached the final level of THE GAUNTLET! The freedom of the DOKA’ABI CLAN rests on his shoulders alone…Who is the true WORLD BREAKER?</p>
                    <input class="heart" data-comic-id="66282" data-comic-name="Incredible Hulk (2017) #713" id="toggle-heart7" type="checkbox" />
                    <label for="toggle-heart7">❤</label>
                </div>
            </a>
        </div>
    </div>
    <div class="col-3">
        <div class="content">
                <div class="content-overlay"></div>
                <a href="/comicdetails/65909"><img class="content-image" src="http://i.annihil.us/u/prod/marvel/i/mg/9/a0/5a68ecd74a274.jpg">
                <div class="content-details fadeIn-bottom">
                    <h3 class="content-title">Incredible Hulk (2017) #712</h3>
                    <p class="content-text">RETURN TO PLANET HULK Part 4. The Hulk enters the next stage of barbaric trials known as the Gauntlet…Amadeus</p>
                    <input class="heart" data-comic-id="65909" data-comic-name="Incredible Hulk (2017) #712" id="toggle-heart8" type="checkbox" />
                    <label for="toggle-heart8">❤</label>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script>
$( document ).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        method: 'get',
        url: '/get-favorited-comics'
    })
    .done(function(response) {

        $('.heart').each(function() {
            var comicId = $(this).attr('data-comic-id');

            for (var i = 0; i < response.length; i++) {
                if (comicId == response[i].comic_id) {
                    $(this).prop('checked', true);
                }
            }
        });
    });


    $(".heart").on("click", function() {
        console.log('hello????');
        var comicId = $(this).attr('data-comic-id');
        var comicName = $(this).attr('data-comic-name');

        var savedComic = {
            id: comicId,
            name: comicName
        };

        $.ajax({
            method: 'POST',
            url: '/save-favorite',
            data: savedComic
        })
        .done(function(response) {
            console.log(response);
        });
    });
});
</script>
@endsection
