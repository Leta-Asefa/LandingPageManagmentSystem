let searchBar = document.getElementById('searchBar');
let getButton = document.getElementById('getButton');
let response = document.getElementById('response');




getButton.onclick = function () {
    
    id = searchBar.value 

    fetch("http://localhost:8000/api/getHome/" + id)
        .then((res) => res.text())
        .then((html) => {
            const newTab = window.open();
            newTab.document.write(html);
        
        })
        .catch(error => {
            console.error('Error:', error);
        })
    



}
