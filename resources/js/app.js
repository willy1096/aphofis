require('./bootstrap');

import AOS from 'aos';

AOS.init({
    duration:3000
});
// Loading
document.addEventListener("DOMContentLoaded", function (event) {
    document.getElementById('btn-menu-toggle').addEventListener('click', function(){
        this.classList.toggle('active');
        document.querySelector('.sidebar-left').classList.toggle('active');
    }, false);

	setTimeout(() => {
        $('.loading').fadeOut(350);
    }, 1000);
});