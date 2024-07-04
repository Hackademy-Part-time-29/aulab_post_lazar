let navbar=document.querySelector('#navbarJS');
let logoNav=document.querySelector('#logoNav');
let logoCen=document.querySelector('#logoCentered');
window.addEventListener('scroll',()=>{
    let scrolled=window.scrollY;
    if(scrolled>50){
        navbar.classList.add("scrolledNavbar");
        navbar.classList.remove("navPadder");
        logoNav.classList.remove("logo");
        logoNav.classList.add("logoScrolled");
        logoCen.classList.remove("centerLogo");
        logoCen.classList.add("centerLogoSmall");
    }else{
        navbar.classList.remove("scrolledNavbar");
        navbar.classList.add("navPadder");
        logoNav.classList.add("logo");
        logoCen.classList.add("centerLogo");
    }
});