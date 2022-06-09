@extends('backend.layouts.app')
@section('main')
        <!-- ==========Form Starts======== -->
<h1 class="form_heading">Single User</h1>

    <div class="card">
        <img src="#" alt="">
        <h2>{{$data -> name}} </h2>
        <table>
            <tr>
                <td>Name:</td>
                <td>{{$data -> name}}</td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>{{$data -> email}}</td>
            </tr>
            <tr>
                <td>Cell:</td>
                <td>{{$data -> phone_number}}</td>
            </tr>
            <tr>
                <td>Joining Date</td>
                <td>{{$data -> created_at->diffForHumans() }}</td>
            </tr>
        </table>
    </div>



@endsection

