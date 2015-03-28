@if($errors->any())
    <div class="alert alert-warning" role="alert">...</div>
    <p> Please correct the errors: </p>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

@endif