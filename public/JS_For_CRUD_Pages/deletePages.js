let searchBar = document.getElementById('searchBar');
let deleteButton = document.getElementById('deleteButton');
let response = document.getElementById('response');




deleteButton.onclick = function () {
    response.innerHTML=''
        
    
    id = searchBar.value 

    fetch("http://localhost:8000/api/deleteHome/" + id)
        .then((res) => res.json())
        .then((data) => {
           response.innerHTML=data.response
        
        })
        .catch(error => {
            console.error('Error:', error);
        })
    



}
