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
            <input id="searchBar" class="form-control me-2" type="search" placeholder="Landing Page Id to be deleted" aria-label="Search">
            <button id="deleteButton" class="btn btn-outline-primary" type="button">Delete</button>
        </form>
    </div>



    <h2 id="response" class="text-center text-info"></h2>



    <!-- Bootstrap JS (Optional, if you need JS features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        let searchBar = document.getElementById('searchBar');
let deleteButton = document.getElementById('deleteButton');
let response = document.getElementById('response');




deleteButton.onclick = function () {
    response.innerHTML=''
        
    
    id = searchBar.value 

    fetch("http://localhost:8000/api/deleteHome/" + id)
        .then((res) => res.json())
        .then((data) => {

            if(data.response=="Deleted Successfully !")
                response.classList.replace('text-danger','text-info')
            else 
                response.classList.replace('text-info','text-danger')

                  response.innerHTML=data.response
        
        })
        .catch(error => {
            console.error('Error:', error);
        })
    



}

    </script>
</body>
</html>
