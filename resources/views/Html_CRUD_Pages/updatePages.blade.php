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

     <!-- Main Content -->
     <div class="container mt-4">
        <h2 class="mb-4">Enter The ID</h2>

        <!-- Search Bar -->
        <form class="d-flex">
            <input id="searchBar" class="form-control me-2" type="search" placeholder="Landing Page Id" aria-label="Search">
            <button id="searchButton" class="btn btn-outline-primary" type="button">Search</button>
        </form>
    </div>

    <div class="container mt-4">
      
        <h2 class="mb-4 text-center">Update The Following Informations</h2>
       

       
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
                            <button id="servicePreButton" type="button" class="btn btn-info mt-4">Pre</button>
                       
                            <button id="serviceAddButton" type="button" class="btn btn-info mt-4">Add</button>
                       
                            <button id="serviceNextButton" type="button" class="btn btn-info mt-4">Next</button>
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
                            <button id="projectPreButton" type="button" class="btn btn-info mt-4">Pre</button>
                       
                            <button id="projectAddButton" type="button" class="btn btn-info mt-4">Add</button>
                            
                        <button id="projectNextButton" type="button" class="btn btn-info mt-4">Next</button>
                        </div>
                    </div>
        
                    <!-- Row 3 -->
                    <div class="row">
                        <!-- Pair 3 -->
                        <div class="col">
                            <label for="testimonialHeader" class="form-label">Testimonial Header</label>
                            <input type="text" class="form-control" id="testimonialHeader" placeholder="Header ">
                        </div>
                        <div class="col">
                            <label for="customerName" class="form-label">Customer Name</label>
                            <textarea class="form-control" id="customerName" rows="3" placeholder="Description"></textarea>
                        </div>
                        <div class="col text-center">
                        <button id="testimonialPreButton" type="button" class="btn btn-info mt-4">Pre</button>
                       
                        <button id="testimonialAddButton" type="button" class="btn btn-info mt-4">Add</button>
                         
                        <button id="testimonialNextButton" type="button" class="btn btn-info mt-4">Next</button>
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
                <button id="submitButton" type="button" class="btn btn-primary">Update The Page</button>
                <a id="browsingLink"  class="text-center" style="display:none;"><button class="btn btn-info">Go To The Updated Page</button></a>
            </div>


            <br><br><br>
        </form>

            </div>
        
            

            


            <br><br><br>
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
let searchBar = document.getElementById('searchBar');
let searchButton = document.getElementById('searchButton');
let browsingLink = document.getElementById('browsingLink');
let submitButton = document.getElementById('submitButton');

let servicePreButton = document.getElementById('servicePreButton');
let serviceNextButton = document.getElementById('serviceNextButton');
let projectPreButton = document.getElementById('projectPreButton');
let projectNextButton = document.getElementById('projectNextButton');
let testimonialPreButton = document.getElementById('testimonialPreButton');
let testimonialNextButton = document.getElementById('testimonialNextButton');



let serviceHeaderArray = [];
let serviceDescriptionArray = [];
let projectHeaderArray = [];
let projectDescriptionArray = [];
let testimonialHeaderArray = [];
let customerNameArray = [];

let id;
let link;

let serviceIndex=0,projectIndex=0,testimonialIndex=0


serviceNextButton.onclick = function () {

    if (serviceIndex == -1) {
        serviceIndex++;
        serviceHeader.value = serviceHeaderArray[0]
        serviceDescription.value = serviceDescriptionArray[0]
        return
    }

    if (serviceIndex == (serviceHeaderArray.length - 1)) {

        serviceHeaderArray[serviceIndex] = serviceHeader.value          //save the current state
        serviceDescriptionArray[serviceIndex]=serviceDescription.value  //save the current state
        serviceHeader.value = serviceHeaderArray[0]
        serviceDescription.value = serviceDescriptionArray[0]
        serviceIndex = 0
        return

    }

    if (serviceIndex >= 0) {
        serviceHeaderArray[serviceIndex] = serviceHeader.value          //save the current state
        serviceDescriptionArray[serviceIndex]=serviceDescription.value  //save the current state
        serviceIndex++;
        serviceHeader.value = serviceHeaderArray[serviceIndex]
        serviceDescription.value=serviceDescriptionArray[serviceIndex]
    }
}

