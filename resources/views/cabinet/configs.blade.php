<div class="col">
    @foreach($errors->all() as $error)
        <li class="alert col-4 mx-auto mt-1 alert-danger">{{$error}}</li>
    @endforeach
    <div class="configs h-100 mt-3 mb-2">
    </div>
</div>
