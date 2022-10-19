let geoitem = document.querySelector('.geo-tags');
console.log(geoitem);
    geoitem.addEventListener('click', (e) => {
        let target = e.target;
        if(target.classList.contains('circle')){
            
            geoitem.querySelector('.active').classList.remove('active');
            target.classList.add('active');
            document.querySelector('.image-box .active').classList.remove('active');
            document.querySelector(`.image-box .${target.id}`).classList.add('active');
        }
    });
    let share = document.querySelector('.icon-share');
    let social = document.querySelector('.sh-socials-icons');
    social.classList.remove('active');
    share.addEventListener('click', ()=>{
        social.classList.toggle('active');
        share.classList.toggle('active');
    });