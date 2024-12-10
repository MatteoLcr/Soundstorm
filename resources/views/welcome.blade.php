<x-layout>
    @if(session('success'))
    <div class="container mt-3">
        <div class="row justify-content-center text-center">
            <div class="col-6 alert alert-success">
                {{ session('success')}}
            </div>
        </div>
    </div>
    @endif

    <!-- header -->
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center headerImgContainer">
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/1320/400"class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Scoprio di più con SoundStorm Go+</h5>
                                <p>SoundStorm Go+ ti consente di ascoltare offline e senza pubblicità <br>un catalogo in costante crescita di oltre 320 milioni di tracce.</p>
                                <div>
                                    <button>Scopri di piu</button>
                                    <button>Comincia la prova gratuita</button>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/1320/400"class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Ascolta per primo le ultime novità musicali su SoundStorm</h5>
                                <p>Carica la tua prima traccia e dai inizio al tuo viaggio. <br>SoundCloud ti offre tutto lo spazio di cui hai bisogno per creare, <br>trovare fan ed entrare in contatto con altri artisti.</p>
                                <div>
                                    <button>Scopri di piu</button>
                                    <button>Comincia la prova gratuita</button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center my-5">
                <a class="btn btn-dark" href="{{route('track.create')}}">CARICA UNA TRACCIA</a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12 d-flex align-items-center my-3">
                <h3>ULTIMI BRANI INSERITI</h3>
            </div>
        </div>
        <div class="row justify-content-evenly">
            @foreach ($tracks as $track)
            <div class="col-12 col-md-2 d-flex justify-content-center my-2 cardQuadrata">
                <x-cardQuadrataWelcome :track="$track"></x-card>
            </div>
            @endforeach
        </div>
        
        <hr>
        <div class="row">
            <div class="col-12 d-flex align-items-center my-3">
                <h3>ARTISTI</h3>
            </div>
        </div>
    </div>









</x-layout>