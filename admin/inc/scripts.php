<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

<script>
    function alert(type, msg, position='body') {
        let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';
        let bg_color = (type == 'success') ? '#d1e7dd' : '#f8d7da';
        let text_color = (type == 'success') ? '#0f5132' : '#842029';
        let border_color = (type == 'success') ? '#badbcc' : '#f5c2c7';

        let element = document.createElement('div');
        element.innerHTML = `
            <div class="alert ${bs_class} alert-dismissible fade show " role="alert" 
                style="background-color: ${bg_color}; color: ${text_color}; border: 1px solid ${border_color}; border-radius: 0.375rem; box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15); animation: slideInRight 0.3s ease-out;">
                <strong class="me-2">${msg}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `;

        if(position == 'body'){
            document.body.append(element);
            element.classList.add('custom-alert');
        }
        else{
            document.getElementById(position).appendChild(element)
        }


        // Get or create alert container
        let container = document.getElementById('alert-container');
        if (!container) {
            container = document.createElement('div');
            container.id = 'alert-container';
            container.style.cssText = 'position: fixed; top: 80px; right: 25px; z-index: 1050; min-width: 350px;';
            document.body.appendChild(container);
        }

        container.appendChild(element);

        // Auto remove after 4 seconds
        // setTimeout(function() {
        //     element.querySelector('.alert').classList.remove('show');
        //     setTimeout(function() {
        //         element.remove();
        //     }, 150);
        // }, 4000);

        setTimeout(remAlert,2000);
    }

    function remAlert(){
        document.getElementsByClassName('alert')[0].remove();
    }

    function setActive() {
        let navbar = document.getElementById('dashboard-menu');
        let a_tags = navbar.getElementsByTagName('a');

        for (i = 0; i < a_tags.length; i++) {
            let file = a_tags[i].href.split('/').pop();
            let file_name = file.split('.')[0];

            if (document.location.href.indexOf(file_name) >= 0) {
                a_tags[i].classList.add('active');
            }
        }
    }
    setActive();
</script>

<style>
    @keyframes slideInRight {
        from {
            transform: translateX(100%);
            opacity: 0;
        }

        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    .custom-alert {
        margin-bottom: 1rem;
    }
</style>