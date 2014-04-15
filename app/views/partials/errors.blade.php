@if($errors->all())
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        @foreach($errors->all('<li>:message</li>') as $message)
            {{ $message }}
        @endforeach
    </div>
@endif
