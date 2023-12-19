<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Recent Work</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Custom styles for the recent work page -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .work-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 50px 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        .work-card {
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 20px;
            transition: transform 0.3s;
        }
        .work-card:hover {
            transform: scale(1.03);
        }
        .work-card img {
            width: 100%;
            height: auto;
        }
        .work-card-body {
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="work-container">
                <h2 class="text-center mb-4">Recent Work</h2>
                <div class="row">
                    <!-- Work cards go here -->
                    <div class="col-lg-4">
                        <div class="work-card">
                            <img src="https://via.placeholder.com/600x400" alt="Work 1">
                            <div class="work-card-body">
                                <h5 class="card-title">Project Name</h5>
                                <p class="card-text">Description</p>
                            </div>
                        </div>
                    </div>
                   
                    <!-- Add more work cards for additional projects -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
