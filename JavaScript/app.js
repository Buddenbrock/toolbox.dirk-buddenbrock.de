class App {
    constructor() {
        this.initializeLoading();
        this.initializeSidebar();
        this.initializeAccordion();


        this.initializeIframeLoading();
    }

    initializeLoading() {
        console.info('JavaScript loaded.');
    }

    initializeSidebar() {
        let sidebar = document.querySelector('.sidebar'),
            sidebarButton = sidebar.querySelector('.sidebar__button');

        sidebarButton.addEventListener('click', () => {
            sidebar.classList.toggle('active');

            if(sidebar.classList.contains('active')) {
                sidebarButton.setAttribute('title', 'Sidebar schließen');
            } else {
                sidebarButton.setAttribute('title', 'Sidebar öffnen');
            }
        })
    }

    initializeAccordion() {
        let accordion = document.querySelectorAll('.accordion');

        Array.from(accordion).forEach(accordionElement => {
            let button = accordionElement.querySelector('.button'),
                panel = accordionElement.querySelector('.panel');

            button.addEventListener('click', () => {
                button.classList.toggle('active');
            })
        })
    }

    initializeIframeLoading() {
        const link = document.getElementsByClassName("iframe-link");
        const frame = document.getElementById("iframe");
        let i;

        for (i = 0; i < link.length; i++) {
            link[i].addEventListener("click", function() {
                const url = this.getAttribute("data-link");
                frame.src = url;
            });
        }
    }
}

let app = new App();