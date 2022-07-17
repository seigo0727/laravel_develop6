document.addEventListener('DOMContentLoaded', function(){
    let btnToggle = document.querySelector('.header .btn-nav-toggle');
    let sideMenu = document.querySelector('#aside');
    let sideMenuBackdrop = document.querySelector('.sidebar-backdrop');

    if(btnToggle) {
        btnToggle.addEventListener('click', function (e) {
            e.preventDefault();

            if (sideMenu.offsetLeft < 0 && !sideMenu.classList.contains('hide')) {
                sideMenu.classList.add('show');
                sideMenuBackdrop.classList.add('show');
            } else if (sideMenu.classList.contains('hide')) {
                sideMenu.classList.remove('hide');
                sideMenuBackdrop.classList.add('show');
            } else {
                if (sideMenu.classList.contains('show')) {
                    sideMenu.classList.remove('show');
                } else {
                    sideMenu.classList.add('hide');
                }
                sideMenuBackdrop.classList.remove('show');
            }
        });
    }

    // Sidebar Backdrop
    if(sideMenuBackdrop) {
        sideMenuBackdrop.addEventListener('click', function (e) {
            e.preventDefault();

            if (sideMenu.classList.contains('show')) {
                sideMenu.classList.remove('show');
            } else {
                sideMenu.classList.add('hide');
            }
            sideMenuBackdrop.classList.remove('show');
        });
    }

    // Sidebar
    const aside = document.querySelector('#aside');
    const sidebarTop = document.querySelector('#aside .sidebar-top');
    const sidebarContent = document.querySelector('#aside .sidebar-content');

    if(sidebarContent && sidebarTop) {
        sidebarContent.style.height = (window.innerHeight - sidebarTop.offsetHeight).toString() + 'px';

        const sidebarContentObserver = new ResizeObserver((entries, observer) => {
            const innerHeight = window.innerHeight;
            const height = sidebarTop.offsetHeight;
            sidebarContent.style.height = (innerHeight - height).toString() + 'px';
        });
        sidebarContentObserver.observe(sidebarTop);
        sidebarContentObserver.observe(aside);
    }

    // const siteSelector = document.querySelector('#siteSelector');
    // if(siteSelector){
    //     siteSelector.addEventListener('change', () => {
    //         const selectedValue = siteSelector.options[siteSelector.selectedIndex].value;
    //         let url;
    //         if("" !== selectedValue && null !== selectedValue) {
    //             url = window._constants.admin_home_url + "/sites/" + selectedValue;
    //         } else {
    //             url = window._constants.admin_home_url;
    //         }
    //         window.location.href = url;
    //     });
    // }
});