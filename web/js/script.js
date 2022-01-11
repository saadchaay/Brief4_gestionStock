const navbar_content = (document.getElementById("navbar-content")) ;
const path_direct = (document.getElementById("path-direct")) ;
const open_nav = document.getElementById('open-nav');
const close_nav = document.getElementById('close-nav');

//  Display Menu 
    open_nav.addEventListener('click' , () => {
        navbar_content.className = "navbar" ;
        path_direct.className = "close-nav" ;
        open_nav.className = "close-cta" ;
        close_nav.className = "open-icon" ;
    });
    
    close_nav.addEventListener('click' , () => {
        navbar_content.className = "close-nav" ;
        path_direct.classList.remove('close-nav') ;
        close_nav.className = "close-cta" ;
        open_nav.className = "open-icon" ;
    });

// 