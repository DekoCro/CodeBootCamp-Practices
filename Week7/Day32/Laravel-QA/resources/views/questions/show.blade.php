@extends('questions/layout')

@section('content')

@auth
{!! Form::open(['route' => ['answer.store', $question->id], 'method' => 'post']) !!}
 
    <div class="form-group">
        <label for="">Your answer:</label><br>
        {!! Form::textarea('text', $answer->text, ['class' => 'form-control']) !!}
    </div>
 
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    </div>
 
{!! Form::close() !!}
@else 
    <p>You need to log in to submit answers!</p>
@endauth

<section id="banner" class="banner-sm">
    <div class="container">
        <h1>Questions</h1>
    </div>
</section>

<section id="question">
    <div class="container">
        <div class="question-left">
            <div class="user-avatar">
                <img class="img-fluid"
                     src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/user-male-icon.png"/>
            </div>
            <div class="user-name">Honza</div>
            <div class="user-stats">
                <div class="user-stat">
                    <span>3</span>
                    <label>responses</label>
                </div>
                <div class="user-stat">
                    <span>5</span>
                    <label>votes</label>
                </div>
            </div>

        </div>
        <div class="question-right">
            <h2>{{ $question->title }}</h2>
            {{ $question->text }}
        </div>
    </div>
</section>

<section id="answers">

    <div class="container">
        <h2>Answers</h2>

        @foreach ($question->answers as $answer)
            <div class="answer">
                <div class="answer-left">
                    <div class="user-avatar">
                        <img class="img-fluid"
                            src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/user-male-icon.png"/>
                    </div>
                    <div class="user-name"> {{$answer->user ? $answer->user->name : 'Unknown user' }}</div>
                    <div class="user-stats">
                        <div class="user-stat">
                            <span>3</span>
                            <label>responses</label>
                        </div>
                        <div class="user-stat">
                            <span>5</span>
                            <label>votes</label>
                        </div>
                    </div>
                </div>
                <div class="answer-right">
                    {{ $answer->text }}
                </div>
                @can('admin')
                    <button>Delete</button>
                @endcan
            </div>
        @endforeach

    </div>

</section>


@endsection