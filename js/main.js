var ready = (callback) => {
    if (document.readyState != 'loading') {
        callback()
    } else {
        document.addEventListener('DOMContentLoaded', callback)
    }
}

ready(() => {

    pageRedirectionSetup()
    
    navbarSetup()

    carouselSetup()

    modalSetup()

    function pageRedirectionSetup() {
        const links = document.getElementsByClassName('linkJS')

        for (let i = 0; i < links.length; i++) {
            links[i].addEventListener('click', (e) => {
                e.preventDefault()
                window.location.assign(links[i].href)
            })
        }
    }

    function navbarSetup() {

        const nav_icon = document.getElementById('nav-toggle')
        const nav_menu = document.getElementById('nav-menu')

        /* nav drop-down menu */
        nav_icon.addEventListener('click', (e) => {
            e.preventDefault()

            // set exit icon
            nav_icon.classList.toggle('active')
            
            if (!nav_menu.classList.contains('active')) {
                // display menu
                nav_menu.classList.add('active')
                nav_menu.style.height = 'auto'

                // get computed height of menu
                let height = nav_menu.clientHeight + 'px'

                // set height of menu to 0 to trigger the slide down animation
                nav_menu.style.height = '0px'

                // set 100ms delay for slide down effect
                setTimeout(() => {
                    nav_menu.style.height = height
                }, 100);
            } else {
                // set height of menu to 0 to trigger the slide up animation
                nav_menu.style.height = '0px'

                // collapse menu when animation finishes
                nav_menu.addEventListener('transitionend', () => {
                    nav_menu.classList.remove('active')
                }, {once: true})
            }
        })
    }

    function carouselSetup() {
        const carousel = document.getElementById('carousel')

        if (carousel == null) { return }

        if (carousel.classList[2] == 'carouselJS') {
            renderManualCarousel()
        } else {
            renderAutoCarousel()
        }

        function renderAutoCarousel() {
            let slideIndex = -1
            const prev_btn = carousel.querySelector('#prev-slide-btn')
            const next_btn = carousel.querySelector('#next-slide-btn')
            const slides = carousel.querySelectorAll('.carousel__slide')
            const indicators = carousel.querySelectorAll('.carousel__indicator')

            // hide carousel buttons
            prev_btn.style.display = 'none'
            next_btn.style.display = 'none'

            renderSlides()

            function renderSlides() {
            
                // reset slide display
                for (let i = 0; i < slides.length; i++) {
                    slides[i].style.display = 'none'
                }

                slideIndex++

                if (slideIndex > slides.length - 1) {
                    slideIndex = 0
                }

                // reset slide indicator
                for (let i = 0; i < indicators.length; i++) {
                    indicators[i].className = indicators[i].className.replace(' slide-active', '')
                }

                // render slide and indicator
                slides[slideIndex].style.display = 'block'
                indicators[slideIndex].className += ' slide-active'

                setTimeout(renderSlides, 2000); // change slide every 3 seconds
            }
        }

        function renderManualCarousel() {
            let slideIndex = 0
            const prev_btn = carousel.querySelector('#prev-slide-btn')
            const next_btn = carousel.querySelector('#next-slide-btn')

            // display carousel buttons
            prev_btn.style.display = 'block'
            next_btn.style.display = 'block'

            renderSlides() // displays default slide

            carousel.addEventListener('mouseover', (e) => {
                e.preventDefault()
                prev_btn.style.opacity = '1'
                next_btn.style.opacity = '1'
            })
    
            carousel.addEventListener('mouseout', (e) => {
                e.preventDefault()
                prev_btn.style.opacity = '0'
                next_btn.style.opacity = '0'
            })
    
            prev_btn.addEventListener('click', (e) => {
                e.preventDefault()
                --slideIndex
                renderSlides()
            })
    
            next_btn.addEventListener('click', (e) => {
                e.preventDefault()
                ++slideIndex
                renderSlides()
            })

            function renderSlides() {
                
                const slides = carousel.querySelectorAll('.carousel__slide')
                const indicators = carousel.querySelectorAll('.carousel__indicator')
                
                if (slideIndex < 0) {
                    slideIndex = slides.length - 1
                }
    
                if (slideIndex > slides.length - 1) {
                    slideIndex = 0
                }
    
                // reset slide display
                for (var i = 0; i < slides.length; i++) {
                    slides[i].style.display = 'none'
                }
    
                // reset slide indicator
                for (var i = 0; i < indicators.length; i++) {
                    indicators[i].className = indicators[i].className.replace(' slide-active', '')
                }
    
                // render slide and indicator
                slides[slideIndex].style.display = 'block'
                indicators[slideIndex].className += ' slide-active'
            }
        }
    }

    function modalSetup() {
        const modal = document.getElementById('modal')
        const modal_open_btn = document.getElementById('modal-open-btn')
        const modal_close_btn = document.getElementById('modal-exit-icon')
        const modal_title = document.getElementById('modal-title')
        const modal_price = document.getElementById('modal-price')
        const modal_fee = document.getElementById('modal-fee')
        const modal_total = document.getElementById('modal-total')
        const input_desc = document.getElementById('modal-input-desc')
        const filename = window.location.pathname
        const fee = 0.029

        if (modal == null) { return }

        if (filename.search('programs') != -1) {
            const cost = 100;
            
            modal_title.innerHTML = 'Volleyball Training Sessions'
            modal_price.innerHTML = cost.toString()
            modal_fee.innerHTML = (cost * fee).toFixed(2).toString()
            modal_total.innerHTML = '$' + ((cost * fee) + cost).toFixed(2).toString()
            input_desc.value = 'training'
        } else {
            const cost = 150

            modal_title.innerHTML = 'Tournament Registration'
            modal_price.innerHTML = cost.toString()
            modal_fee.innerHTML = (cost * fee).toFixed(2).toString()
            modal_total.innerHTML = '$' + ((cost * fee) + cost).toFixed(2).toString()
            input_desc.value = 'tournament'

            // create additional input for tourn registration
            let input = document.createElement('input')
            input.classList.add('modal__input')
            input.type = 'text'
            input.name = 'team_name'
            input.placeholder = 'Team name'
            input.autocomplete = 'off'
            input.required = true

            // create additional subtitle to guide user
            let subtitle = document.createElement('div')
            subtitle.classList.add('modal__subtitle')
            subtitle.innerHTML = 'Please fill in team information:'

            // add elements to html
            input_desc.insertAdjacentElement('afterend', subtitle)
            subtitle.insertAdjacentElement('afterend', input)
        }

        modal_open_btn.addEventListener('click', openModal)

        modal_close_btn.addEventListener('click', closeModal)

        function openModal() {
            modal.style.display = 'block'
            // prevent body from scrolling back to the top after open
            const scrollY = document.body.scrollTop
            document.body.style.position = 'fixed'
            document.body.style.top = '-' + scrollY + 'px'
        }

        function closeModal() {
            modal.style.display = 'none'
            // ensure that scroll location is maintained after close
            const scrollY = document.body.style.top;
            document.body.style.position = ''
            document.body.style.top = ''
            window.scrollTo(0, parseInt(scrollY) * -1)
        }
    }
})