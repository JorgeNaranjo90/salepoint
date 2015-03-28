@if($errors->any())
    <div class="alert alert-danger" roles="alert">
        <p>Please correct the errors</p>
        <ul>
            @foreach($errors->all() as $error )
                <li>
                    {{$error}}
                </li>
            @endforeach

        </ul>
    </div>
    @endif

