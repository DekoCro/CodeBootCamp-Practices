@extends('/questions/layout')

@section('head_css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<style>
    body {
        margin: 0 auto;
        padding: 1em 2em;
        max-width: 600px;
    }
</style>
@endsection

@section('content')

@include('questions/messages')

{!! Form::open(['route' => 'question.create'] , ['method' => 'post']) !!}

    <div class="form-group">
        {{ Form::label('title', 'Title of question', ['class' => 'control-label']) }}
        {{ Form::text('title', $q->title, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('text', 'Text', ['class' => 'control-label']) }}
        {{ Form::textarea('text', $q->text, ['class' => 'form-control']) }}
    </div>

    {{-- <div class="form-group">
        {{ Form::label('rating', 'Rating', ['class' => 'control-label']) }}
        {{ Form::number('rating', $q->rating, ['class' => 'form-control']) }}
    </div> --}}

    {{-- <div class="form-group">
        {{ Form::label('question_id', 'Question_id', ['class' => 'control-label']) }}
        {{ Form::select('question_id', $a, null, ['class' => 'form-control']) }}
    </div> --}}

    <div class="form-group">
        {{ Form::submit('Post a question', ['class' => 'btn btn-primary']) }}
    </div>

{!! Form::close() !!}


@endsection