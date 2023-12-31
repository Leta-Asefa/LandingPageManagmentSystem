<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Template</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script defer src="../JS_For_CRUD_Pages/getPages.js"></script>
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
            <input id="searchBar" class="form-control me-2" type="search" placeholder="Landing Page Id to be retrived" aria-label="Search">
            <button id="getButton" class="btn btn-outline-primary" type="button">Get</button>
            
        </form>
        <a id="response" class="text-center"><a>
    </div>

    <br>




    <!-- Bootstrap JS (Optional, if you need JS features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    let searchBar = document.getElementById('searchBar');
let getButton = document.getElementById('getButton');
let response = document.getElementById('response');




getButton.onclick = function () {
    
    id = searchBar.value 
    response.innerHTML = ""

    fetch("http://localhost:8000/api/getHome/" + id)
        .then((res) => res.text())
        .then((html) => {
            if (html == "Invalid Id") {
                response.innerHTML = "Invalid Id"
                response.classList.add('text-danger')
                return
            }
            const newTab = window.open();
            newTab.document.write(html);
            response.innerHTML = "Opened in the next tab !"
            response.classList.replace('text-danger','text-info')
        
        })
        .catch(error => {
            console.error('Error:', error);
        })
    



}

    </script>

</body>
</html>
