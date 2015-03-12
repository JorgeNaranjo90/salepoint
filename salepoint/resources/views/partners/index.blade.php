@extends('app')

@section('content')
    <div class="container">
        <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">Partners</div>

                    <div class="panel-body">
                        <p>
                            <a class="btn btn-success" href="{{route('partner.create')}}" role="button">
                                New User
                            </a>
                        </p>
                        <table class="table table-striped">
                            <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Last Name</th>
                                <th>RFC</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Name City</th>
                                <th>Name State</th>
                                <th>Name Country</th>
                                <th>Actions</th>
                            </tr>

                            @foreach($partners as $partner)
                            <tr>
                                <td>{{ $partner->id }}</td>
                                <td> <img src="data:image/png;base64,{{ $partner->image }}" width="50px" height="50px"/></td>
                                <td>{{ $partner->name }} </td>
                                <td>{{ $partner->lastName}}</td>
                                <td> {{ $partner->rfc }}</td>
                                <td> {{ $partner->phone }}</td>
                                <td> {{ $partner->email }}</td>
                                <td> {{ $partner->city_name }}</td>
                                <td> {{ $partner->state_name }}</td>
                                <td> {{ $partner->country_name }}</td>
                                <!--<td>
                                    <a class="btn btn-success" href="{{route('partner.create')}}" role="button">
                                        Nuevo Usuario
                                    </a>
                                </td>-->
                                <td>
                                    <a href=""> Edit </a>
                                    <a href=""> Delete </a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        {!! $partners->render() !!}
                    </div>
            </div>
        </div>
    </div>
@endsection
