<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Our Services</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Custom styles for the service page -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .service-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 50px 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        .service-card {
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 20px;
            transition: transform 0.3s;
        }
        .service-card:hover {
            transform: scale(1.03);
        }
        .service-card img {
            width: 100%;
            height: auto;
        }
        .service-card-body {
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="service-container">
                <h2 class="text-center mb-4">Our Services</h2>
                <div class="row ">
                    <!-- Service cards go here    @for($i=0;$i<10;$i++)    @endfor-->
                   
                    <div class="col-lg-4">
                        <div class="service-card">
                            <img src="https://via.placeholder.com/600x400" alt="Service 1">
                            <div class="service-card-body">
                                <h5 class="card-title">Service Name</h5>
                                <p class="card-text">Description Here Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae libero rem, harum officia quae ab atque suscipit? Facere, omnis iste. </p>
                            </div>
                        </div>
                    </div>
                   
                    <!-- @foreach($array as $item)
                        <h2>{{$item}}</h2> <br>
                    @endforeach -->
                   
                    <!-- Add more service cards for additional services -->
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
