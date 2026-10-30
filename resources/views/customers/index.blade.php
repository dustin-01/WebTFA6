@extends('layouts.app')

@section('content')
    <section class="page-heading">
        <p class="eyebrow">Records</p>
        <h1>Customer Accounts</h1>
        <p>List of customers currently registered in the POS system.</p>
    </section>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email Address</th>
                    <th scope="col">Phone Number</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->full_name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
