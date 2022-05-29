@extends('layouts.app')

@section('content')


	<!-- Start sidebar Section -->
    <section class="sidebar">
        <div class="container">
            <a href="#"
                ><h1 class="logo">Zeye<span>Corp</span></h1></a
            >
            <a href="#" class="add"
                >Add new user<i class="fa-solid fa-user-plus"></i
            ></a>
            <div class="menu">
                <a href="table.html" class="menu-item menu-active"
                    ><i class="fa-solid fa-table-columns"></i>Table</a
                >
                <a href="dashboard.html" class="menu-item"
                    ><i class="fa-solid fa-chart-pie"></i>Dashboard</a
                >
                <a href="#" class="menu-item"
                    ><i class="fa-solid fa-clipboard"></i>History</a
                >
                <a href="#" class="menu-item setting"
                    ><i class="fa-solid fa-gear"></i>Settings</a
                >
            </div>
        </div>
    </section>
    <!-- End sidebar Section -->
    <!-- Start Navigation Section -->
    <section class="nav">
        <div class="container">
            <div class="search-box">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" name="search" placeholder="Search.." />
            </div>
            <div class="nav-right">
                <i class="fa-solid fa-bell"></i>
                <a href="#"
                    ><img class="profile" src="./assets/img/profile.jpg" alt="profile"/></a>
                <p class="text-sec">
                    Galib Jaman<i class="fa-solid fa-angle-down" id="down"></i>
                </p>

                <a href="{{ route('logout') }}" class="logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit()"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                    @csrf
                </form>
               
            </div>
            
        </div>
    </section>
    <!-- End Navigation Section -->

    <!-- Start Main Section -->
    <section class="main_content">
        <div class="container">
            <div class="info_box">
                <div class="info_single">
                    <div class="info-icon"><i class="fa-solid fa-user-group"></i></div>
                    <div class="info_text">
                        <h1 class="number">2,612</h1>
                        <p>Active users</p>
                    </div>
                </div>
                <div class="info_single info2">
                    <div class="info-icon">
                        <i class="fa-solid fa-apple-whole"></i>
                    </div>
                    <div class="info_text">
                        <h1 class="number">$256,12</h1>
                        <p>Total investments</p>
                    </div>
                </div>
                <div class="info_single info3">
                    <div class="info-icon"><i class="fa-solid fa-leaf"></i></div>
                    <div class="info_text">
                        <h1 class="number">1,251,230</h1>
                        <p>Trees planted</p>
                    </div>
                </div>
                <div class="info_single info4">
                    <div class="info-icon">
                        <i class="fa-solid fa-handshake-angle"></i>
                    </div>
                    <div class="info_text">
                        <h1 class="number">$362,612</h1>
                        <p>Donated</p>
                    </div>
                </div>
            </div>
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
        </div>
    </section>
    <!-- End Main Section -->








{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
