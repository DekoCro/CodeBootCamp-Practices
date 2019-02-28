<div class="messages">
    
    @if(Session::has('success_message'))
        <div class="alert alert-success">
            {{ Session::get('success_message') }}
        </div>
    @endif

    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>
        @endforeach
    @endif

</div>