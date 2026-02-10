<?php

$suburb = isset($_GET['suburb']) ? ucwords(str_replace('-', ' ', $_GET['suburb'])) : 'Melbourne';
$suburb_slug = strtolower(str_replace(' ', '-', $suburb));


$suburb_data = array(
    'fitzroy' => array(
        'postcode' => '3065',
        'description' => 'Fitzroy\'s mix of old terrace houses and modern apartments creates diverse electrical needs.',
        'nearby' => array('Collingwood', 'Clifton Hill', 'Parkville')
    ),
    'richmond' => array(
        'postcode' => '3121',
        'description' => 'Richmond\'s growing residential and commercial sectors demand reliable electrical services.',
        'nearby' => array('East Melbourne', 'Cremorne', 'Burnley')
    ),
    'brunswick' => array(
        'postcode' => '3056',
        'description' => 'Brunswick\'s vibrant community relies on prompt and professional electrical services.',
        'nearby' => array('Coburg', 'Fitzroy North', 'Parkville')
    ),
    'hawthorn' => array(
        'postcode' => '3122',
        'description' => 'Hawthorn\'s leafy streets and established homes benefit from our experienced electricians.',
        'nearby' => array('Kew', 'Box Hill', 'Richmond')
    ),
    'kew' => array(
        'postcode' => '3101',
        'description' => 'Kew\'s prestigious homes require specialized electrical expertise.',
        'nearby' => array('Hawthorn', 'Balwyn', 'Clifton Hill')
    ),
    'collingwood' => array(
        'postcode' => '3066',
        'description' => 'Collingwood\'s warehouse conversions and modern developments require expert electrical services.',
        'nearby' => array('Fitzroy', 'Abbotsford', 'Richmond')
    ),
    'st-kilda' => array(
        'postcode' => '3182',
        'description' => 'St Kilda\'s beachside properties require reliable electrical services.',
        'nearby' => array('Prahran', 'Elwood', 'Balaclava')
    ),
    
    'default' => array(
        'postcode' => '',
        'description' => 'We provide expert electrical services throughout Melbourne.',
        'nearby' => array('Fitzroy', 'Richmond', 'Collingwood')
    )
);


$suburb_lower = strtolower(str_replace(' ', '-', $suburb));
$data = isset($suburb_data[$suburb_lower]) ? $suburb_data[$suburb_lower] : $suburb_data['default'];


$page_title = "Electrician $suburb | Same Day Service | Licensed & Insured";
$meta_description = "Licensed electrician in $suburb VIC. Available 24/7 for emergency repairs, installations, and maintenance. Same-day response. $0 call-out fee. Call now!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta name="keywords" content="electrician <?php echo $suburb; ?>, emergency electrician <?php echo $suburb; ?>, electrical services <?php echo $suburb; ?>, <?php echo $data['postcode']; ?>">
    
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styles-marketing.css">
    <link rel="stylesheet" href="https:
    <link rel="icon" type="image/png" href="images/favicon.png">
    
    
    <script type="application/ld+json">
    {
        "@context": "https:
        "@type": "ElectricalBusiness",
        "name": "Hometown Electrical - <?php echo $suburb; ?>",
        "description": "<?php echo $meta_description; ?>",
        "telephone": "+61312345678",
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "523"
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            "opens": "00:00",
            "closes": "23:59"
        },
        "areaServed": {
            "@type": "City",
            "name": "<?php echo $suburb; ?>"
        },
        "priceRange": "$$"
    }
    </script>
