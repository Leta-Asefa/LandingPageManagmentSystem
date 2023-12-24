<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Template</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>

    <!-- Header -->
    <header class="bg-primary text-white text-center py-3">
        <h1>Landing Page Managment Dashboard</h1>
    </header>

    <a href="{{ url('index') }}"><button class="btn btn-outline-primary">  Back to Home</button></a>


    <div class="container mt-4">
        <h2 class="mb-4 text-center">Enter The Following Informations</h2>

        <!-- Form -->
        <form>
            <!-- Row 1 -->
            <div class="row mb-3">
                <div class="col">
                    <input id="brandName" type="text" class="form-control" placeholder="Brand Name">
                </div>
                <div class="col">
                    <input  id="headLine" type="text" class="form-control" placeholder="HeadLine Text">
                </div>
                <div class="col">
                    <input  id="slogan" type="text" class="form-control" placeholder="Slogan">
                </div>
            </div>

            <!-- Row 2 -->
           
            <div class="row mb-3">
                <div class="col">
                    <input  id="phone" type="text" class="form-control" placeholder="Phone">
                </div>
                <div class="col">
                    <input  id="email"  type="text" class="form-control" placeholder="Email">
                </div>
                <div class="col">
                    <input  id="address" type="text" class="form-control" placeholder="Address">
                </div>
                
            </div>

            <!-- Row 4 -->
            <div class="row mb-3">
                <div class="col">
                    <input  id="socialMediaLink" type="text" class="form-control" placeholder="Social Media Link">
                </div>
               
            </div>

            <!-- Main Content -->
            <div class="container mt-4 ">
                <h2 class="mb-4 text-center">Enter Serivces , Recent Projects and Testimonials</h2>
        
                <!-- Form -->
                <form>
                    <!-- Row 1 -->
                    <div class="row mb-4">
                        <!-- Pair 1 -->
                        <div class="col">
                            <label for="serviceHeader" class="form-label">Serivce Header</label>
                            <input   type="text" class="form-control" id="serviceHeader" placeholder="Header">
                        </div>
                        <div class="col">
                            <label for="serviceDescription" class="form-label">Serivce Description</label>
                            <textarea class="form-control" id="serviceDescription" rows="3" placeholder="Description "></textarea>
                        </div>
                        <div class="col text-center">
                            <button id="serviceAddButton" type="button" class="btn btn-info mt-4">Add</button>
                        </div>
                    </div>
        
                    <!-- Row 2 -->
                    <div class="row mb-4">
                        <!-- Pair 2 -->
                        <div class="col">
                            <label for="projectHeader" class="form-label">Recent Project Header</label>
                            <input type="text" class="form-control" id="projectHeader" placeholder="Header ">
                        </div>
                        <div class="col">
                            <label for="projectDescription" class="form-label">Recent Project Description</label>
                            <textarea class="form-control" id="projectDescription" rows="3" placeholder="Description "></textarea>
                        </div>
                        <div class="col text-center">
                            <button id="projectAddButton" type="button" class="btn btn-info mt-4">Add</button>
                        </div>
                    </div>
        
                    <!-- Row 3 -->
                    <div class="row">
                        <!-- Pair 3 -->
                        <div class="col">
                            <label for="customerName" class="form-label">Customer Name</label>
                            <input type="text" class="form-control" id="customerName" placeholder="Name">
                        </div>
                        <div class="col">
                            <label for="testimonialHeader" class="form-label">Testimonial</label>
                            <textarea class="form-control" id="testimonialHeader" rows="3" placeholder="Testimonial"></textarea>
                        </div>
                        <div class="col text-center">
                            <button id="testimonialAddButton" type="button" class="btn btn-info mt-4">Add</button>
                        </div>
                    </div>
        
                    <!-- Submit Button (optional) -->
                    <!-- <div class="mt-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div> -->
                </form>
            </div>
        
            <br>

            <!-- Submit Button -->
            <div class="mt-4 text-center">
                <button id="submitButton" type="button" class="btn btn-primary">Generate The Page</button>
                <a id="browsingLink"  class="text-center" style="display:none;"><button class="btn btn-info">Go To The Generated Page</button></a>
            </div>


            <br><br>
             <br> <br>
        </form>


           

    </div>






    <!-- Bootstrap JS (Optional, if you need JS features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script> 
  
let brandName=document.getElementById('brandName');
let headLine=document.getElementById('headLine');
let slogan=document.getElementById('slogan');
let phone=document.getElementById('phone');
let email=document.getElementById('email');
let address=document.getElementById('address');
let socialMediaLink=document.getElementById('socialMediaLink');
let serviceHeader=document.getElementById('serviceHeader');
let serviceDescription=document.getElementById('serviceDescription');
let serviceAddButton=document.getElementById('serviceAddButton');
let projectHeader=document.getElementById('projectHeader');
let projectDescription=document.getElementById('projectDescription');
let projectAddButton=document.getElementById('projectAddButton');
let testimonialHeader=document.getElementById('testimonialHeader');
let customerName=document.getElementById('customerName');
let testimonialAddButton = document.getElementById('testimonialAddButton');
let browsingLink = document.getElementById('browsingLink');
let submitButton = document.getElementById('submitButton');

let serviceHeaderArray = [];
let serviceDescriptionArray = [];
let projectHeaderArray = [];
let projectDescriptionArray = [];
let testimonialHeaderArray = [];
let customerNameArray = [];

let link;

serviceAddButton.onclick = function () {

    serviceHeaderArray.push(serviceHeader.value);
    serviceDescriptionArray.push(serviceDescription.value);
    serviceHeader.value = "";
    serviceDescription.value = "";
}

projectAddButton.onclick = function () {
    
    projectHeaderArray.push(projectHeader.value);
    projectDescriptionArray.push(projectDescription.value);
    projectHeader.value = "";
    projectDescription.value = "";
    console.log(projectHeaderArray + projectDescriptionArray)
}


testimonialAddButton.onclick = function () {
    
    testimonialHeaderArray.push(testimonialHeader.value);
    customerNameArray.push(customerName.value);
    testimonialHeader.value = "";
    customerName.value = "";
    console.log(testimonialHeaderArray + customerNameArray)
}



submitButton.onclick = function () {

    let data = [
        {
            "BrandName": brandName.value,
            "HeadLine": headLine.value,
            "Slogan": slogan.value,
            "ServiceHeader": serviceHeaderArray,
            "ServiceDescription": serviceDescriptionArray,
            "ProjectHeader": projectHeaderArray,
            "ProjectDescription": projectDescriptionArray,
            "TestimonialText": testimonialHeaderArray,
            "CustomerName": customerNameArray,
            "Phone": phone.value,
            "Email": email.value,
            "Address": address.value,
            "SocialMediaLink": socialMediaLink.value
        }

    ]
    



    fetch("http://localhost:8000/api/createHome", {
    
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
    
    
    }).then((res) => res.text())
        .then((data) => {
            link="../api/getHome/"+data
            browsingLink.href = link;
            browsingLink.style.display = "contents";
        
        })

    
   
}




</script>




</body>
</html>
