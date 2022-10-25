@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form action="{{ route('question.save') }}" method="POST">
                    @csrf
                    <div class="card-header">{{ __('Cadastrar nova pergunta') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <input class="form-control" required type="text" placeholder="Enunciado" name="question_text" />
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" type="submit">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
