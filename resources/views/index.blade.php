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
        <h1>Landing Page Managment Dashboard view </h1>
    </header>
    <a href="{{ url('/') }}"><button class="btn btn-outline-primary">Login / Logout</button></a>

    <!-- Button Groups -->
    <div class="container mt-4 text-center">
        <!-- Button Group -->
        <div class="btn-group " role="group" aria-label="Basic example">
            <a href="{{ url('getPages') }}">  <button type="button" class="btn btn-secondary">Get Pages</button></a>
            <a href="{{ url('createPages') }}">  <button type="button" class="btn btn-secondary">Create Pages</button></a>
            <a href="{{ url('updatePages') }}"> <button type="button" class="btn btn-secondary">Update Pages</button></a>
            <a href="{{ url('deletePages') }}">  <button type="button" class="btn btn-secondary">Delete Pages</button></a>
        </div>
    </div>

    <div id="allLinks" class="container mt-4 text-center">
        
        <h2>All Generated LandingPage's Link</h2>
        
    </div>
    
    
    
    
    

   
    <script >

    let allLinks = document.getElementById('allLinks');
    let fragment = document.createDocumentFragment();


fetch("http://localhost:8000/api/getAllHomes")
.then((res) => res.json())
    .then((data) => {


        for (let i = 0; i < data.length; i++){
            
            anchorTag = document.createElement('a')
            breakLine = document.createElement('br')

        anchorTag.innerHTML = data[i].BrandName
        anchorTag.href = 'api/getHome/' + data[i].id
        
        fragment.appendChild(anchorTag)
        fragment.appendChild(breakLine)
        
        console.log(data[i].BrandName)
    }


    allLinks.appendChild(fragment)
    

})
.catch(error => {
    console.error('Error:', error);
})


function appendLinks(data) {
   
}

</script>

 <!-- Bootstrap JS (Optional, if you need JS features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
