var navbar = document.getElementsByClassName('navbar')[0]
var tabButtons = document.getElementsByClassName('tab-btn')
var tabContents = document.getElementsByClassName('tab-content')
var tabs = document.getElementsByClassName('tab')

function setup() {
    console.log(tabButtons)
    if (tabButtons.length == 0) {
        return;
    }
    tabButtons[0].val = 0
    tabButtons[1].val = 1
    tabButtons[0].addEventListener('click', activateTab)
    tabButtons[1].addEventListener('click', activateTab)
}

window.onscroll = function (e) {
    if (window.scrollY >= 60) {
        changeNavTop(0)
    } else {
        changeNavTop('')
    }
}

function changeNavTop(val) {
    navbar.style.top  = val
}

function activateTab(e) {
    let val = e.target.val
    if (tabs[val].classList.contains('active')) {
        return;
    }
    tabs[(val + 1) % 2].classList.remove('active');
    tabs[val].classList.add('active');
    tabContents[(val + 1) % 2].classList.remove('active');
    tabContents[val].classList.add('active');
}

setup();