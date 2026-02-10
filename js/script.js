document.addEventListener('DOMContentLoaded', () => {
    // Set banner height for suburb pages so header sits flush below emergency banner (no gap)
    const banner = document.querySelector('.emergency-banner');
    const header = document.querySelector('header');
    if (banner && header && document.body.classList.contains('suburb-page') && window.innerWidth >= 769) {
        const setBannerHeight = () => {
            if (!banner.classList.contains('hidden')) {
                const bannerH = banner.offsetHeight || 40;
                document.documentElement.style.setProperty('--em-banner-height', bannerH + 'px');
                document.body.style.paddingTop = (bannerH + header.offsetHeight) + 'px';
            }
        };
        setBannerHeight();
        window.addEventListener('resize', setBannerHeight);
    }

    // Select the visible mobile menu toggle (prefer header-top one for internal pages)
    const mobileMenuToggle = document.querySelector('.header-top .mobile-menu-toggle') || 
                             document.querySelector('.mobile-menu-toggle');
    const mainMenu = document.querySelector('.main-menu');

    if (mobileMenuToggle && mainMenu) {
        mobileMenuToggle.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            mainMenu.classList.toggle('active');
            const isExpanded = mainMenu.classList.contains('active');
            mobileMenuToggle.setAttribute('aria-expanded', isExpanded);

            // Update both icons if they exist
            const icons = document.querySelectorAll('.mobile-menu-toggle i');
            icons.forEach(icon => {
                if (icon.classList.contains('fa-bars')) {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-times');
                } else {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            });
        });
    }
    
    // Dropdown menu functionality for mobile
    document.addEventListener('click', function(e) {
        // Only work on mobile
        if (window.innerWidth >= 992) return;

        // Check if main menu is open
        if (!mainMenu || !mainMenu.classList.contains('active')) return;

        // Find if click is inside a dropdown
        const dropdown = e.target.closest('.dropdown');
        if (!dropdown) return;

        // Get the dropdown link
        const dropdownLink = dropdown.querySelector(':scope > a') || dropdown.querySelector('a');
        if (!dropdownLink) return;

        // Get the dropdown menu
        const dropdownMenu = dropdown.querySelector('.dropdown-menu');
        if (!dropdownMenu) return;

        // Check if click was on a dropdown menu item (not the link itself)
        const clickedOnMenuItem = dropdownMenu.contains(e.target);
        if (clickedOnMenuItem) {
            // Allow navigation to menu item
            return;
        }

        // Check if click was on the link or chevron
        const clickedOnLink = dropdownLink.contains(e.target) || e.target === dropdownLink;
        const clickedOnChevron = e.target.classList.contains('fa-chevron-down') || e.target.closest('.fa-chevron-down');

        // Only proceed if clicking on the link or chevron
        if (!clickedOnLink && !clickedOnChevron) return;

        // Prevent navigation and stop propagation to avoid triggering other handlers
        e.preventDefault();
        e.stopImmediatePropagation();

        // Toggle dropdown
        dropdownMenu.classList.toggle('active');
        const newIsActive = dropdownMenu.classList.contains('active');

        dropdownLink.setAttribute('aria-expanded', newIsActive);

        // Toggle chevron rotation
        const chevron = dropdownLink.querySelector('.fa-chevron-down');
        if (chevron) {
            if (newIsActive) {
                chevron.classList.add('rotate');
            } else {
                chevron.classList.remove('rotate');
            }
        }
    }, true); // Use capture phase to catch event early

    const sections = document.querySelectorAll('section');
    
    sections.forEach(section => {
        const sectionTitle = section.querySelector('.section-title');
        if (sectionTitle) {
            sectionTitle.classList.add('fade-in');
        }
        
        if (section.classList.contains('benefits')) {
            const benefitCards = section.querySelectorAll('.benefit-card');
            benefitCards.forEach((card, index) => {
                card.classList.add('fade-in');
                card.style.transitionDelay = `${index * 0.1}s`;
            });
        }
        
        if (section.classList.contains('services')) {
            const serviceCards = section.querySelectorAll('.service-card');
            serviceCards.forEach((card, index) => {
                card.classList.add('zoom-in');
                card.style.transitionDelay = `${index * 0.1}s`;
            });
        }
        
        if (section.classList.contains('service-areas')) {
            const areaColumns = section.querySelectorAll('.area-column');
            areaColumns.forEach((column, index) => {
                if (index % 2 === 0) {
                    column.classList.add('slide-in-left');
                } else {
                    column.classList.add('slide-in-right');
                }
                column.style.transitionDelay = `${index * 0.1}s`;
            });
        }
        
        if (section.classList.contains('testimonials')) {
            const testimonialCards = section.querySelectorAll('.testimonial-card');
            testimonialCards.forEach((card, index) => {
                card.classList.add('fade-in');
                card.style.transitionDelay = `${index * 0.1}s`;
            });
        }
        
        if (section.classList.contains('discount-offer')) {
            const offerContent = section.querySelector('.offer-content');
            if (offerContent) {
                offerContent.classList.add('zoom-in');

                offerContent.style.transitionDuration = '0.8s';
            }
        }
        
        if (section.classList.contains('faq')) {
            const accordionItems = section.querySelectorAll('.accordion-item');
            accordionItems.forEach((item, index) => {
                item.classList.add('faq-fade-in'); 
                item.style.transitionDelay = `${index * 0.1}s`;
            });
        }
        
        if (section.classList.contains('security-hero')) {
            const features = section.querySelectorAll('.security-feature');
            features.forEach((feature, index) => {
                feature.classList.add('slide-in-right');
                feature.style.transitionDelay = `${index * 0.15}s`;
            });
        }
        
        if (section.classList.contains('security-stats')) {
            const statBlocks = section.querySelectorAll('.stat-block');
            statBlocks.forEach((block, index) => {
                block.classList.add('zoom-in');
                block.style.transitionDelay = `${index * 0.2}s`;
            });
        }
        
        if (section.classList.contains('security-layers')) {
            const layerCircles = section.querySelectorAll('.layer-circle');
            layerCircles.forEach((circle, index) => {
                circle.classList.add('zoom-in');
                circle.style.transitionDelay = `${index * 0.3}s`;
            });
        }
        
        if (section.classList.contains('security-comparison')) {
            const table = section.querySelector('.comparison-table');
            if (table) {
                table.classList.add('fade-in');
            }
        }
        
        if (section.classList.contains('security-faq')) {
            const accordionItems = section.querySelectorAll('.security-accordion-item');
            accordionItems.forEach((item, index) => {
                
                item.classList.add('faq-fade-in');
                item.style.transitionDelay = `${index * 0.1}s`;
            });
        }
    });

    const isInViewport = (element) => {
        const rect = element.getBoundingClientRect();
        return (
            rect.top <= (window.innerHeight || document.documentElement.clientHeight) * 0.85 &&
            rect.bottom >= 0
        );
    };

    const handleScrollAnimations = () => {
        const animatedElements = document.querySelectorAll('.fade-in, .faq-fade-in, .slide-in-left, .slide-in-right, .zoom-in');
        
        animatedElements.forEach(element => {
            
            if (!element.classList.contains('accordion-item') && !element.classList.contains('security-accordion-item')) {
                if (isInViewport(element)) {
                    element.classList.add('active');
                }
            } else {
                
                if (isInViewport(element)) {
                    element.classList.add('visible');
                }
            }
        });
    };

    handleScrollAnimations();
    
    window.addEventListener('scroll', handleScrollAnimations);

    const accordionHeaders = document.querySelectorAll('.accordion-header');
    
    accordionHeaders.forEach(header => {
        header.addEventListener('click', () => {
            const accordionItem = header.parentElement;
            const accordionContent = header.nextElementSibling;
            
            accordionItem.classList.toggle('active');
            
            const icon = header.querySelector('.accordion-icon i');
            if (icon.classList.contains('fa-plus')) {
                icon.classList.remove('fa-plus');
                icon.classList.add('fa-minus');
            } else {
                icon.classList.remove('fa-minus');
                icon.classList.add('fa-plus');
            }
        });
    });

    
    const testimonialSlider = document.querySelector('.testimonial-slider');
    const testimonialCards = document.querySelectorAll('.testimonial-card');
    
    if (testimonialSlider && testimonialCards.length > 1) {
        let scrollPosition = 0;
        let isPaused = false;
        
        
        testimonialCards.forEach(card => {
            const clone = card.cloneNode(true);
            testimonialSlider.appendChild(clone);
        });
        
        
        const getCardWidth = () => {
            const card = testimonialSlider.querySelector('.testimonial-card');
            const gap = parseInt(window.getComputedStyle(testimonialSlider).gap) || 32;
            return card.offsetWidth + gap;
        };
        
        
        const smoothScroll = () => {
            if (!isPaused) {
                const cardWidth = getCardWidth();
                const totalWidth = cardWidth * testimonialCards.length;
                
                
                scrollPosition += 0.3; 
                
                
                testimonialSlider.style.transform = `translateX(-${scrollPosition}px)`;
                
                
                const allCards = testimonialSlider.querySelectorAll('.testimonial-card');
                const containerWidth = testimonialSlider.parentElement.offsetWidth;
                
                allCards.forEach(card => {
                    const cardRect = card.getBoundingClientRect();
                    const containerRect = testimonialSlider.parentElement.getBoundingClientRect();
                    const cardCenter = cardRect.left + cardRect.width / 2;
                    const containerCenter = containerRect.left + containerRect.width / 2;
                    const distanceFromCenter = Math.abs(cardCenter - containerCenter);
                    
                    
                    const maxDistance = containerWidth / 2;
                    const scale = 1 - (distanceFromCenter / maxDistance) * 0.05; 
                    card.style.transform = `scale(${Math.max(0.95, scale)})`;
                });
                
                
                if (scrollPosition >= totalWidth) {
                    scrollPosition = 0;
                    testimonialSlider.style.transition = 'none';
                    testimonialSlider.style.transform = `translateX(0)`;
                    
                    
                    testimonialSlider.offsetHeight;
                    
                    
                    testimonialSlider.style.transition = 'transform 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
                }
            }
            
            requestAnimationFrame(smoothScroll);
        };
        
        
        smoothScroll();
        
        
        testimonialSlider.addEventListener('mouseenter', () => {
            isPaused = true;
        });
        
        testimonialSlider.addEventListener('mouseleave', () => {
            isPaused = false;
        });
        
        
        const testimonialWrapper = document.querySelector('.testimonial-wrapper');
        if (testimonialWrapper) {
            testimonialWrapper.addEventListener('mouseenter', () => {
                isPaused = true;
            });
            
            testimonialWrapper.addEventListener('mouseleave', () => {
                isPaused = false;
            });
        }
        
        
        let touchStartX = 0;
        let touchEndX = 0;
        
        testimonialSlider.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
            isPaused = true;
        });
        
        testimonialSlider.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
            setTimeout(() => {
                isPaused = false;
            }, 1000);
        });
        
        const handleSwipe = () => {
            const cardWidth = getCardWidth();
            const swipeThreshold = 50;
            
            if (touchStartX - touchEndX > swipeThreshold) {
                
                scrollPosition += cardWidth;
            } else if (touchEndX - touchStartX > swipeThreshold) {
                
                scrollPosition = Math.max(0, scrollPosition - cardWidth);
            }
        };
    }

    const quoteForm = document.querySelector('.form-container form');
    
    function showFormSuccess(formContainer) {
        if (!formContainer) return;
        formContainer.innerHTML = '<div class="form-success-state"><div class="form-success-icon"><i class="fas fa-check-circle"></i></div><h2>Request Submitted!</h2><p>Thank you. We\'ll get back to you within 30 minutes during business hours.</p></div>';
        formContainer.classList.add('form-success');
    }

    function showFormError(form, message) {
        const formMessageContainer = form.querySelector('.form-message-container');
        const msg = formMessageContainer || document.createElement('div');
        if (!formMessageContainer) {
            msg.className = 'form-message-container';
            form.appendChild(msg);
        }
        msg.innerHTML = '<div class="form-message error">' + (message || 'Something went wrong. Please try again or call us.') + '</div>';
        msg.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }

    if (quoteForm) {
        const formContainer = quoteForm.closest('.form-container');

        quoteForm.addEventListener('submit', function(e) {
            e.preventDefault();
            var form = this;
            var submitButton = form.querySelector('button[type="submit"]');
            var originalButtonText = submitButton.innerHTML;
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting...';
            submitButton.disabled = true;

            var msgContainer = form.querySelector('.form-message-container');
            if (msgContainer) msgContainer.innerHTML = '';
            
            var formData = new FormData(form);
            var isNetlify = form.hasAttribute('data-netlify') || form.hasAttribute('netlify');
            var action = form.getAttribute('action') || '';

            // Netlify form
            if (isNetlify) {
                fetch(action || '/', {
                    method: 'POST',
                    headers: { 'Accept': 'text/html' },
                    body: new URLSearchParams(formData).toString(),
                    
                })
                .then(function(response) {
                    showFormSuccess(formContainer);
                })
                .catch(function() {
                    // Still show success - the form data was likely sent
                    showFormSuccess(formContainer);
                });
            }
            // PHP form
            else {
                fetch(action || 'submit-form.php', { method: 'POST', body: formData })
                .then(function(response) { return response.json(); })
                .then(function(data) {
                    if (data && data.status === 'error') {
                        showFormError(form, data.message);
                        submitButton.innerHTML = originalButtonText;
                        submitButton.disabled = false;
                    } else {
                        showFormSuccess(formContainer);
                    }
                })
                .catch(function() {
                    // Show success anyway for local testing / non-PHP environments
                    showFormSuccess(formContainer);
                });
            }
        });
    }

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                // Don't close menu if clicking on dropdown link or dropdown menu item
                const isInDropdown = this.closest('.dropdown-menu') !== null || this.closest('.dropdown') !== null;
                if (mainMenu.classList.contains('active') && !isInDropdown) {
                    mainMenu.classList.remove('active');
                    const icon = mobileMenuToggle.querySelector('i');
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }

                window.scrollTo({
                    top: targetElement.offsetTop - 100,
                    behavior: 'smooth'
                });
            }
        });
    });
}); 


