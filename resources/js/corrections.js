let navbar=document.querySelector('#navbarJS');
window.addEventListener('scroll',()=>{
    let scrolled=window.scrollY;
    if(scrolled>50){
        navbar.classList.add("scrolledNavbar");
    }else{
        navbar.classList.remove("scrolledNavbar");
    }
});