/**
* Template Name: Mentor
* Updated: Mar 10 2023 with Bootstrap v5.2.3
* Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }
  ////////////////////////////////////////////////////////////////////////////
  // whats button
  ////////////////////////////////////////////////////////////////////////////
  // const whatsapp = document.querySelector('.whatsapp4');
  // const newButton = document.getElementById('newButton');

  // if (whatsapp && newButton) {
  //   const checkScroll = () => {
  //     const isScrollGreaterThan100 = window.scrollY > 100;
  //     whatsapp.classList.toggle('active', isScrollGreaterThan100);
  //     newButton.style.display = (isScrollGreaterThan100 && !whatsapp.classList.contains('active')) ? 'block' : 'none';
  //   };

  //   const openNewButton = () => {
  //     newButton.style.display = (newButton.style.display === 'none') ? 'block' : 'none';
  //   };

  //   window.addEventListener('load', checkScroll);
  //   window.addEventListener('scroll', checkScroll);
  //   whatsapp.addEventListener('click', openNewButton);
  // }

  ////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////
  
  // let backtotop = select('.back-to-top')
  const whatsappButton = document.querySelector('.whatsapp-button');
  const whatsappWindow = document.querySelector('.whatsapp-window');
  const whatsappWindowCross = document.querySelector('.bi-x-circle');
  
  if(whatsappButton){
    const openWhatsappWindow = () => {
        whatsappWindow.style.display = 'block';
        whatsappButton.classList.add('stop-animation');
    };
    const closeWhatsappWindow = () => {
        whatsappWindow.style.display = 'none';
        whatsappButton.classList.remove('stop-animation');
    };
    
    whatsappButton.addEventListener('click', openWhatsappWindow);
    whatsappWindowCross.addEventListener('click', closeWhatsappWindow);
  }

  ////////////////////////////////////////////////////////////////////////////
  // whats button end
  ////////////////////////////////////////////////////////////////////////////

  ////////////////////////////////////////////////////////////////////////////
  // ui button
  ////////////////////////////////////////////////////////////////////////////
  const uiButton = document.querySelector('.ui');
  const header = document.getElementById('header');
  const footer = document.getElementById('footer');
  const body = document.body;

  if(uiButton){
    const switchUi = () => {
        header.classList.toggle('active');
        footer.classList.toggle('active');
        body.classList.toggle('active');
        // Store the current theme preference in localStorage
        const isDarkModeEnabled = body.classList.contains('active');
        localStorage.setItem('theme', isDarkModeEnabled ? 'dark' : 'light');

        // Update button text based on theme
        uiButton.textContent = isDarkModeEnabled ? 'Light' : 'Dark';

        // Toggle active class on navbar links
        const navbarLinks = document.querySelectorAll('.navbar a');
        navbarLinks.forEach(link => {
            link.classList.toggle('active', isDarkModeEnabled);
        });
    };
    
    uiButton.addEventListener('click', switchUi);

    // Check if a theme preference is stored in localStorage
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme) {
        // Apply the saved theme
        // if (savedTheme === 'dark') {
        //     header.classList.add('active');
        //     footer.classList.add('active');
        //     body.classList.add('active');
        // }
        if (savedTheme) {
          // Apply the saved theme
          const isDarkModeEnabled = savedTheme === 'dark';
          header.classList.toggle('active', isDarkModeEnabled);
          footer.classList.toggle('active', isDarkModeEnabled);
          body.classList.toggle('active', isDarkModeEnabled);
  
          // Update button text based on theme
          uiButton.textContent = isDarkModeEnabled ? 'Light' : 'Dark';

          // Apply active class to navbar links
          const navbarLinks = document.querySelectorAll('.navbar a');
          navbarLinks.forEach(link => {
              link.classList.toggle('active', isDarkModeEnabled);
          });
      }
    }
  }
  ////////////////////////////////////////////////////////////////////////////
  // ui button end
  ////////////////////////////////////////////////////////////////////////////

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  /**
   * Preloader
   */
  let preloader = select('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove()
    });
  }

  /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },

      1200: {
        slidesPerView: 2,
        spaceBetween: 20
      }
    }
  });

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

  /**
   * Initiate Pure Counter 
   */
  new PureCounter();

})()