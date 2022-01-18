@extends('layouts.web')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="">
                    <label for="cpf">CPF</label>
                    <input class="form-control" type="number" name="cpf" id="cpf">
                    <button class="my-5 btn btn-info" type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
