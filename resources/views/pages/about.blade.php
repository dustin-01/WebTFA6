@extends('layouts.app')

@section('content')
    <section class="page-heading">
        <p class="eyebrow">About the Project</p>
        <h1>Simple POS</h1>
        <p>Simple POS is a classroom project that demonstrates routing, controllers, and Blade views using Laravel's MVC structure.</p>
    </section>

    <section class="card about-card">
        <h2>Current Version</h2>
        <p>The Customer Accounts and User Accounts pages display database records retrieved through Eloquent models. Migrations define the tables, and a seeder supplies sample records.</p>
    </section>
@endsection
