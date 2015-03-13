<table class="table table-striped">
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->full_name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{route('settings.users.edit', $user->id)}}"><i class="fa fa-pencil fa-2x"></i></a>
                <a href=""><i class="fa fa-trash fa-2x"></i></a>
            </td>
        </tr>
    @endforeach
</table>