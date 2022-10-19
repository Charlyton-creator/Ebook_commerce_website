const allSidemenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSidemenu.forEach(item=>{
    const li = item.parentElement;
    item.addEventListener('click', function(){
        allSidemenu.forEach(i=>{
            i.parentElement.classList.remove('active');
        });
        li.classList.add('active');
    });
});
// Toggle menu bar
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');
menuBar.addEventListener('click', function(){
    sidebar.classList.toggle('hide');
})
if((window.innerWidth)<768){
    sidebar.classList.add('hide');
    console.log(sidebar.classList);
    console.log(window.innerWidth);
}else if((window.innerWidth)<576){
    const searchButton = document.querySelector('#content nav form .form-input button');
    const searchForm = document.querySelector('#content nav form');
    

    searchButton.addEventListener(click, function(){

    });
}