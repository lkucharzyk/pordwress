const hamBtn = document.querySelector('#ham-btn');
const hamMenu = document.querySelector('#s-main-nav-hamburger ul');

function menuSwitch(){
    if (hamMenu.classList.contains('h-closed')){
        hamMenu.classList.remove('h-closed');
        hamMenu.classList.add('h-open');
    }else{
        hamMenu.classList.remove('h-open');
        hamMenu.classList.add('h-closed');
    }
}
hamBtn.addEventListener('click', menuSwitch);