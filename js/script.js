let searchForm = document.querySelector('.search_form');

document.querySelector('.bx-search').onclick =() =>{
    searchForm.classList.toggle('active');
    menuBtn.classList.remove('active');
    loginBtn.classList.remove('active');
}

let loginBtn = document.querySelector('.showUser');

document.querySelector('.bx-user').onclick =() =>{
    loginBtn.classList.toggle('active');
    searchForm.classList.remove('active');
    menuBtn.classList.remove('active');
}


let menuBtn = document.querySelector('.navbar');

document.querySelector('.bx-menu').onclick =() =>{
    menuBtn.classList.toggle('active');
    searchForm.classList.remove('active');
    loginBtn.classList.remove('active');
}

window.onscroll =() =>{
    searchForm.classList.remove('active');
    menuBtn.classList.remove('active');
    loginBtn.classList.remove('active');
}


