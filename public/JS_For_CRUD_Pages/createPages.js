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







