@extends('layouts.admin')

@section('title', 'Dashboard | Users')

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
                        <th>Date Created</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="img/people.png">
                            <p>John Doe</p>
                        </td>
                        <td>01-10-2021</td>
                        <td><span class="status completed">Completed</span></td>
                        <td class="option"><i class='bx bx-menu-alt-right'></i></td>
                    </tr>
                    <tr>
                        <td>
                            <img src="img/people.png">
                            <p>John Doe</p>
                        </td>
                        <td>01-10-2021</td>
                        <td><span class="status pending">Pending</span></td>
                        <td><i class='bx bx-menu-alt-right'></i></td>
                    </tr>
                    <tr>
                        <td>
                            <img src="img/people.png">
                            <p>John Doe</p>
                        </td>
                        <td>01-10-2021</td>
                        <td><span class="status process">Process</span></td>
                        <td><i class='bx bx-menu-alt-right'></i></td>
                    </tr>
                    <tr>
                        <td>
                            <img src="img/people.png">
                            <p>John Doe</p>
                        </td>
                        <td>01-10-2021</td>
                        <td><span class="status pending">Pending</span></td>
                        <td><i class='bx bx-menu-alt-right'></i></td>
                    </tr>
                    <tr>
                        <td>
                            <img src="img/people.png">
                            <p>John Doe</p>
                        </td>
                        <td>01-10-2021</td>
                        <td><span class="status completed">Completed</span></td>
                        <td><i class='bx bx-menu-alt-right'></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<!-- MAIN -->
@endsection