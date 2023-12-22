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

