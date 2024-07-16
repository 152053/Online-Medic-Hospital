<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header text-center">
                <h4>Admin Dashboard</h4>
                </div>
                <div class="card-body">
                    <p>Welcome, {{ Auth::user()->name }}. This is your dashboard.</p>
                    <div class="row text-center">
                        <div class="col-md-3 mb-3">
                            <a href="{{ route('doctors.list') }}">
                                <img src="{{ asset('images/doctors_icon.png') }}" class="icon">
                                <p>Manage Doctors</p>
                            </a>
                        </div>
                        <div class="col-md-3 mb-3">
                            <a href="{{ route('appointments.manage') }}">
                                <img src="{{ asset('images/appointments_icon.png') }}" class="icon">
                                <p>Manage Appointments</p>
                            </a>
                        </div>
                        <div class="col-md-3 mb-3">
                            <a href="{{ route('payments.manage') }}">
                                <img src="{{ asset('images/payments_icon.png') }}" class="icon">
                                <p>Manage Payments</p>
                            </a>
                        </div>
                        <div class="col-md-3 mb-3">
                            <a href="{{ route('database.manage') }}">
                                <img src="{{ asset('images/database_icon.png') }}" class="icon">
                                <p>Database Management</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
