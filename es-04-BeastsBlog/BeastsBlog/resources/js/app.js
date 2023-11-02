import './bootstrap';

import 'bootstrap';


// fetch('/api/articoli')
//     .then(response => response.json())
//     .then(data => {

//         const htmlList = document.getElementById('articles');

//         for (let item of data) {
//             let el = document.createElement('li');
//             el.textContent = item.title;
            
//             htmlList.appendChild(el);

//             /* htmlList.innerHTML += '<li>' + item.title + '</li>'; */
//         }
//     })
//     .catch(errors => {
//         console.log(errors);
//     });




const deleteButtons = document.querySelectorAll('[data-bs-toggle="modal"]');
const deleteForm = document.getElementById('delete');

for(let deleteButton of deleteButtons) {
    deleteButton.addEventListener('click', (event) => {
        const action = event.target.getAttribute('data-action');

        deleteForm.setAttribute('action', action);

    });
}