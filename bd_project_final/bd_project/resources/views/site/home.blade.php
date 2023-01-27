@extends('site.master.layout')

@section('content')

<main class="mt-5">
    <div class="container">

        <section>
            <div class="row">
                <div class="col-md-12 gx-6 mb-8">
                    <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                        <img src="https://images.adsttc.com/media/images/6013/8f05/f91c/8125/1500/02d2/large_jpg/Roby_Salao_Beleza-3774.jpg?1611894525"
                            class="img-fluid" />
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-center">
            <h4 class="mb-8">Serviços</h4>

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-12">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGKWthVzAb-9-IJIqLjkWeU_5omQVp1aUizywuWoeKe6xAn5n7Izi1Qw_k_P-ujl0aKA0&usqp=CAU"
                                class="img-fluid" />
                            <a href="{{route('site.agendamento')}}">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Corte de Cabelo</h5>
                            <p class="card-text">
                                R$ 50,00
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-12">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyx06heyhdDs41zqv1E4LXEk8ViWKRKnO-BCzOmRIvKJuS1Ox-xBXtKWnwvRIL9ELREjE&usqp=CAU"
                                class="img-fluid" />
                            <a href="{{route('site.agendamento')}}">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Escova</h5>
                            <p class="card-text">
                                R$ 100,00
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-12">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWfzJW0zU6mwj90uQU_oLfsUxwv2HdCmkGfg&usqp=CAU"
                                class="img-fluid" />
                            <a href="{{route('site.agendamento')}}">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Penteado</h5>
                            <p class="card-text">
                                R$ 200,00

                            </p>
                        </div>
                    </div>
                </div>
                <a class="btn text-white" style="background-color: #4F4F4F;" dusk = "init"  href="{{route('site.agendamento')}}"
                    role="button">
                    <i class="mb-1"></i>
                    Agendamento
                </a>
            </div>
        </section>

    </div>
</main>

@endsection