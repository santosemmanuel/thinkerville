  
    window.addEventListener('DOMContentLoaded', event => {
        
        // Open the side navigation
        const sidebarToggle = document.body.querySelector('#sidebarOpen');

        if (sidebarToggle ) {
            sidebarToggle.addEventListener('click', event => {
                event.preventDefault();
                document.body.classList.remove('sb-sidenav-toggled');
                sidebarToggle.classList.add('d-none');
            });
        }

        // Close the side navigation
        const sidebarClose = document.body.querySelector('#sidebarClose');
        if(sidebarClose) {
            sidebarClose.addEventListener('click', event => {
                event.preventDefault();
                document.body.classList.add('sb-sidenav-toggled');
                sidebarToggle.classList.remove('d-none');
            });
            
        }

    });