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
        <h1>Doctor Dashboard</h1>
        <p>Welcome, doc, to your dashboard.</p>
    </section>

    <!-- Features Section -->
    <section id="features">
        <div class="features">
            <!-- Consultation Requests Feature -->
            <div class="feature">
                <i class="fas fa-headset" style="color: #FF5733;"></i>
                <h3>Consultation Requests</h3>
                <p>Requests for Consultations made and their relevant information</p>
                <a href="#consultation" class="view-consultation">View Requests</a>
            </div>

            <!-- Reviews Requests Feature -->
            <div class="feature">
                <i class="fas fa-comments" style="color: #FF5733;"></i>
                <h3>Review Requests</h3>
                <p>Personal Reviews given by Past Patients After Consultation with you</p>
                <a href="#reviews" class="view-reviews">View Reviews</a>
            </div>

            <!-- Payment Records Feature -->
            <div class="feature">
                <i class="fas fa-money-check-alt" style="color: #FF5733;"></i>
                <h3>Payment Records</h3>
                <p>Records of Payments Made per consultation and appointments made and scheduled</p>
                <a href="#payments" class="view-payments">View Payments</a>
            </div>

            <!-- Appointments Feature -->
            <div class="feature">
                <i class="fas fa-calendar-alt" style="color: #FF5733;"></i>
                <h3>Appointments</h3>
                <p>Number of Appointments accepted and their due dates and time</p>
                <a href="#appointments" class="view-appointments">View Appointments</a>
            </div>

            <!-- Prescriptions Feature -->
            <div class="feature">
                <i class="fas fa-prescription-bottle-alt" style="color: #FF5733;"></i>
                <h3>Prescriptions</h3>
                <p>Number of Prescriptions Given and Their specific patients</p>
                <a href="#prescriptions" class="view-prescriptions">View Prescriptions</a>
            </div>
        </div>
    </section>

    <!-- Consultation Section (Initially Hidden) -->
    <section id="consultation" style="display: none;">
        <div class="card">
            <div class="card-header">Consultation Requests</div>
            <div class="card-body">
                @if ($consultation)
                    <p><strong>Patient:</strong> {{ $consultation->patient_name }}</p>
                    <p><strong>Vitals:</strong> {{ $consultation->vitals }}</p>
                    <form action="{{ route('consultation.approve') }}" method="POST">
                        @csrf
                        <input type="hidden" name="consultation_id" value="{{ $consultation->id }}">
                        <button type="submit" class="btn btn-approve">Approve Consultation</button>
                    </form>
                @else
                    <p>No consultation requests currently.</p>
                @endif
            </div>
        </div>
    </section>

    <!-- Reviews Section (Initially Hidden) -->
    <section id="reviews" style="display: none;">
        <div class="card">
            <div class="card-header">Reviews</div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach ($reviews as $review)
                        <li class="list-group-item">Rating: {{ $review->rating }}</li>
                    @endforeach
                    @if (count($reviews) === 0)
                        <li class="list-group-item">No reviews yet.</li>
                    @endif
                </ul>
            </div>
        </div>
    </section>

    <!-- Payment Records Section (Initially Hidden) -->
    <section id="payments" style="display: none;">
        <div class="card">
            <div class="card-header">Payment Records</div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach ($payments as $payment)
                        <li class="list-group-item">Amount: {{ $payment->amount }}</li>
                    @endforeach
                    @if (count($payments) === 0)
                        <li class="list-group-item">No payment records.</li>
                    @endif
                </ul>
            </div>
        </div>
    </section>

    <!-- Appointments Section (Initially Hidden) -->
    <section id="appointments" style="display: none;">
        <div class="card">
            <div class="card-header">Appointments</div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach ($appointments as $appointment)
                        <li class="list-group-item">Appointment with {{ $appointment->patient_name }} on {{ $appointment->date }}</li>
                    @endforeach
                    @if (count($appointments) === 0)
                        <li class="list-group-item">No upcoming appointments.</li>
                    @endif
                </ul>
            </div>
        </div>
    </section>

    <!-- Prescriptions Section (Initially Hidden) -->
    <section id="prescriptions" style="display: none;">
        <div class="card">
            <div class="card-header">Prescriptions</div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach ($prescriptions as $prescription)
                        <li class="list-group-item">Prescription for {{ $prescription->patient_name }}</li>
                    @endforeach
                    @if (count($prescriptions) === 0)
                        <li class="list-group-item">No prescriptions issued.</li>
                    @endif
                </ul>
            </div>
        </div>
    </section>
</main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // Script to show/hide sections based on navigation
    $(document).ready(function() {
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
            
// Function to hide other sections when showing one
function hideOtherSections(currentSection) {
            $('section').not(currentSection).hide();
        }

        });
    });
</script>

</body>
</html>
