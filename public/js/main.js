(function () {
  "use strict";

  /**
   * 1. Cached DOM Elements
   */
  const selectBody = document.querySelector('body');
  const selectHeader = document.querySelector('#header');
  const scrollTop = document.querySelector('.scroll-top');
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');
  const navmenuEl = document.querySelector('#navmenu');
  const navmenulinks = document.querySelectorAll('.navmenu a');
  const waButton = document.getElementById('waButton');
  const waPopup = document.getElementById('waPopup');
  const waClose = document.getElementById('waClose');

  /**
   * 2. Header & Navigation Logic
   */
  // Sticky / Scrolled Header
  function toggleScrolled() {
    if (!selectHeader) return;
    if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
    window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
  }

  // Mobile Navigation Toggle
  function mobileNavToogle() {
    if (!selectBody) return;
    const isActive = selectBody.classList.toggle('mobile-nav-active');
    if (mobileNavToggleBtn) {
      const icon = mobileNavToggleBtn.querySelector('i') || mobileNavToggleBtn;
      icon.classList.toggle('bi-list', !isActive);
      icon.classList.toggle('bi-x', isActive);
      mobileNavToggleBtn.setAttribute('aria-expanded', isActive ? 'true' : 'false');
    }
  }

  if (mobileNavToggleBtn) {
    mobileNavToggleBtn.addEventListener('click', mobileNavToogle);
  }

  // Close mobile nav when clicking on backdrop
  if (navmenuEl) {
    navmenuEl.addEventListener('click', (e) => {
      if (selectBody && selectBody.classList.contains('mobile-nav-active') && e.target === navmenuEl) {
        mobileNavToogle();
      }
    });
  }

  // Close mobile nav on Escape key
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && selectBody && selectBody.classList.contains('mobile-nav-active')) {
      mobileNavToogle();
      if (mobileNavToggleBtn) mobileNavToggleBtn.focus();
    }
  });

  // Close mobile nav when clicking navigation links
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (selectBody && selectBody.classList.contains('mobile-nav-active')) {
        mobileNavToogle();
      }
    });
  });

  // Mobile Dropdown Submenus
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(toggleBtn => {
    function handleToggle(e) {
      e.preventDefault();
      e.stopImmediatePropagation();
      const parent = toggleBtn.parentNode;
      const isNowActive = parent.classList.toggle('active');
      toggleBtn.setAttribute('aria-expanded', isNowActive ? 'true' : 'false');
      if (parent.nextElementSibling) {
        parent.nextElementSibling.classList.toggle('dropdown-active');
      }
    }
    toggleBtn.addEventListener('click', handleToggle);
    toggleBtn.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ') {
        handleToggle(e);
      }
    });
  });

  // Navmenu Scrollspy
  let spySections = [];
  let currentActiveLink = null;

  function updateSpyPositions() {
    spySections = [];
    navmenulinks.forEach(link => {
      if (!link.hash) return;
      try {
        const section = document.querySelector(link.hash);
        if (section) {
          spySections.push({
            link,
            top: section.offsetTop,
            bottom: section.offsetTop + section.offsetHeight
          });
        }
      } catch (err) {
        // Ignore invalid selectors
      }
    });
  }

  function navmenuScrollspy() {
    if (!spySections.length) return;
    const position = window.scrollY + 200;
    let matchingLink = null;

    for (let i = 0; i < spySections.length; i++) {
      const item = spySections[i];
      if (position >= item.top && position <= item.bottom) {
        matchingLink = item.link;
        break;
      }
    }

    if (matchingLink !== currentActiveLink) {
      if (currentActiveLink) currentActiveLink.classList.remove('active');
      if (matchingLink) matchingLink.classList.add('active');
      currentActiveLink = matchingLink;
    }
  }

  // Smooth Deep Link to Hash with scroll margin compensation
  window.addEventListener('load', function () {
    if (window.location.hash) {
      const section = document.querySelector(window.location.hash);
      if (section) {
        setTimeout(() => {
          let scrollMarginTop = parseInt(getComputedStyle(section).scrollMarginTop) || 0;
          let targetY = section.getBoundingClientRect().top + window.scrollY - scrollMarginTop;
          window.scrollTo({
            top: targetY,
            behavior: 'smooth'
          });
        }, 100);
      }
    }
  });

  /**
   * 3. Floating Interactive Widgets (Scroll-to-Top & WhatsApp)
   */
  // Scroll-to-Top Button
  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }

  if (scrollTop) {
    scrollTop.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }

  // WhatsApp Floating Chat Widget
  function toggleWaButton() {
    if (!waButton) return;
    if (window.scrollY > 100) {
      waButton.classList.add('show');
    } else {
      waButton.classList.remove('show');
      if (waPopup) waPopup.classList.remove('open');
    }
  }

  if (waButton && waPopup) {
    const focusableSelectors = 'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])';

    function openPopup() {
      waPopup.classList.add('open');
      waButton.setAttribute('aria-expanded', 'true');
      const firstFocusable = waPopup.querySelector(focusableSelectors);
      if (firstFocusable) firstFocusable.focus();
    }

    function closePopup() {
      waPopup.classList.remove('open');
      waButton.setAttribute('aria-expanded', 'false');
      waButton.focus();
    }

    waButton.addEventListener('click', () => {
      if (waPopup.classList.contains('open')) {
        closePopup();
      } else {
        openPopup();
      }
    });

    if (waClose) {
      waClose.addEventListener('click', closePopup);
    }

    document.addEventListener('click', (e) => {
      if (waPopup.classList.contains('open') && !e.target.closest('.wa-hover-zone')) {
        closePopup();
      }
    });

    document.addEventListener('keydown', (e) => {
      if (!waPopup.classList.contains('open')) return;

      if (e.key === 'Escape') {
        closePopup();
        return;
      }

      if (e.key === 'Tab') {
        const focusables = waPopup.querySelectorAll(focusableSelectors);
        if (!focusables.length) return;
        const first = focusables[0];
        const last = focusables[focusables.length - 1];

        if (e.shiftKey && document.activeElement === first) {
          e.preventDefault();
          last.focus();
        } else if (!e.shiftKey && document.activeElement === last) {
          e.preventDefault();
          first.focus();
        }
      }
    });
  }

  /**
   * 4. Unified Scroll Performance Engine (Single requestAnimationFrame loop)
   */
  let scrollTicking = false;
  function handleScroll() {
    if (!scrollTicking) {
      window.requestAnimationFrame(() => {
        toggleScrolled();
        toggleScrollTop();
        if (spySections.length > 0) {
          navmenuScrollspy();
        }
        toggleWaButton();
        scrollTicking = false;
      });
      scrollTicking = true;
    }
  }

  window.addEventListener('scroll', handleScroll, { passive: true });
  window.addEventListener('resize', updateSpyPositions, { passive: true });
  window.addEventListener('load', () => {
    updateSpyPositions();
    toggleScrolled();
    toggleScrollTop();
    navmenuScrollspy();
    toggleWaButton();
  });

  /**
   * 5. Third-Party Plugin Initializations
   */
  // AOS (Animate on Scroll)
  function aosInit() {
    if (typeof AOS !== 'undefined') {
      AOS.init({
        duration: 600,
        easing: 'ease-in-out',
        once: true,
        mirror: false
      });
    }
  }
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', aosInit);
  } else {
    aosInit();
  }
  window.addEventListener('load', () => {
    if (typeof AOS !== 'undefined') AOS.refresh();
  });

  // Refresh AOS when switching Bootstrap tabs
  document.querySelectorAll('button[data-bs-toggle="tab"], a[data-bs-toggle="tab"]').forEach(tabTrigger => {
    tabTrigger.addEventListener('shown.bs.tab', () => {
      if (typeof AOS !== 'undefined') {
        AOS.refresh();
      }
    });
  });

  /**
   * Initiate glightbox
   */
  if (typeof GLightbox !== 'undefined') {
    GLightbox({
      selector: '.glightbox'
    });
  }

  // PureCounter
  if (typeof PureCounter !== 'undefined') {
    new PureCounter();
  }

  // Swiper Slider
  function initSwiper() {
    if (typeof Swiper === 'undefined') return;
    document.querySelectorAll(".init-swiper").forEach(function (swiperElement) {
      if (swiperElement.swiper) return;
      const configElement = swiperElement.querySelector(".swiper-config");
      if (!configElement) return;
      try {
        let config = JSON.parse(configElement.innerHTML.trim());
        new Swiper(swiperElement, config);
      } catch (e) {
        console.error("Invalid swiper configuration:", e);
      }
    });
  }
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initSwiper);
  } else {
    initSwiper();
  }
  window.addEventListener('load', initSwiper);

  // Marquee / Infinite Ticker Cloner
  function initMarquees() {
    document.querySelectorAll('.marquee-content').forEach(el => {
      if (el.dataset.cloned) return;
      el.dataset.cloned = 'true';
      const items = Array.from(el.children);
      items.forEach(item => {
        const clone = item.cloneNode(true);
        clone.setAttribute('aria-hidden', 'true');
        el.appendChild(clone);
      });
    });
  }
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initMarquees);
  } else {
    initMarquees();
  }

})();