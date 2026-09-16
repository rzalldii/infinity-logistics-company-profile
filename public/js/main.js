(function () {
  "use strict";

  const selectBody = document.querySelector('body');
  const selectHeader = document.querySelector('#header');
  const scrollTop = document.querySelector('.scroll-top');
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');
  const waButton = document.getElementById('waButton');
  const waPopup = document.getElementById('waPopup');
  const waClose = document.getElementById('waClose');
  const navmenulinks = document.querySelectorAll('.navmenu a');

  function toggleScrolled() {
    if (!selectHeader) return;
    if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
    window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
  }

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }

  function toggleWaButton() {
    if (!waButton) return;
    if (window.scrollY > 100) {
      waButton.classList.add('show');
    } else {
      waButton.classList.remove('show');
      if (waPopup) waPopup.classList.remove('open');
    }
  }

  function navmenuScrollspy() {
    if (!navmenulinks.length) return;
    const position = window.scrollY + 200;
    navmenulinks.forEach(navmenulink => {
      if (!navmenulink.hash) return;
      const section = document.querySelector(navmenulink.hash);
      if (!section) return;
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        document.querySelectorAll('.navmenu a.active').forEach(link => link.classList.remove('active'));
        navmenulink.classList.add('active');
      } else {
        navmenulink.classList.remove('active');
      }
    });
  }

  let scrollTicking = false;
  function handleScroll() {
    if (!scrollTicking) {
      window.requestAnimationFrame(() => {
        toggleScrolled();
        toggleScrollTop();
        navmenuScrollspy();
        toggleWaButton();
        scrollTicking = false;
      });
      scrollTicking = true;
    }
  }

  window.addEventListener('scroll', handleScroll, { passive: true });
  window.addEventListener('load', () => {
    toggleScrolled();
    toggleScrollTop();
    navmenuScrollspy();
    toggleWaButton();
  });

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

  const navmenuEl = document.querySelector('#navmenu');
  if (navmenuEl) {
    navmenuEl.addEventListener('click', (e) => {
      if (selectBody && selectBody.classList.contains('mobile-nav-active') && e.target === navmenuEl) {
        mobileNavToogle();
      }
    });
  }

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && selectBody && selectBody.classList.contains('mobile-nav-active')) {
      mobileNavToogle();
      if (mobileNavToggleBtn) mobileNavToggleBtn.focus();
    }
  });

  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (selectBody && selectBody.classList.contains('mobile-nav-active')) {
        mobileNavToogle();
      }
    });
  });

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

  if (scrollTop) {
    scrollTop.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }

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
  window.addEventListener('load', aosInit);

  if (typeof GLightbox !== 'undefined') {
    GLightbox({
      selector: '.glightbox'
    });
  }

  if (typeof PureCounter !== 'undefined') {
    new PureCounter();
  }

  function initSwiper() {
    if (typeof Swiper === 'undefined') return;
    document.querySelectorAll(".init-swiper").forEach(function (swiperElement) {
      const configElement = swiperElement.querySelector(".swiper-config");
      if (!configElement) return;
      let config = JSON.parse(configElement.innerHTML.trim());

      if (swiperElement.classList.contains("swiper-tab") && typeof initSwiperWithCustomPagination === 'function') {
        initSwiperWithCustomPagination(swiperElement, config);
      } else {
        new Swiper(swiperElement, config);
      }
    });
  }
  window.addEventListener("load", initSwiper);

  window.addEventListener('load', function () {
    if (window.location.hash) {
      const section = document.querySelector(window.location.hash);
      if (section) {
        setTimeout(() => {
          let scrollMarginTop = getComputedStyle(section).scrollMarginTop;
          window.scrollTo({
            top: section.offsetTop - (parseInt(scrollMarginTop) || 0),
            behavior: 'smooth'
          });
        }, 100);
      }
    }
  });

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

})();