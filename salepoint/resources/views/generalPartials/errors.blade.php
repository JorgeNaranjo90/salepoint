@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <p>You have errors!</p>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
    </div>
@endif