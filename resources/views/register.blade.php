<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
        
            <div class="alert alert-success">
                <!-- Success message if needed -->
            </div>
            
            <div class="alert alert-danger">
                <!-- Error message if needed -->
            </div>
            
            <div class="card">
                <div class="card-header text-center">
                    <h4>Register</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('saveRegister') }}">
                       

                        <!-- User Type selection -->
                        <div class="form-group row">
                            <label for="usertype" class="col-md-4 col-form-label text-md-right">{{ __('User Type') }}</label>
                            <div class="col-md-6">
                                <select id="usertype" class="form-control @error('usertype') is-invalid @enderror" name="usertype" required>
                                    <option value="patient">Patient</option>
                                    <option value="doctor">Doctor</option>
                                    <option value="admin">Admin</option>
                                </select>
                              
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                             
                            </div>
                        </div>

                        <!-- First Name field -->
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
                           
                                <div class="invalid-feedback">{{ $message }}</div>
                        
                        </div>

                        <!-- Last Name field -->
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
                          
                                <div class="invalid-feedback">{{ $message }}</div>
                           
                        </div>

                        <!-- Email field -->
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                            
                                <div class="invalid-feedback">{{ $message }}</div>
                          
                        </div>

                        <!-- Password field -->
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                            
                                <div class="invalid-feedback">{{ $message }}</div>
                           
                        </div>

                        <!-- Confirm Password field -->
                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        </div>

                        <!-- Phone Number field -->
                        <div class="form-group">
                            <label for="phone_number">Phone Number</label>
                            <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" required>
                           
                                <div class="invalid-feedback">{{ $message }}</div>
                        
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </form>
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
