	@extends('backend.layouts.app')
    @section('main')
            <!-- ==========Form Starts======== -->
    <h1 class="form_heading">Add New User</h1>

   
        @error('error')
            
        @enderror
    
    <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form_section">           
            <div class="input_group">
                <div class="input_single">
                    <p class="input_title">Name</p>
                    <input name="name" type="text" class="input" />
                </div> 
                @error('name')
                <span class="" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror              
            </div>
        </div>
        <div class="form_section">           
            <div class="input_group">
                <div class="input_single">
                    <p class="input_title">Email</p>
                    <input name="email" type="email" class="input" />
                </div> 
                @error('email')
                <span class="" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror              
            </div>
        </div>
        <div class="form_section">           
            <div class="input_group">
                <div class="input_single">
                    <p class="input_title">Mobile</p>
                    <input name="phone_number" type="text" class="input"                       
                    />
                </div> 
                @error('phone_number')
                <span class="" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror              
            </div>
        </div>
        <div class="form_section">           
            <div class="input_group">
                <div class="input_single">
                    <p class="input_title">Password</p>
                    <input name="password" type="password" class="input" />
                </div> 
                @error('password')
                <span class="" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror              
            </div>
        </div>
        <div class="form_section">           
            <div class="input_group">
                <div class="input_single">
                    <p class="input_title">Confirm Password</p>
                    <input name="password_confirmation" type="password" class="input"   />
                </div>
                @error('password_confirmation')
                <span class="" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror           
            </div>
        </div>

        <input type="submit" value="Submit" class="submi" />
    </form>
    <!-- ==========Form Ends======== -->

    @endsection
    
