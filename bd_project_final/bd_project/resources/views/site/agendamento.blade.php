@extends('site.master.layout')

@section('content')
<section class="mb-5">
    <h3 class="mb-10 text-center">
        <a style="font-family: 'Ms Madi', cursive;">Agendamento</a>
    </h3>

    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <form method="POST" action="/agendamento">
            @csrf
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input name="first_name" type="text" id="form3Example1" class="form-control" />
                            <label class="form-label" for="form3Example1">Primeiro nome</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <input name="last_name" type="text" id="form3Example2" class="form-control" />
                            <label class="form-label" for="form3Example2">Segundo nome</label>
                        </div>
                    </div>
                </div>

                <div class="form-outline mb-4">
                    <input name="email" type="email" id="form3Example3" class="form-control" />
                    <label class="form-label" for="form3Example3">Email</label>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input name="data" type="text" id="form3Example1" class="form-control" />
                            <label class="form-label" for="form3Example1">Data</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <input name="horario" type="text" id="form3Example2" class="form-control" />
                            <label class="form-label" for="form3Example2">Horário</label>
                        </div>
                    </div>
                </div>
                <div class="form-outline mb-4">
                    <input name="servico" type="text" id="form3Example3" class="form-control" />
                    <label class="form-label" for="form3Example3">Serviço</label>
                </div>

                <button style="background-color: #4F4F4F" type="submit" class="btn btn-primary btn-block mb-12">
                    Agendar
                </button>

            </form>
        </div>
    </div>
</section>
@endsection