@extends('backend.layouts.app')
@section('main')


<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Phone</th>
            <th scope="col">Photo</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="row">1</td>
            <td>Galib Jaman</td>
            <td>gj.emon35@gmail.com</td>
            <td>+8801 785 215</td>
            <td><img src="./assets/img/profile.jpg" alt="img" /></td>
            <td><p class="user_inactive">Inactive</p></td>
        </tr>
        <tr>
            <td scope="row">1</td>
            <td>Galib Jaman</td>
            <td>gj.emon35@gmail.com</td>
            <td>+8801 785 215</td>
            <td><img src="./assets/img/profile.jpg" alt="img" /></td>
            <td><p class="user_active">Active</p></td>
        </tr>
        <tr>
            <td scope="row">1</td>
            <td>Galib Jaman</td>
            <td>gj.emon35@gmail.com</td>
            <td>+8801 785 215</td>
            <td><img src="./assets/img/profile.jpg" alt="img" /></td>
            <td><p class="user_inactive">Inactive</p></td>
        </tr>
        <tr>
            <td scope="row">1</td>
            <td>Galib Jaman</td>
            <td>gj.emon35@gmail.com</td>
            <td>+8801 785 215</td>
            <td><img src="./assets/img/profile.jpg" alt="img" /></td>
            <td><p class="user_active">Active</p></td>
        </tr>
    </tbody>
</table>


@endsection

