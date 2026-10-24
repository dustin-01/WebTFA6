@extends('layouts.app')

@section('content')
    <section class="page-heading">
        <p class="eyebrow">Records</p>
        <h1>User Accounts</h1>
        <p>List of staff members and their assigned roles in the POS system.</p>
    </section>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th scope="col">Username</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Role</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->full_name }}</td>
                        <td><span class="role">{{ $user->role }}</span></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
