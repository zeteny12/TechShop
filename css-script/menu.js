//Reszponzivitas
function updateMenuText(){
    const fooldalSzoveg = document.querySelector('.fooldal');
    const fooldalSzovegKetto = document.querySelector('.fooldal-ketto');

    if (window.innerWidth < 767) {
        fooldalSzoveg.textContent = 'TechWeb';
        fooldalSzovegKetto.textContent = 'TechWeb';
    } else {
        fooldalSzoveg.textContent = 'Főoldal';
        fooldalSzovegKetto.textContent = 'Főoldal';
    }
}
document.addEventListener('DOMContentLoaded', updateMenuText);
window.addEventListener('resize', updateMenuText);


function showSideBar(){
    const sideBar = document.querySelector('.sideBar');
    sideBar.style.display = 'flex';
}

function hideSideBar(){
    const sideBar = document.querySelector('.sideBar');
    sideBar.style.display = 'none';
}