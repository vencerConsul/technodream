@extends('layouts.admin')

@section('title', 'Technodream | Users')

@section('content')
<!-- MAIN -->

    <div class="table-data">
        <div class="user-tbl">
            <div class="head">
                <h3>Users</h3>
                <i class='bx bx-search' ></i>
                <i class='bx bx-filter' onclick="showUserOption(this)"></i>
                <div class="user-option">
                    <ul>
                        <li><a href="{{route('users.page.add')}}"><i class='bx bx-user-plus'></i> Add User</a></li>
                        <li><a href=""><i class='bx bx-user-plus'></i> Add User</a></li>
                    </ul>
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Gender</th>
                        <th>Position</th>
                        <th>Date Created</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($users->count() > 0)
                        @foreach ($users as $user)
                            <tr>
                                <td>
                                    <img src="{{empty($user->avatar) ? asset('td-assets/users/user-avatar.png') : asset('td-assets/users/avatar/'. $user->avatar);}}" alt="{{$user->name}}">
                                    <div class="user-name">
                                        <p>{{$user->name}}</p>
                                        <p>{{$user->email}}</p>
                                    </div>
                                </td>
                                <td>{{$user->gender}}</td>
                                <td>{{$user->position}}</td>
                                <td>{{$user->created_at->diffForHumans()}}</td>
                                <td>
                                    @if($user->role == 'Admin')
                                        <span class="status admin">{{$user->role}}</span>
                                    @elseif($user->role == 'Employee')
                                        <span class="status employee">{{$user->role}}</span>
                                    @else 
                                        <span class="status hr">{{$user->role}}</span>
                                    @endif
                                </td>
                                <td class="option"><i class='bx bx-menu-alt-right'></i></td>
                            </tr>
                        @endforeach
                    @else 
                        <tr><td>No Users found</td></tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
<!-- MAIN -->
@endsection