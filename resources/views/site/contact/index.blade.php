@extends('layouts.web')

@section('content')
    <div class="col-md-12">
        <h1 class="title text-center">Contato</h1>
    </div>

    <div class="col-12 col-md-6">

        <form action="{{ route('site.contact.form') }}" method="post">
            @csrf
            <div class="col-md-12 text-center">
                <h3 class="fs-5 text-light">Envie-nos um email</h3>
            </div>

            <div class="col-md p-2">
                <div class="form-floating">
                    <input type="text" class="form-control" id="name" name="name" required>
                    <label for="name">Nome</label>
                </div>
            </div>

            <div class="col-md p-2">
                <div class="form-floating">
                    <input type="email" class="form-control" id="email" name="email" required>
                    <label for="email">Email</label>
                </div>
            </div>

            <div class="col-md p-2">
                <div class="form-floating">
                    <input type="text" class="form-control" id="message" name="message" required>
                    <label for="message">Mensagem</label>
                </div>
            </div>

            <div class="mb-3 col-12 text-center">
                <button class="btn btn-secondary px-5" type="submit">Enviar</button>
            </div>
        </form>

    </div>
@endsection