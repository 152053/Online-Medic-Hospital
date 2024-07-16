<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Request Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Appointment Request Form</h2>
    <form action="{{ route('appointments.store') }}" method="POST">
        
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" required>
            </div>
            <div class="form-group col-md-6">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="phone_number">Phone Number</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" required>
            </div>
            <div class="form-group col-md-6">
                <label for="email_address">Email Address</label>
                <input type="email" class="form-control" id="email_address" name="email_address" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="preferred_date">What date and time work best for you?</label>
                <input type="date" class="form-control" id="preferred_date" name="preferred_date" required>
            </div>
            <div class="form-group col-md-6">
                <label for="preferred_time">&nbsp;</label>
                <input type="time" class="form-control" id="preferred_time" name="preferred_time" required>
            </div>
        </div>
        <div class="form-group">
            <label for="alternative_datetime">Any other specific date and time, if the above selection is not suitable.</label>
            <input type="datetime-local" class="form-control" id="alternative_datetime" name="alternative_datetime">
        </div>
        <div class="form-group">
            <label for="services_interested">What services are you interested in?</label>
            <textarea class="form-control" id="services_interested" name="services_interested" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
