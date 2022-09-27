@extends('layouts.admin')

@section('title', 'Dashboard | Add Users')

@section('content')
<!-- MAIN -->
    @if ($errors->any())
        <div class="alert-container">
            <div class="alert-error">
                <div class="alert-header">
                    <i class='bx bx-error-circle'></i>
                </div>
                <div class="alert-body">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li><i class='bx bx-error-circle' ></i> {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="alert-footer">
                    <button class="alert-close">Ok</button>
                </div>
            </div>
        </div>
    @endif
    <div class="table-data">
        <div class="add-user-left">
            <form id="form" action="{{route('users.page.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="avatar">
                <img src="{{asset('td-assets/users/user-avatar.png')}}" alt="Avatar">
                <input type="file" id="avatar">
                <button type="button" role="button" onclick="document.getElementById('avatar').click();">Upload Avatar</button>
                <h1>Set up new Technodream user</h1>
                <p>It should only take a couple of minutes to complete this set up.</p>
            </div>
        </div>
        
        <div class="add-user-form">
            <div class="container">
                <div class="form-content">
                    <div class="label">
                        <label for="firstname">First Name</label>
                    </div>
                    <div class="input">
                        <input type="text" id="firstname" name="firstname" value="{{old('firstname')}}" placeholder="First Name">
                    </div>
                </div>
                <div class="form-content">
                    <div class="label">
                        <label for="middlename">Middle Name</label>
                    </div>
                    <div class="input">
                        <input type="text" id="middlename" name="middlename" value="{{old('middlename')}}" placeholder="Middle Name">
                    </div>
                </div>
                <div class="form-content">
                    <div class="label">
                        <label for="lastname">Last Name</label>
                    </div>
                    <div class="input">
                        <input type="text" id="lastname" name="lastname" value="{{old('lastname')}}" placeholder="Last Name">
                    </div>
                </div>
                <div class="form-content">
                    <div class="label">
                        <label for="email">Email</label>
                    </div>
                    <div class="input">
                        <input type="email" id="email" name="email" value="{{old('email')}}" placeholder="Email">
                    </div>
                </div>
                <div class="form-content">
                    <div class="label">
                        <label>Gender</label>
                        <input type="radio" id="male" name="gender" value="Male">
                        <input type="radio" id="female" name="gender" value="Female">
                    </div>
                    <div class="input gender">
                        <div class="radio">
                            <i class='bx bx-male-sign bx-md icon-male' onclick="chooseGender('male')"></i>
                            <p>Male</p>
                        </div>
                        <div class="radio">
                            <i class='bx bx-female-sign bx-md icon-female' onclick="chooseGender('female')"></i>
                            <p>Female</p>
                        </div>
                    </div>
                </div>
                <div class="form-content">
                    <div class="label">
                        <label>Role</label>
                        <input type="radio" id="admin" name="role" value="Admin">
                        <input type="radio" id="hr" name="role" value="HR">
                        <input type="radio" id="employee" name="role" value="Employee">
                    </div>
                    <div class="input role">
                        <div class="radio">
                            <i class='bx bxs-user-detail bx-md icon-admin' onclick="chooseRole('admin')"></i>
                            <p>Admin</p>
                        </div>
                        <div class="radio">
                            <i class='bx bxs-user-check bx-md icon-hr' onclick="chooseRole('hr')"></i>
                            <p>HR</p>
                        </div>
                        <div class="radio">
                            <i class='bx bxs-user bx-md icon-employee' onclick="chooseRole('employee')"></i>
                            <p>Employee</p>
                        </div>
                    </div>
                </div>
                <div class="form-content">
                    <div class="label">
                        <label for="position">Position</label>
                    </div>
                    <div class="input">
                        <input type="text" id="position" name="position" value="{{old('position')}}" placeholder="Exp. Programmer / CSR / Project Manager">
                    </div>
                </div>
                <div class="add-user-buttons">
                    <input type="button" role="button" class="reset-user-btn" value="Reset Inputs" onclick="resetForm()">
                    <input type="submit" class="create-user-btn" value="Add User">
                </div>
            </div>
            </form>
        </div>
    </div>
<!-- MAIN -->
@endsection