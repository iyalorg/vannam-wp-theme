function switchMenu(){
    var menuIcon = document.getElementById('menu-icon')
    var icon = document.querySelector('#menu-icon i')
    var menuItems = document.getElementById('menu-items')
    if(menuIcon.className === 'open'){
        menuIcon.className = ''
        icon.className = 'ri-menu-line'
        menuItems.style.display = ''
    }else{
        menuIcon.className = 'open'
        icon.className = 'ri-close-fill'
        menuItems.style.display = 'flex'
    }
}