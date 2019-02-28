@extends('/questions/layout')

@section('content')

<section id="banner">
    <div class="container">
        <h1>Questions</h1>
    </div>
</section>

<section id="questions">
    <div class="container">

        @foreach($all_questions_ordered as $question)
        <div class="question">
            <div class="question-left">
                <div class="question-stat">
                <span>{{ $question->answer->count() }}</span>
                    <label>responses</label>
                </div>
                <div class="question-stat">
                    <span>5</span>
                    <label>votes</label>
                </div>
            </div>
            <div class="question-right">
                <div class="question-name">
                    <a href="{{ route('question.id' , /*['id' => $question->id ]  or if there is only one argument then witouth array*/ $question->id ) }}">{{ $question->title }}</a>
                </div>
                <div class="question-info">
                    asked at {{ $question->created_at }} by <a href="">slavo</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</section>



@endsection