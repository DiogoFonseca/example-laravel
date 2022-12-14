@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Perguntas') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($questions as $question)
                        <a href="question/{{ $question->id }}" >{{ $question->question_text }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