servicePreButton.onclick = function () {

    if (serviceIndex == -1) {
        serviceIndex++;
        serviceHeader.value = serviceHeaderArray[0]
        serviceDescription.value = serviceDescriptionArray[0]
        return
    }

    if (serviceIndex > 0 && serviceIndex < serviceHeaderArray.length) {
        serviceHeaderArray[serviceIndex] = serviceHeader.value          //save the current state
        serviceDescriptionArray[serviceIndex]=serviceDescription.value  //save the current state
        serviceIndex--;
        serviceHeader.value = serviceHeaderArray[serviceIndex]
        serviceDescription.value = serviceDescriptionArray[serviceIndex]
        return
    }
    if (serviceIndex == 0) {
        serviceHeaderArray[serviceIndex] = serviceHeader.value          //save the current state
        serviceDescriptionArray[serviceIndex]=serviceDescription.value  //save the current state
        serviceIndex = serviceHeaderArray.length - 1;
        serviceHeader.value = serviceHeaderArray[serviceIndex]
        serviceDescription.value = serviceDescriptionArray[serviceIndex]
        
    }
    
}



projectNextButton.onclick = function () {

    if (projectIndex == -1) {
        projectIndex++;
        projectHeader.value = projectHeaderArray[0]
        projectDescription.value = projectDescriptionArray[0]
        return
    }


    if (projectIndex == (projectHeaderArray.length - 1)) {

        projectHeaderArray[projectIndex] =  projectHeader.value          //save the current state
        projectDescriptionArray[projectIndex]=projectDescription.value   //save the current state
        projectHeader.value = projectHeaderArray[0]
        projectDescription.value = projectDescriptionArray[0]
        projectIndex = 0
        return

    }

    if (projectIndex >= 0) {
        projectHeaderArray[projectIndex] =  projectHeader.value          //save the current state
        projectDescriptionArray[projectIndex]=projectDescription.value   //save the current state
        projectIndex++;
        projectHeader.value = projectHeaderArray[projectIndex]
        projectDescription.value=projectDescriptionArray[projectIndex]
    }
}

projectPreButton.onclick = function () {

    if (projectIndex == -1) {
        projectIndex++;
        projectHeader.value = projectHeaderArray[0]
        projectDescription.value = projectDescriptionArray[0]
        return
    }


    if (projectIndex > 0 && projectIndex < projectHeaderArray.length) {

        projectHeaderArray[projectIndex] =  projectHeader.value          //save the current state
        projectDescriptionArray[projectIndex]=projectDescription.value   //save the current state
        projectIndex--;
        projectHeader.value = projectHeaderArray[projectIndex]
        projectDescription.value = projectDescriptionArray[projectIndex]
        return
    }
    if (projectIndex == 0) {

        projectHeaderArray[projectIndex] =  projectHeader.value          //save the current state
        projectDescriptionArray[projectIndex]=projectDescription.value   //save the current state
        projectIndex = projectHeaderArray.length - 1;
        projectHeader.value = projectHeaderArray[projectIndex]
        projectDescription.value = projectDescriptionArray[projectIndex]
        
    }
    
}




testimonialNextButton.onclick = function () {

    if (testimonialIndex == -1) {
        testimonialIndex++;
        testimonialHeader.value = testimonialHeaderArray[0]
        customerName.value = customerNameArray[0]
        return
    }



    if (testimonialIndex == (testimonialHeaderArray.length - 1)) {
        testimonialHeaderArray[testimonialIndex] =  testimonialHeader.value          //save the current state
        customerNameArray[testimonialIndex]=customerName.value   //save the current state
       
        testimonialHeader.value = testimonialHeaderArray[0]
        customerName.value = customerNameArray[0]
        testimonialIndex = 0
        return

    }

    if (testimonialIndex >= 0) {

        testimonialHeaderArray[testimonialIndex] =  testimonialHeader.value          //save the current state
        customerNameArray[testimonialIndex]=customerName.value   //save the current state
        testimonialIndex++;
        testimonialHeader.value = testimonialHeaderArray[testimonialIndex]
        customerName.value = customerNameArray[testimonialIndex]
    }
}

