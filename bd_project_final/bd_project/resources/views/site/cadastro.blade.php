@extends('site.master.layout')

@section('content')
<section class="mb-5">

    <h3 class="mb-10 text-center">
        <a style="font-family: 'Ms Madi', cursive;">Cadastro</a>
    </h3>

    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <form method="POST" action="/cadastro">
                @csrf
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" name="first_name" id="form3Example1" class="form-control" />
                            <label class="form-label" for="form3Example1">Primeiro nome</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" name="last_name" id="form3Example2" class="form-control" />
                            <label class="form-label" for="form3Example2">Segundo nome</label>
                        </div>
                    </div>
                </div>

                <div class="form-outline mb-4">
                    <input type="email" name="email" id="form3Example3" class="form-control" />
                    <label class="form-label" for="form3Example3">Email</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="password" name="password" id="form3Example3" class="form-control" />
                    <label class="form-label" for="form3Example3">senha</label>
                </div>

                <button style="background-color: #4F4F4F" type="submit" class="btn btn-primary btn-block mb-12">
                    Cadastrar
                </button>

            </form>
        </div>
    </div>
</section>
@endsection