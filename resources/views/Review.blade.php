<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    
    <h1>Submit a Review</h1>
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('reviews.store') }}" method="POST">
              
                <div class="form-group">
                    <label for="doctor_id">Select Doctor:</label>
                    <select class="form-control" id="doctor_id" name="doctor_id" required>
                       
                            <option value="{{ $doctor->id }}"></option>
                       
                    </select>
                </div>
                <div class="form-group">
                    <label for="rating">Rate The Quality Of Health Care Delivery Received:</label>
                    <select class="form-control" id="rating" name="rating" required>
                        <option value="High&Fast quality">High & Fast quality</option>
                        <option value="Average">Average</option>
                        <option value="Slow">Slow</option>
                        <option value="Poor quality">Poor quality</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="comment">Your Experience:</label>
                    <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit Review</button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
