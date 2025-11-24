document.addEventListener('DOMContentLoaded', function() {
    
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabContents = document.querySelectorAll('.tab-content');
    
    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('active'));
            
            
            button.classList.add('active');
            const target = button.getAttribute('data-tab');
            document.getElementById(target).classList.add('active');
        });
    });
    
    
    const accordionItems = document.querySelectorAll('.security-accordion-item');
    
    accordionItems.forEach(item => {
        const header = item.querySelector('.security-accordion-header');
        
        header.addEventListener('click', () => {
            
            accordionItems.forEach(otherItem => {
                if (otherItem !== item && otherItem.classList.contains('active')) {
                    otherItem.classList.remove('active');
                    const otherIcon = otherItem.querySelector('.security-accordion-icon i');
                    otherIcon.classList.remove('fa-minus');
                    otherIcon.classList.add('fa-plus');
                }
            });
            
            
            item.classList.toggle('active');
            
            
            const icon = item.querySelector('.security-accordion-icon i');
            if (item.classList.contains('active')) {
                icon.classList.remove('fa-plus');
                icon.classList.add('fa-minus');
            } else {
                icon.classList.remove('fa-minus');
                icon.classList.add('fa-plus');
            }
        });
    });
    
    
    const layerCircles = document.querySelectorAll('.layer-circle');
    
    layerCircles.forEach(circle => {
        circle.addEventListener('mouseenter', () => {
            
            if (circle.classList.contains('perimeter-layer')) {
                circle.style.transform = 'translateX(-50%) scale(1.05)';
            } else {
                circle.style.transform = 'scale(1.05)';
            }
            
            circle.style.boxShadow = '0 0 20px rgba(0, 0, 0, 0.2)';
            circle.style.zIndex = '5';
        });
        
        circle.addEventListener('mouseleave', () => {
            
            if (circle.classList.contains('perimeter-layer')) {
                circle.style.transform = 'translateX(-50%)';
            } else {
                circle.style.transform = 'scale(1)';
            }
            
            circle.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.1)';
            circle.style.zIndex = '3';
        });
    });
    
    
    const securityForm = document.getElementById('security-assessment-form');
    
    if (securityForm) {
        securityForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            
            let valid = true;
            const required = securityForm.querySelectorAll('[required]');
            
            required.forEach(field => {
                if (!field.value.trim()) {
                    valid = false;
                    field.classList.add('error');
                } else {
                    field.classList.remove('error');
                }
            });
            
            if (valid) {
                
                const formMessage = document.querySelector('.form-message');
                if (formMessage) {
                    formMessage.textContent = 'Thank you! Your security assessment request has been submitted.';
                    formMessage.classList.add('success');
                    formMessage.style.display = 'block';
                }
                
                
                securityForm.reset();
            } else {
                
                const formMessage = document.querySelector('.form-message');
                if (formMessage) {
                    formMessage.textContent = 'Please fill in all required fields.';
                    formMessage.classList.add('error');
                    formMessage.style.display = 'block';
                }
            }
        });
    }
    
    
    function checkScroll() {
        const elements = document.querySelectorAll('.security-hero, .security-stats, .security-systems, .security-layers, .security-comparison, .assessment-form, .security-faq');
        
        elements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.3;
            
            if (elementPosition < screenPosition) {
                element.classList.add('fade-in-visible');
            }
        });
    }
    
    
    checkScroll();
    
    
    window.addEventListener('scroll', checkScroll);
}); 