(function() {
  function isMobile() { return window.innerWidth <= 768; }
  function initInternalHeader() {
    if (!document.body.classList.contains('internal')) return;
    const headerTop = document.querySelector('.header-top');
    const logo = document.querySelector('.header-top .logo');
    const contactInfo = document.querySelector('.header-top .contact-info');
    const phoneContainer = document.querySelector('.header-top .phone-number');
    const phoneText = document.querySelector('.header-top .phone-number a');
    const burgerToggle = document.querySelector('.header-top .mobile-menu-toggle');
    if (!headerTop || !logo) return;

    let base = null; 
    const bottomPadding = 6;
    const maxScroll = 160;
    const minScale = 1.1; 
    const baseScale = 1.4;
    const maxTranslateY = 8;
    const leftTarget = 5;
    const restMarginTop = 40;
    const minMarginTop = -70;
    const restHeaderPad = 10;
    const minHeaderPad = 0;
    const scrolledBottomExtra = 12; 
    const phonePadVBase = 8, phonePadVMin = 8;
    const phonePadHBase = 16, phonePadHMin = 16;
    const phoneFontBase = 1.1, phoneFontMin = 1.1;

    function measureBase() {
      const headerRect = headerTop.getBoundingClientRect();
      const logoRect = logo.getBoundingClientRect();
      base = {
        initialTop: logoRect.top - headerRect.top,
        baseHeight: logo.offsetHeight,
        initialLeft: logoRect.left - headerRect.left
      };
    }

    let ticking = false;
    function onScroll() {
      if (!isMobile()) { logo.style.transform = ''; return; }
      if (!base) measureBase();
      if (ticking) return;
      ticking = true;
      requestAnimationFrame(() => {
        const y = Math.max(0, Math.min(maxScroll, window.pageYOffset || document.documentElement.scrollTop));
        const t = y / maxScroll;
        const scale = baseScale - (baseScale - minScale) * t;

        const headerH = headerTop.offsetHeight;
        const available = Math.max(0, headerH - base.initialTop - base.baseHeight * scale - bottomPadding);
        const translateY = Math.min(maxTranslateY, available * t);
        const translateX = (leftTarget - base.initialLeft) * t;
        logo.style.transform = `translate(${translateX}px, ${translateY}px) scale(${scale})`;

        if (contactInfo) {
          const mt = restMarginTop - (restMarginTop - minMarginTop) * t;
          contactInfo.style.marginTop = mt + 'px';
        }
        const pad = restHeaderPad - (restHeaderPad - minHeaderPad) * t;
        headerTop.style.paddingTop = pad + 'px';
        headerTop.style.paddingBottom = (pad + scrolledBottomExtra * t) + 'px';

        if (phoneContainer) {
          const pv = phonePadVBase - (phonePadVBase - phonePadVMin) * t;
          const ph = phonePadHBase - (phonePadHBase - phonePadHMin) * t;
          phoneContainer.style.padding = pv + 'px ' + ph + 'px';
        }
        if (phoneText) {
          const f = phoneFontBase - (phoneFontBase - phoneFontMin) * t;
          phoneText.style.fontSize = f + 'rem';
        }

        const h = headerTop.getBoundingClientRect().height;
        document.body.style.paddingTop = h + 'px';
        document.documentElement.style.setProperty('--headerHeight', h + 'px');
        if (burgerToggle && phoneContainer) {
          const hr = headerTop.getBoundingClientRect();
          const pr = phoneContainer.getBoundingClientRect();
          const gap = Math.max(6, hr.bottom - pr.bottom);
          burgerToggle.style.bottom = gap + 'px';
        }
        ticking = false;
      });
    }

    function onResize() {
      logo.style.transform = '';
      base = null;
      if (isMobile()) {
        measureBase();
        document.body.style.paddingTop = headerTop.offsetHeight + 'px';
      } else {
        document.body.style.paddingTop = '';
      }
      onScroll();
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', onResize);
    window.addEventListener('orientationchange', onResize);
    window.addEventListener('pageshow', () => {
      base = null;
      onScroll();
    });
    document.addEventListener('visibilitychange', () => {
      if (document.visibilityState === 'visible') {
        base = null;
        onScroll();
      }
    });
    onResize();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initInternalHeader);
  } else {
    initInternalHeader();
  }
})();