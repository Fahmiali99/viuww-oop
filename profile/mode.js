// let mode = localStorage.getItem('checkbox');
const chk = document.getElementById('chk');

chk.addEventListener('change', () => {
    document.body.classList.toggle('dark');
});

// // SOCIAL PANEL JS
// const tengah = document.querySelector('.floating-btn');
// const h4 = document.querySelector('.close-btn');
// const social_panel_container = document.querySelector('.social-panel-container');

// floating_btn.addEventListener('click', () => {
//     social_panel_container.classList.toggle('visible')
// });

// close_btn.addEventListener('click', () => {
//     social_panel_container.classList.remove('visible')
// });

// chk.onclick = function () {
//     h4.onclick = chk;
// }