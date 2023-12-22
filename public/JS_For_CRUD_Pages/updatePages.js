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




















