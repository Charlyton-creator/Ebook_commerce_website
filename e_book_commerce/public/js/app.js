searchForm = document.querySelector('.search-form');
const sign_in_btn = document.querySelector('#sign-in-btn');
const sign_up_btn = document.querySelector('#sign-up-btn');
const container = document.querySelector('.container');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
}

window.onscroll = () =>{
    searchForm.classList.remove('active');
    if(window.scrollY >80){
        document.querySelector('.header .header-2').classList.add('active');
    }else{
        document.querySelector('.header .header-2').classList.remove('active');
    }

}
window.onload = () =>{

    if(window.scrollY >80){
        document.querySelector('.header .header-2').classList.add('active');
    }else{
        document.querySelector('.header .header-2').classList.remove('active');
    }
    //fadeOut();
}

/*function loader(){
    document.querySelector('.loader-container').classList.add('active');
}
function fadeOut(){
    setTimeout(loader, 4000);
}*/

sign_up_btn.addEventListener('click', ()=>{
  container.classList.add('sign-up-mode');  
});
sign_in_btn.addEventListener('click', ()=>{
    container.classList.remove('sign-up-mode');  
  })