testimonialPreButton.onclick = function () {

    if (testimonialIndex == -1) {
        testimonialIndex++;
        testimonialHeader.value = testimonialHeaderArray[0]
        customerName.value = customerNameArray[0]
        return
    }


    if (testimonialIndex > 0 && testimonialIndex < testimonialHeaderArray.length) {
        
        testimonialHeaderArray[testimonialIndex] =  testimonialHeader.value          //save the current state
        customerNameArray[testimonialIndex]=customerName.value   //save the current state
        testimonialIndex--;
        testimonialHeader.value = testimonialHeaderArray[testimonialIndex]
        customerName.value = customerNameArray[testimonialIndex]
        return
    }

    if (testimonialIndex == 0) {
        
        testimonialHeaderArray[testimonialIndex] =  testimonialHeader.value          //save the current state
        customerNameArray[testimonialIndex]=customerName.value   //save the current state
        testimonialIndex = testimonialHeaderArray.length - 1;
        testimonialHeader.value = testimonialHeaderArray[testimonialIndex]
        customerName.value = customerNameArray[testimonialIndex]
        
    }
    
}



serviceAddButton.onclick = function () {

    serviceHeaderArray.push(serviceHeader.value);
    serviceDescriptionArray.push(serviceDescription.value);
    serviceHeader.value = "";
    serviceDescription.value = "";
    serviceIndex=-1
}


projectAddButton.onclick = function () {
    
    projectHeaderArray.push(projectHeader.value);
    projectDescriptionArray.push(projectDescription.value);
    projectHeader.value = "";
    projectDescription.value = "";
    projectIndex=-1
    console.log(projectHeaderArray + projectDescriptionArray)
}


testimonialAddButton.onclick = function () {
    
    testimonialHeaderArray.push(testimonialHeader.value);
    customerNameArray.push(customerName.value);
    testimonialHeader.value = "";
    customerName.value = "";
    testimonialIndex=-1
    console.log(testimonialHeaderArray + customerNameArray)
}




searchButton.onclick = function () {
    
    id = searchBar.value 

    fetch("http://localhost:8000/api/getJsonHome/" + id)
        .then((res) => res.json())
        .then((data) => {
           
            serviceHeaderArray = data.ServiceHeader
            serviceDescriptionArray = data.ServiceDescription
            projectHeaderArray = data.ProjectHeader
            projectDescriptionArray = data.ProjectDescription
            testimonialHeaderArray = data.TestimonialText
            customerNameArray= data.CustomerName
            
            
            
            brandName.value = data.BrandName
            headLine.value = data.HeadLine
            slogan.value = data.Slogan
            phone.value = data.Phone
            email.value = data.Email
            address.value = data.Address
            socialMediaLink.value = data.SocialMediaLink
            serviceHeader.value=serviceHeaderArray[0]
            serviceDescription.value=serviceDescriptionArray[0]
            projectHeader.value=projectHeaderArray[0]
            projectDescription.value=projectDescriptionArray[0]
            testimonialHeader.value = testimonialHeaderArray[0]
            customerName.value = customerNameArray[0]
            
            
        
        })
        .catch(error => {
            console.error('Error:', error);
        })
    



}



submitButton.onclick = function () {

    serviceHeaderArray = serviceHeaderArray.filter(element => element)
    serviceDescriptionArray = serviceDescriptionArray.filter(element => element)
    projectHeaderArray = projectHeaderArray.filter(element => element)
    projectDescriptionArray = projectDescriptionArray.filter(element => element)
    testimonialHeaderArray = testimonialHeaderArray.filter(element => element)
    customerNameArray = customerNameArray.filter(element => element)
  

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
    



    fetch("http://localhost:8000/api/updateHome/"+id, {
    
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
    
    
    }).then((res) => res.text())
        .then((data) => {
            link="../api/getHome/"+data
            console.log(link)
            browsingLink.href = link;
            browsingLink.style.display = "contents";
        
        })
    
   
}




     </script>
</body>
</html>
