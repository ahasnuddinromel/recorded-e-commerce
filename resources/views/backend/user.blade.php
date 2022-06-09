@extends('backend.layouts.app')

@section('main')

<a class="add" href="{{route('user.create')}}">Add New User</a>
<table class="table" style="margin-top: 20px ">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Phone</th>
            <th scope="col">Photo</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($data as $item)

        <tr>
            <td scope="row">1</td>
            <td>{{$item -> name}} </td>
            <td>{{$item -> email}}</td>
            <td>{{$item -> phone_number}}</td>
            <td><img src="./assets/img/profile.jpg" alt="img" /></td>
            <td>
                <a class="btn color-1" href="{{route('user.show',  $item -> id)}}">View</a>
                <a class="btn color-2" href="{{route('user.edit', $item ->id)}}">Edit</a>
                <form action="{{route('user.destroy', $item ->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a class="btn color-3" href="{{route('user.destroy', $item ->id)}}">Delete</a>
                </form>

            </td>
        </tr>

        @endforeach

    </tbody>
</table>



@endsection
