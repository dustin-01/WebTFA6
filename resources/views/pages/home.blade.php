@extends('layouts.app')

@section('content')
    <section class="hero">
        <p class="eyebrow">Point-of-Sale System</p>
        <h1>Welcome to Simple POS</h1>
        <p>This website is the first Laravel version of a basic point-of-sale system.</p>
        <div class="actions">
            <a class="button" href="{{ route('customers.index') }}">View Customers</a>
            <a class="button secondary" href="{{ route('users.index') }}">View Users</a>
        </div>
    </section>

    <section class="cards">
        <article class="card">
            <h2>Customer Accounts</h2>
            <p>View the names and contact information of registered customers.</p>
        </article>
        <article class="card">
            <h2>User Accounts</h2>
            <p>View the staff members who can access the POS system and their roles.</p>
        </article>
    </section>
@endsection