</head>
<body>
    
    <div class="emergency-banner">
        <div class="container">
            <div class="emergency-content">
                <span class="emergency-badge">Have an Emergency?</span>
                <span class="emergency-text">Power Outage? Electrical Emergency? Or need new lights installed? Same-day response & visit in <?php echo $suburb; ?>.</span>
                <a href="tel:+61312345678" class="emergency-call">Call Now: 03 1234 5678</a>
            </div>
        </div>
    </div>

    
    <header>
        <div class="header-top">
            <div class="container">
                <div class="logo">
                    <a href="index.html">
                        <img src="images/logo2.png" alt="Hometown Electrical Logo">
                    </a>
                </div>
                <div class="mobile-menu-toggle" aria-label="Toggle mobile menu" role="button" tabindex="0">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="header-nav-inline">
                    <a href="index.html">Home</a>
                    <div class="dropdown">
                        <a href="services.html">Services <i class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown-menu" aria-label="Services submenu">
                            <li><a href="lighting.html">Lighting</a></li>
                            <li><a href="switchboard-upgrade.html">Switchboard Upgrade</a></li>
                            <li><a href="smoke-alarm.html">Smoke Alarm</a></li>
                            <li><a href="fans.html">Ceiling Fan</a></li>
                            <li><a href="security.html">Security</a></li>
                            <li><a href="gpos.html">Power</a></li>
                        </ul>
                    </div>
                    <a href="service-areas.html">Service Areas</a>
                    <a href="about.html">About Us</a>
                    <a href="contact.html">Contact Us</a>
                </div>
                <div class="contact-info">
                    <div class="phone-number">
                        <i class="fas fa-phone-alt"></i>
                        <a href="tel:+61312345678">03 1234 5678</a>
                    </div>
                    <a href="
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ul class="main-menu" role="navigation" aria-label="Main menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="dropdown">
                        <a href="
                        <ul class="dropdown-menu" aria-label="Services submenu">
                            <li><a href="lighting.html">Lighting</a></li>
                            <li><a href="switchboard-upgrade.html">Switchboard Upgrade</a></li>
                            <li><a href="smoke-alarm.html">Smoke Alarm</a></li>
                            <li><a href="fans.html">Ceiling Fan</a></li>
                            <li><a href="security.html">Security</a></li>
                            <li><a href="gpos.html">Power</a></li>
                        </ul>
                    </li>
                    <li><a href="service-areas.html">Service Areas</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div id="header-placeholder" aria-hidden="true"></div>

    
    <section class="hero-premium">
        <div class="hero-background">
            <div class="hero-overlay"></div>
        </div>
        <div class="container">
            <div class="hero-grid">
                <div class="hero-content">
                    <div class="hero-badge">⚡ SAME DAY SERVICE IN <?php echo strtoupper($suburb); ?></div>
                    <h1>Electrician <?php echo $suburb; ?></h1>
                    <div class="hero-subtitle">
                        <p><?php echo $data['description']; ?> Our certified electricians are ready to help today.</p>
                    </div>
                    
                    <div class="hero-features">
                        <div class="hero-feature">
                            <i class="fas fa-check-circle"></i>
                            <span>$0 Call-Out Fee*</span>
                        </div>
                        <div class="hero-feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Same Day Response</span>
                        </div>
                        <div class="hero-feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Licensed & Insured</span>
                        </div>
                        <div class="hero-feature">
                            <i class="fas fa-check-circle"></i>
                            <span>12-Month Warranty</span>
                        </div>
                        <div class="hero-feature">
                            <i class="fas fa-certificate"></i>
                            <span>Local to <?php echo $suburb; ?></span>
                        </div>
                    </div>
                    
                    <div class="hero-cta-group">
                        <a href="tel:+61312345678" class="hero-cta-primary">
                            <i class="fas fa-phone-alt"></i>
                            <div class="cta-text">
                                <span class="cta-small">CALL NOW - WE'RE READY</span>
                                <span class="cta-big">03 1234 5678</span>
                            </div>
                        </a>
                        <a href="
                            <i class="fas fa-bolt"></i>
                            Get Instant Quote
                        </a>
                    </div>
                </div>
                
                <div class="hero-visual">
                    <div class="hero-image-wrapper">
                        <img src="images/Living-Room-Lighting.jpg" alt="Electrician <?php echo $suburb; ?>" class="hero-image">
                        <div class="hero-stats">
                            <div class="stat-card">
                                <span class="stat-number">24/7</span>
                                <span class="stat-label">Available</span>
                            </div>
                            <div class="stat-card">
                                <span class="stat-number">523</span>
                                <span class="stat-label">5★ Reviews</span>
                            </div>
                            <div class="stat-card">
                                <span class="stat-number">$0</span>
                                <span class="stat-label">Call-Out Fee*</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="services-premium">
        <div class="container">
            <div class="section-header">
                <h2>Electrical Services in <?php echo $suburb; ?> <span class="badge">All Work Guaranteed</span></h2>
                <p>From emergency repairs to complete installations - we handle it all in <?php echo $suburb; ?></p>
            </div>
            
            <div class="services-tabs">
                <div class="tab-buttons">
                    <button class="tab-button active" data-tab="emergency"><i class="fas fa-bolt"></i> Emergency</button>
                    <button class="tab-button" data-tab="residential"><i class="fas fa-home"></i> Residential</button>
                    <button class="tab-button" data-tab="commercial"><i class="fas fa-building"></i> Commercial</button>
                    <button class="tab-button" data-tab="safety"><i class="fas fa-shield-alt"></i> Safety</button>
                </div>
                
                <div class="tab-content active" id="emergency">
                    <div class="service-showcase">
                        <div class="showcase-image">
                            <img src="images/Swithboard-repair.jpg" alt="Emergency Electrical <?php echo $suburb; ?>">
                        </div>
                        <div class="showcase-content">
                            <h3>24/7 Emergency Services in <?php echo $suburb; ?></h3>
                            <ul class="service-list">
                                <li><i class="fas fa-check"></i> Power outage repairs</li>
                                <li><i class="fas fa-check"></i> Circuit breaker issues</li>
                                <li><i class="fas fa-check"></i> Electrical fault finding</li>
                                <li><i class="fas fa-check"></i> Burning smell investigation</li>
                                <li><i class="fas fa-check"></i> Emergency lighting repairs</li>
                            </ul>
                            <div class="service-stats">
                                <div class="stat">
                                    <span class="stat-number">Same Day</span>
                                    <span class="stat-label">Response</span>
                                </div>
                                <div class="stat">
                                    <span class="stat-number">24/7</span>
                                    <span class="stat-label">Available</span>
                                </div>
                                <div class="stat">
                                    <span class="stat-number">$0</span>
                                    <span class="stat-label">Call-Out Fee*</span>
                                </div>
                            </div>
                            <a href="tel:+61312345678" class="service-cta">Call Emergency Line Now</a>
                        </div>
                    </div>
                </div>
                
                <div class="tab-content" id="residential">
                    <div class="service-showcase">
                        <div class="showcase-image">
                            <img src="images/Light-Install.jpg" alt="Residential Electrical <?php echo $suburb; ?>">
                        </div>
                        <div class="showcase-content">
                            <h3>Home Electrical Solutions in <?php echo $suburb; ?></h3>
                            <ul class="service-list">
                                <li><i class="fas fa-check"></i> Lighting installation & upgrades</li>
                                <li><i class="fas fa-check"></i> Power point installation</li>
                                <li><i class="fas fa-check"></i> Switchboard upgrades</li>
                                <li><i class="fas fa-check"></i> Home rewiring</li>
                                <li><i class="fas fa-check"></i> Ceiling fan installation</li>
                            </ul>
                            <div class="service-stats">
                                <div class="stat">
                                    <span class="stat-number">12</span>
                                    <span class="stat-label">Month Warranty</span>
                                </div>
                                <div class="stat">
                                    <span class="stat-number">Fixed</span>
                                    <span class="stat-label">Price Quote</span>
                                </div>
                                <div class="stat">
                                    <span class="stat-number">Same</span>
                                    <span class="stat-label">Day Service</span>
                                </div>
                            </div>
                            <a href="
                        </div>
                    </div>
                </div>
                
                <div class="tab-content" id="commercial">
                    <div class="service-showcase">
                        <div class="showcase-image">
                            <img src="images/Commercial-lighting.jpg" alt="Commercial Electrical <?php echo $suburb; ?>">
                        </div>
                        <div class="showcase-content">
                            <h3>Commercial Services in <?php echo $suburb; ?></h3>
                            <ul class="service-list">
                                <li><i class="fas fa-check"></i> Office fitouts & renovations</li>
                                <li><i class="fas fa-check"></i> Emergency lighting systems</li>
                                <li><i class="fas fa-check"></i> Data cabling installation</li>
                                <li><i class="fas fa-check"></i> Maintenance contracts</li>
                                <li><i class="fas fa-check"></i> Energy efficiency upgrades</li>
                            </ul>
                            <div class="service-stats">
                                <div class="stat">
                                    <span class="stat-number">After</span>
                                    <span class="stat-label">Hours Service</span>
                                </div>
                                <div class="stat">
                                    <span class="stat-number">Licensed</span>
                                    <span class="stat-label">& Insured</span>
                                </div>
                                <div class="stat">
                                    <span class="stat-number">Fast</span>
                                    <span class="stat-label">Response</span>
                                </div>
                            </div>
                            <a href="contact.html" class="service-cta">Contact Us</a>
                        </div>
                    </div>
                </div>
                
                <div class="tab-content" id="safety">
                    <div class="service-showcase">
                        <div class="showcase-image">
                            <img src="images/smoke-alarm-installation.jpg" alt="Safety Services <?php echo $suburb; ?>">
                        </div>
                        <div class="showcase-content">
                            <h3>Safety & Compliance in <?php echo $suburb; ?></h3>
                            <ul class="service-list">
                                <li><i class="fas fa-check"></i> Safety switch installation</li>
                                <li><i class="fas fa-check"></i> Smoke alarm installation</li>
                                <li><i class="fas fa-check"></i> Electrical safety inspections</li>
                                <li><i class="fas fa-check"></i> Test and tag services</li>
                                <li><i class="fas fa-check"></i> Compliance certificates</li>
                            </ul>
                            <div class="service-stats">
                                <div class="stat">
                                    <span class="stat-number">100%</span>
                                    <span class="stat-label">Compliant</span>
                                </div>
                                <div class="stat">
                                    <span class="stat-number">Licensed</span>
                                    <span class="stat-label">Inspectors</span>
                                </div>
                                <div class="stat">
                                    <span class="stat-number">Same Day</span>
                                    <span class="stat-label">Certificates</span>
                                </div>
                            </div>
                            <a href="services.html" class="service-cta">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="service-areas">
        <div class="container">
            <h2 class="section-title">We Also Service Areas Near <?php echo $suburb; ?></h2>
            <p class="section-subtitle">Local electricians serving <?php echo $suburb; ?> and surrounding suburbs</p>
            
            <div class="areas-grid">
                <?php foreach($data['nearby'] as $nearby_suburb): 
                    $nearby_slug = strtolower(str_replace(' ', '-', $nearby_suburb));
                ?>
                <div class="area-column">
                    <h3><a href="?suburb=<?php echo $nearby_slug; ?>">Electrician <?php echo $nearby_suburb; ?></a></h3>
                    <p>Professional electrical services</p>
                </div>
                <?php endforeach; ?>
            </div>
            
            <div class="areas-cta">
                <a href="service-areas.html" class="cta-button">See All Melbourne Suburbs</a>
            </div>
        </div>
    </section>

    
    <section id="quote-form" class="quote-section">
        <div class="container">
            <div class="form-container">
                <h2>Request A Free Quote for <?php echo $suburb; ?></h2>
                <p>Fill out the form and we'll respond within 30 minutes during business hours.</p>
                <form action="submit-form.php" method="POST">
                    <input type="hidden" name="suburb" value="<?php echo $suburb; ?>">
                    
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="suburb_field">Suburb</label>
                        <input type="text" id="suburb_field" name="suburb_field" value="<?php echo $suburb; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="service">Service Required</label>
                        <select id="service" name="service" required>
                            <option value="">Select a service</option>
                            <option value="emergency">Emergency Repair</option>
                            <option value="installation">New Installation</option>
                            <option value="lighting">Lighting</option>
                            <option value="switchboard">Switchboard Upgrade</option>
                            <option value="safety">Safety Inspection</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="4"></textarea>
                    </div>
                    <button type="submit" class="cta-button">Submit Request</button>
                </form>
            </div>
            <div class="contact-info-container">
                <h3>Need Help in <?php echo $suburb; ?>?</h3>
                <div class="contact-method">
                    <i class="fas fa-phone-alt"></i>
                    <div class="contact-details">
                        <h4>Call Us 24/7</h4>
                        <a href="tel:+61312345678">03 1234 5678</a>
                    </div>
                </div>
                <div class="contact-method">
                    <i class="fas fa-envelope"></i>
                    <div class="contact-details">
                        <h4>Email Us</h4>
                        <a href="mailto:info@hometownelectrical.com.au">info@hometownelectrical.com.au</a>
                    </div>
                </div>
                <div class="contact-method">
                    <i class="fas fa-clock"></i>
                    <div class="contact-details">
                        <h4>Business Hours</h4>
                        <p>Monday - Friday: Anytime<br>Saturday: Anytime<br>Sunday: Anytime!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <footer>
        <div class="container">
            <div class="footer-top">
                <div class="footer-column">
                    <div class="footer-logo">
                        <img src="images/logo2.png" alt="Hometown Electrical Logo">
                    </div>
                    <p>Your trusted electricians serving <?php echo $suburb; ?> and all Melbourne suburbs. Available 24/7.</p>
                    <div class="social-icons">
                        <a href="
                        <a href="
                        <a href="
                    </div>
                </div>
                
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="service-areas.html">Service Areas</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Our Services</h3>
                    <ul class="footer-links">
                        <li><a href="lighting.html">Lighting</a></li>
                        <li><a href="switchboard-upgrade.html">Switchboard</a></li>
                        <li><a href="smoke-alarm.html">Smoke Alarms</a></li>
                        <li><a href="fans.html">Ceiling Fans</a></li>
                        <li><a href="security.html">Security</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Contact Us</h3>
                    <ul class="contact-list">
                        <li><i class="fas fa-phone-alt"></i> <a href="tel:+61312345678">03 1234 5678</a></li>
                        <li><i class="fas fa-envelope"></i> <a href="mailto:info@hometownelectrical.com.au">info@hometownelectrical.com.au</a></li>
                        <li><i class="fas fa-map-marker-alt"></i> Serving <?php echo $suburb; ?> VIC</li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <div class="copyright">
                    <p>&copy; 2023 Hometown Electrical. All rights reserved.</p>
                </div>
                <div class="footer-bottom-links">
                    <a href="privacy.html">Privacy Policy</a>
                    <a href="terms.html">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    
    <div class="floating-cta" id="floating-cta">
        <a href="tel:+61312345678" class="floating-phone">
            <i class="fas fa-phone-alt"></i>
        </a>
        <a href="
            <i class="fas fa-file-invoice"></i>
        </a>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
