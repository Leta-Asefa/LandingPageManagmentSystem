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
