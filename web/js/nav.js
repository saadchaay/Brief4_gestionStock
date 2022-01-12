const navbar_content = (document.getElementById("navbar-content")) ;
const open_nav = document.getElementById('open-nav');
const close_nav = document.getElementById('close-nav');

//  Display Menu 
    open_nav.addEventListener('click' , () => {
        navbar_content.className = "navbar" ;
        open_nav.className = "close-cta" ;
        close_nav.className = "open-icon" ;
    });
    
    close_nav.addEventListener('click' , () => {
        navbar_content.className = "close-nav" ;
        close_nav.className = "close-cta" ;
        open_nav.className = "open-icon" ;
    });


// create div element bottom of active page
const divElm = document.createElement('div');
divElm.setAttribute('style','border-bottom: 3px solid #FF6600;width:30px;');
const icon_nav = document.getElementsByClassName('iconify');
const navList = document.getElementById("navbar-list");
const listArray = 
        [navList.childNodes[1].childNodes[0], navList.childNodes[3].childNodes[0], navList.childNodes[5].childNodes[0], navList.childNodes[7].childNodes[0]];

        if(listArray[1].getAttribute('active') == 'true') {
            navList.childNodes[3].appendChild(divElm);
            icon_nav[1].setAttribute('style','color: #FF6600;');
        }
        if(listArray[2].getAttribute('active') == 'true') {
            navList.childNodes[5].appendChild(divElm);
            icon_nav[2].setAttribute('style','color: #FF6600;');
        }
        if(listArray[3].getAttribute('active') == 'true') {
            navList.childNodes[7].appendChild(divElm);
            icon_nav[3].setAttribute('style','color: #FF6600;');
        }