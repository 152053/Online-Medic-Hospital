<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom CSS for styling -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        header {
            background-color: #0056b3;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        header nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        header nav ul li {
            display: inline;
            margin-right: 20px;
        }

        header nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
        }

        main {
            text-align: center;
            margin: 20px;
        }

        main section {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        main section h1 {
            color: #0056b3;
            font-size: 36px;
            margin-bottom: 10px;
        }

        main section p {
            color: #555;
            font-size: 18px;
            margin-bottom: 0;
        }

        .card {
            margin-top: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #0056b3;
            color: #fff;
            padding: 10px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .card-body {
            padding: 20px;
        }

        .btn-approve {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-approve:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .list-group-item {
            border: none;
        }

        /* Styles for Features */
        .features {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 40px;
        }

        .feature {
            text-align: center;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 250px;
            margin: 10px;
        }

        .feature i {
            font-size: 48px;
            margin-bottom: 10px;
            color: #0056b3;
        }

        .feature h3 {
            color: #0056b3;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .feature p {
            color: #555;
            font-size: 16px;
            margin-bottom: 20px;
        }

        .feature a {
            background-color: #0056b3;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
            display: inline-block;
        }

        .feature a:hover {
            background-color: #004494;
        }
    </style>
</head>
<body>

<main>
<header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('profile') }}">Profile</a></li>
                <li><a href="{{ route('logout') }}">Logout</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <h1>Patient Dashboard</h1>
        <p>Hello There! , Thank you for joining us, welcome to your dashboard.</p>
    </section>

<!-- Features Section -->
<section id="features">
    <div class="features">
        <!-- Consultation Requests Feature -->
        <div class="feature">
            <i class="fas fa-headset" style="color: #FF5733;"></i>
            <h3>Request Consultation</h3>
            <p>Quick, Easy and Reliable Consultation services</p>
            <a href="#consultation" class="view-consultation">Make Requests</a>
        </div>

        <!-- Reviews Requests Feature -->
        <div class="feature">
            <i class="fas fa-comments" style="color: #FF5733;"></i>
            <h3>Review </h3>
            <p>Share Personal Reviews After Consultation on How the Service Rendered was Provided</p>
            <a href="#reviews" class="view-reviews">Give Reviews</a>
        </div>

        <!-- Payment Records Feature -->
        <div class="feature">
            <i class="fas fa-money-check-alt" style="color: #FF5733;"></i>
            <h3>Payment Records</h3>
            <p>Your Records of Payments per Consultation and Appointments made and scheduled</p>
            <a href="#payments" class="view-payments">View Payments Made</a>
        </div>

        <!-- Appointments Feature -->
        <div class="feature">
            <i class="fas fa-calendar-alt" style="color: #FF5733;"></i>
            <h3>Book an Appointment</h3>
            <p>Make an Appointment with your desired Doctor/Specialist</p>
            <a href="#appointments" class="view-appointments">Book an Appointment Today</a>
        </div>

        <!-- Prescriptions Feature -->
        <div class="feature">
            <i class="fas fa-prescription-bottle-alt" style="color: #FF5733;"></i>
            <h3>Prescriptions</h3>
            <p>A List of Prescriptions Given and their Dosage </p>
            <a href="#prescriptions" class="view-prescriptions">View Prescriptions Given</a>
        </div>

        <!-- Medical Record Feature -->
        <div class="feature">
            <i class="fas fa-prescription-bottle-alt" style="color: #FF5733;"></i>
            <h3>Medical Record</h3>
            <p>Your Personal Medical Record with the E-Platform So Far</p>
            <a href="#medical-record" class="view-medical-records">View Medical Record</a>
        </div>

        <!-- Available Doctors Feature -->
        <div class="feature">
            <i class="fas fa-user-md" style="color: #FF5733;"></i>
            <h3>Doctors Online</h3>
            <p>A List of the Available Doctors</p>
            <a href="#active-doctors" class="view-active-doctors">View Active Doctors</a>
        </div>
    </div>
</section>

<!-- Appointments Section -->
<section id="appointments" style="display: block;">
        <div class="card">
            <div class="card-header">Appointments</div>
            <div class="card-body">
                <ul class="list-group">
                  
                        <li class="list-group-item">
                            Appointment with {{ $appointment->doctor->name }} on {{ $appointment->date }}
                            <div>
                                Status: {{ $appointment->status }}
                                @if ($appointment->status === 'scheduled')
                                    <a href="{{ route('appointment.cancel', $appointment->id) }}" class="btn btn-cancel">Cancel</a>
                                
                            </div>
                        </li>
                    
                    @if (count($appointments) === 0)
                        <li class="list-group-item">No upcoming appointments.</li>
                    @endif
                </ul>
            </div>
        </div>
    </section>

    <!-- Consultation Request Section -->
    <section id="consultation" style="display: none;">
        <div class="card">
            <div class="card-header">Consultation Requests</div>
            <div class="card-body">
                @if ($doctors->count() > 0)
                    <form action="{{ route('consultation.request') }}" method="POST">
                        
                        <div class="form-group">
                            <label for="doctor_id">Select Doctor:</label>
                            <select name="doctor_id" id="doctor_id" class="form-control">
                              
                                    <option value="{{ $doctor->id }}">{{ $doctor->name }} - {{ $doctor->speciality }}</option>
                               
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="vitals">Vitals:</label>
                            <textarea name="vitals" id="vitals" class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Request Consultation</button>
                    </form>

            </div>
        </div>
    </section>

    <!-- Available Doctors Section -->
    <section id="available-doctors" style="display: none;">
        <div class="card">
            <div class="card-header">Available Doctors</div>
            <div class="card-body">
                <ul class="list-group">
                  
                        <li class="list-group-item">
                            {{ $doctor->name }} - {{ $doctor->speciality }}
                            <div>
                                Ratings: {{ $doctor->ratings }} / 5
                                Experience: {{ $doctor->experience_years }} years
                            </div>
                        </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Prescriptions Section -->
    <section id="prescriptions" style="display: none;">
        <div class="card">
            <div class="card-header">Prescriptions</div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach ($prescriptions as $prescription)
                        <li class="list-group-item">
                            Prescription for {{ $prescription->patient_name }}:
                            {{ $prescription->details }}
                        </li>
              
                    @if (count($prescriptions) === 0)
                        <li class="list-group-item">No prescriptions issued.</li>
                   
                </ul>
            </div>
        </div>
    </section>

    <!-- Medical Records Section -->
    <section id="medical-records" style="display: none;">
        <div class="card">
            <div class="card-header">Medical Records</div>
            <div class="card-body">
                <form action="{{ route('medical.records') }}" method="POST">
                 
                    <div class="form-group">
                        <label for="password">Enter Your Password:</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">View Medical Records</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Payment Records Section -->
    <section id="payments" style="display: none;">
        <div class="card">
            <div class="card-header">Payment Records</div>
            <div class="card-body">
                <ul class="list-group">
                   
                        <li class="list-group-item">
                            Payment Amount: {{ $payment->amount }} - {{ $payment->type }}
                        </li>
                   
                    @if (count($payments) === 0)
                        <li class="list-group-item">No payment records.</li>
                   
                </ul>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section id="reviews" style="display: none;">
        <div class="card">
            <div class="card-header">Reviews</div>
            <div class="card-body">
                <form action="{{ route('review.submit') }}" method="POST">
                  
                    <div class="form-group">
                        <label for="rating">Rating:</label>
                        <input type="number" name="rating" id="rating" class="form-control" min="1" max="5" required>
                    </div>
                    <div class="form-group">
                        <label for="comment">Comment:</label>
                        <textarea name="comment" id="comment" class="form-control" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Review</button>
                </form>
            </div>
        </div>
    </section>
</main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        // Show/hide sections based on navigation clicks
        $(".view-consultation").click(function() {
            $("#consultation").show();
            $("#reviews").hide();
            $("#payments").hide();
            $("#appointments").hide();
            $("#prescriptions").hide();
            return false;
        });

        $(".view-reviews").click(function() {
            $("#consultation").hide();
            $("#reviews").show();
            $("#payments").hide();
            $("#appointments").hide();
            $("#prescriptions").hide();
            return false;
        });

        $(".view-payments").click(function() {
            $("#consultation").hide();
            $("#reviews").hide();
            $("#payments").show();
            $("#appointments").hide();
            $("#prescriptions").hide();
            return false;
        });

        $(".view-appointments").click(function() {
            $("#consultation").hide();
            $("#reviews").hide();
            $("#payments").hide();
            $("#appointments").show();
            $("#prescriptions").hide();
            return false;
        });

        $(".view-prescriptions").click(function() {
            $("#consultation").hide();
            $("#reviews").hide();
            $("#payments").hide();
            $("#appointments").hide();
            $("#prescriptions").show();
            return false;
        });

        $(".view-medical-records").click(function() {
            $("#consultation").hide();
            $("#reviews").hide();
            $("#payments").hide();
            $("#appointments").hide();
            $("#prescriptions").hide();
            $("#medical-record").show();
            return false;
        });

        $(".view-active-doctors").click(function() {
            $("#consultation").hide();
            $("#reviews").hide();
            $("#payments").hide();
            $("#appointments").hide();
            $("#prescriptions").hide();
            $("#active-doctors").show();
            return false;
        });
    });
</script>

</body>
</html>