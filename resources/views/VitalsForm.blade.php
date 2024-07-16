<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vitals</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
            <div class="card">
                <div class="card-header text-center">
                <h4>Enter Vitals</h4>
                </div>
                <div class="card-body">
                <form action="{{ route('vitals.store') }}" method="POST">
 

    <!-- Height Input -->
    <div class="form-group">
        <label for="height">Height (cm)</label>
        <input type="number" step="0.01" id="height" name="height" class="form-control" required>
    </div>

    <!-- Weight Input -->
    <div class="form-group">
        <label for="weight">Weight (kg)</label>
        <input type="number" step="0.01" id="weight" name="weight" class="form-control" required>
    </div>

    <!-- Temperature Input -->
    <div class="form-group">
        <label for="temperature">Temperature (°C)</label>
        <input type="number" step="0.01" id="temperature" name="temperature" class="form-control" required>
    </div>

    <!-- Blood Pressure Input -->
    <div class="form-group">
        <label for="blood_pressure">Blood Pressure</label>
        <input type="text" id="blood_pressure" name="blood_pressure" class="form-control" required>
    </div>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
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