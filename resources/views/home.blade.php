<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Your Landing Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Custom styles -->
    <style>
        body {
            padding-top: 56px;
        }
        .feature-icon {
            font-size: 3rem;
        }
        .bg-image{
            background-image: url('/public/images/background.jpg') !important;
        }
    </style>
</head>
<body bgcolor="black">


<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#">{{$home->BrandName}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#recentwork">Recent Works</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#testimonials">Testimonials</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Hero Section -->
<header id="home" class="bg-info text-white text-center" >
    <div   class="container " style="background-image: url('/public/images/background.jpg');">
    <br><br><br><br>
        <h1 class="display-4"><b>{{$home->HeadLine}}</b></h1>   <br>

      <p class="lead"> <h3>{{$home->Slogan}}</h3></p> <br>

        <h6>Feel free to Contact Us</h6> <br>
        <h6>Phone : 0987654321</h6>
        <h6>Email : marak123@gmail.com</h6>
        <h6>Address : Addis Ababa , Bole</h6>
        <h6>LinkedIn : linkedin.com</h6> <br><br><br>
        <a href="#contact" class="btn btn-light btn-lg">Get Started</a><br><br><br><br><br>
    </div>
</header>

<!-- Features Section -->
<section id="services" class="py-5">
    <div class="container">
        <div class="row">
       @for($i=0;$i<count($home->ServiceHeader);$i++)
        <div class="col-lg-4">
                <i class="fas fa-rocket feature-icon mb-3"></i>
                <h3>{{$home->ServiceHeader[$i]}}</h3>
                <p>{{$home->ServiceDescription[$i]}}</p>
            </div>
            @endfor
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center">What Our Customers Say</h2>
        <div class="row">
        @for($i=0;$i<count($home->TestimonialText);$i++)
            <div class="col-lg-4">
                <blockquote class="blockquote">
                    <p class="mb-0">"{{$home->TestimonialText[$i]}}"</p>
                    <footer class="blockquote-footer">{{$home->CustomerName[$i]}}</footer>
                </blockquote>
            </div>
           @endfor
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5">
    <div class="container">
        <h2 class="text-center">Contact Us</h2>
        <p class="text-center">Have a question or want to learn more? Contact us!</p>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap JS and Font Awesome -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>

</body>
</html>
