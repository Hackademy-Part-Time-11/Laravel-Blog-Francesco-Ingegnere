import './bootstrap';

import 'bootstrap';


fetch('/api/articoli')
    .then(response => response.json())
    .then(data => {

        const htmlList = document.getElementById('articles');

        for (let item of data) {
            let el = document.createElement('li');
            el.textContent = item.title;
            
            htmlList.appendChild(el);

            /* htmlList.innerHTML += '<li>' + item.title + '</li>'; */
        }
    })
    .catch(errors => {
        console.log(errors);
    });