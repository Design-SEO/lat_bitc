document.addEventListener("DOMContentLoaded", () => {
    //Мобильное меню
    const mobileMenu = document.querySelector('.header_menu_mobile__1xlJN');
    const openMenuBtn = document.querySelector('.header_menu__VIL4o');
    const closeMenuBtn = document.querySelector('.header_close_btn__ymcBI');
    const linksMenuBtn = document.querySelectorAll('.header_align_mobile__i_v6n ul li');

    function openMenu() {
        if (mobileMenu.style.display !== 'block') {
            mobileMenu.style.display = 'block';
        }
    }
    function closeMenu() {
        if (mobileMenu.style.display === 'block') {
            mobileMenu.style.display = 'none';
        }
    }

    openMenuBtn.addEventListener('click', openMenu);
    closeMenuBtn.addEventListener('click', closeMenu);
    linksMenuBtn.forEach(link => link.addEventListener('click', closeMenu));
})