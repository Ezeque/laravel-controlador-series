<main class="mb-5">
    @if(session('msg'))
    <div class="alert alert-success" role="alert">
        {{session('msg')}}
    </div>
    @elseif(session('msg-erro'))
    <div class="alert alert-danger" role="alert">
        {{session('msg-erro')}}
    </div>
    @elseif(session('msg-delete'))
    <div class="alert alert-success" role="alert">
        {{session('msg-delete')}}
    </div>
    @endif
</main>