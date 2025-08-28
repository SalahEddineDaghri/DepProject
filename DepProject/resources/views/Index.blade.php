<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELECTRIC XTRA - Cyberpunk Landing Page by TemplateMo</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;400;500;700&display=swap"
        rel="stylesheet">
    <link href="templatemo-electric-xtra.css" rel="stylesheet">
    <script src="{{ asset('js/templatemo-electric-scripts.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/templatemo-electric-xtra.css') }}">



<style>
    /* Google Fonts already loaded: Orbitron & Rajdhani */

/* -------------------- General Reset -------------------- */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Rajdhani', sans-serif;
}

body {
    background: #0b0c10;
    color: #fff;
    overflow-x: hidden;
}

/* -------------------- Grid Background -------------------- */
.grid-bg {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image:
        linear-gradient(#111 1px, transparent 1px),
        linear-gradient(90deg, #111 1px, transparent 1px);
    background-size: 50px 50px;
    z-index: -3;
}

.gradient-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #ff5e00 0%, #00b2ff 100%);
    opacity: 0.05;
    z-index: -2;
}

.scanlines {
    position: fixed;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(rgba(255,255,255,0.05) 1px, transparent 1px);
    background-size: 100% 4px;
    z-index: -1;
}

/* -------------------- Shapes -------------------- */
.shapes-container {
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    pointer-events: none;
}

.shape {
    position: absolute;
    opacity: 0.1;
    animation: floatShapes 15s linear infinite;
}

.shape-circle { width: 50px; height: 50px; border-radius: 50%; background: #00b2ff; }
.shape-triangle {
    width: 0; height: 0;
    border-left: 25px solid transparent;
    border-right: 25px solid transparent;
    border-bottom: 50px solid #ff5e00;
}
.shape-square { width: 50px; height: 50px; background: #ff5e00; }

@keyframes floatShapes {
    0% { transform: translateY(0) rotate(0deg); }
    100% { transform: translateY(-1000px) rotate(360deg); }
}

/* -------------------- Particles -------------------- */
#particles {
    position: fixed;
    width: 100%; height: 100%;
    pointer-events: none;
    z-index: -1;
}

.particle {
    position: absolute;
    width: 6px; height: 6px;
    border-radius: 50%;
    background: #00b2ff;
    opacity: 0.5;
    animation: floatParticles linear infinite;
}

@keyframes floatParticles {
    0% { transform: translateY(100vh) translateX(0); }
    100% { transform: translateY(-10vh) translateX(20px); }
}

/* -------------------- Navbar -------------------- */
nav {
    width: 100%;
    padding: 15px 50px;
    position: fixed;
    top: 0; left: 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 100;
    transition: 0.3s;
}

nav.scrolled {
    background: rgba(0,0,0,0.7);
    backdrop-filter: blur(5px);
}

.nav-container { display: flex; align-items: center; width: 100%; }
.logo-link {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: #fff;
}
.logo-text { margin-left: 10px; font-family: 'Orbitron', sans-serif; font-weight: 900; letter-spacing: 2px; }

.nav-links {
    display: flex;
    list-style: none;
    margin-left: auto;
}
.nav-links li { margin: 0 15px; }
.nav-links a {
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    transition: 0.3s;
}
.nav-links a:hover, .nav-link.active { color: #ff5e00; }

/* Mobile menu toggle */
.menu-toggle { display: none; flex-direction: column; cursor: pointer; }
.menu-toggle span { height: 3px; width: 25px; background: #fff; margin: 4px 0; border-radius: 2px; }

/* -------------------- Hero Section -------------------- */
.hero {
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    position: relative;
    z-index: 1;
}

.glitch-text {
    font-family: 'Orbitron', sans-serif;
    font-size: 4rem;
    font-weight: 900;
    color: #fff;
    position: relative;
}

.subtitle {
    font-size: 1.2rem;
    color: #fff;
    margin-top: 10px;
}

.cta-container { margin-top: 20px; }
.cta-button {
    text-decoration: none;
    padding: 12px 30px;
    border-radius: 4px;
    font-weight: 700;
    margin: 0 10px;
    transition: 0.3s;
}
.cta-primary { background: #ff5e00; color: #fff; }
.cta-primary:hover { background: #00b2ff; }
.cta-secondary { background: transparent; border: 2px solid #ff5e00; color: #fff; }
.cta-secondary:hover { background: #ff5e00; }

/* -------------------- Features -------------------- */
.features { padding: 100px 50px; background: #0b0c10; }
.section-title { text-align: center; font-size: 2.5rem; margin-bottom: 50px; font-family: 'Orbitron', sans-serif; color: #ff5e00; }

.features-container { display: flex; flex-wrap: wrap; justify-content: center; gap: 30px; }
.feature-tabs { display: flex; flex-direction: column; gap: 15px; margin-right: 50px; }
.tab-item { cursor: pointer; padding: 10px 20px; border-radius: 4px; background: rgba(255,255,255,0.05); transition: 0.3s; }
.tab-item:hover, .tab-item.active { background: #ff5e00; color: #fff; }
.feature-content { flex: 1; }

/* -------------------- About Section -------------------- */
.about { padding: 100px 50px; background: #111; }
.about-content { display: flex; flex-wrap: wrap; gap: 50px; align-items: center; }
.about-text { flex: 1; }
.about-visual { flex: 1; display: flex; justify-content: center; }
.about-graphic, .about-graphic-alt { width: 300px; height: 300px; background: linear-gradient(135deg,#ff5e00,#00b2ff); border-radius: 15px; }

/* -------------------- Contact Section -------------------- */
.contact { padding: 100px 50px; background: #0b0c10; }
.contact-container { display: flex; flex-wrap: wrap; gap: 50px; }
.contact-form { flex: 1; }
.form-group { margin-bottom: 20px; display: flex; flex-direction: column; }
.form-group label { margin-bottom: 5px; }
.form-group input, .form-group textarea { padding: 10px; border-radius: 4px; border: none; background: #1a1a1a; color: #fff; }
.submit-btn { padding: 12px 25px; background: #ff5e00; color: #fff; border: none; border-radius: 4px; cursor: pointer; transition: 0.3s; }
.submit-btn:hover { background: #00b2ff; }

/* -------------------- Footer -------------------- */
footer { padding: 50px; background: #111; text-align: center; }
.footer-links { margin-bottom: 20px; }
.footer-links a { color: #fff; margin: 0 10px; text-decoration: none; transition: 0.3s; }
.footer-links a:hover { color: #ff5e00; }

/* -------------------- Responsive -------------------- */
@media (max-width: 992px) {
    .features-container { flex-direction: column; }
    .about-content { flex-direction: column; }
    .nav-links { display: none; flex-direction: column; position: absolute; top: 60px; right: 50px; background: rgba(0,0,0,0.9); padding: 20px; border-radius: 8px; }
    .nav-links.active { display: flex; }
    .menu-toggle { display: flex; }
}

</style>
</head>

<body>
    <!-- Animated Grid Background -->
    <div class="grid-bg"></div>
    <div class="gradient-overlay"></div>
    <div class="scanlines"></div>

    <!-- Animated Shapes -->
    <div class="shapes-container">
        <div class="shape shape-circle"></div>
        <div class="shape shape-triangle"></div>
        <div class="shape shape-square"></div>
    </div>

    <!-- Floating Particles -->
    <div id="particles"></div>

    <!-- Navigation -->
    <nav id="navbar">
        <div class="nav-container">
            <a href="#home" class="logo-link">
                <svg class="logo-svg" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="logoGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:#FF5E00;stop-opacity:1" />
                            <stop offset="100%" style="stop-color:#00B2FF;stop-opacity:1" />
                        </linearGradient>
                    </defs>
                    <polygon points="20,2 38,14 38,26 20,38 2,26 2,14" fill="none" stroke="url(#logoGradient)"
                        stroke-width="2" />
                    <polygon points="20,8 32,16 32,24 20,32 8,24 8,16" fill="url(#logoGradient)" opacity="0.3" />
                    <circle cx="20" cy="20" r="3" fill="url(#logoGradient)" />
                </svg>
                <span class="logo-text">ELECTRIC XTRA</span>
            </a>
            <ul class="nav-links" id="navLinks">
                <li><a href="#home" class="nav-link">Home</a></li>
                <li><a href="#features" class="nav-link">Features</a></li>
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
            <div class="menu-toggle" id="menuToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <div class="text-rotator">
                <div class="text-set active">
                    <h1 class="glitch-text" data-text="FUTURE IS NOW">FUTURE IS NOW</h1>
                    <p class="subtitle">Enter the next dimension of digital innovation</p>
                </div>
                <div class="text-set">
                    <h1 class="glitch-text" data-text="BEYOND LIMITS">BEYOND LIMITS</h1>
                    <p class="subtitle">Where technology meets infinite possibilities</p>
                </div>
                <div class="text-set">
                    <h1 class="glitch-text" data-text="ELECTRIC DREAMS">ELECTRIC DREAMS</h1>
                    <p class="subtitle">Powering tomorrow's digital revolution today</p>
                </div>
            </div>
        </div>
        <div class="cta-container">
            <a href="#features" class="cta-button cta-primary">Get Started</a>
            <a href="#about" class="cta-button cta-secondary">Learn More</a>
        </div>
    </section>

    <!-- Features Section with Tabs -->
    <section class="features" id="features">
        <h2 class="section-title">Core Features</h2>
        <div class="features-container">
            <div class="feature-tabs">
                <div class="tab-item active" data-tab="performance">
                    <span class="tab-icon">⚡</span>
                    <span>Performance</span>
                </div>
                <div class="tab-item" data-tab="security">
                    <span class="tab-icon">🔒</span>
                    <span>Security</span>
                </div>
                <div class="tab-item" data-tab="network">
                    <span class="tab-icon">🌐</span>
                    <span>Network</span>
                </div>
                <div class="tab-item" data-tab="analytics">
                    <span class="tab-icon">📊</span>
                    <span>Analytics</span>
                </div>
                <div class="tab-item" data-tab="integration">
                    <span class="tab-icon">🔧</span>
                    <span>Integration</span>
                </div>
            </div>
            <div class="feature-content">
                <div class="content-panel active" id="performance">
                    <h3>Lightning Fast Performance</h3>
                    <p>Experience unprecedented speed with our quantum-powered infrastructure. Built on cutting-edge
                        technology that delivers results at the speed of thought. Electric Xtra CSS template is brought
                        to you by TemplateMo website.</p>
                    <ul class="feature-list">
                        <li>Sub-millisecond response times</li>
                        <li>99.99% uptime guarantee</li>
                        <li>Automatic scaling based on demand</li>
                        <li>Real-time data synchronization</li>
                    </ul>
                </div>
                <div class="content-panel" id="security">
                    <h3>Military-Grade Security</h3>
                    <p>Your data is protected by the most advanced encryption protocols available. Multi-layered
                        security ensures complete protection against cyber threats. You may tell your friends about
                        TemplateMo free css website and how easy it is.</p>
                    <ul class="feature-list">
                        <li>256-bit AES encryption</li>
                        <li>Biometric authentication</li>
                        <li>Zero-knowledge architecture</li>
                        <li>Real-time threat detection</li>
                        <li>Automated security updates</li>
                    </ul>
                </div>
                <div class="content-panel" id="network">
                    <h3>Global Neural Network</h3>
                    <p>Connect to our worldwide infrastructure that spans across continents. Seamless integration with
                        existing systems and future-proof architecture.</p>
                    <ul class="feature-list">
                        <li>200+ global data centers</li>
                        <li>Intelligent routing algorithms</li>
                        <li>Cross-platform compatibility</li>
                        <li>5G and satellite connectivity</li>
                        <li>Decentralized architecture</li>
                    </ul>
                </div>
                <div class="content-panel" id="analytics">
                    <h3>Advanced Analytics</h3>
                    <p>Harness the power of AI-driven insights to make data-driven decisions. Real-time analytics and
                        predictive modeling at your fingertips.</p>
                    <ul class="feature-list">
                        <li>Machine learning algorithms</li>
                        <li>Predictive analytics</li>
                        <li>Custom dashboard creation</li>
                        <li>Real-time data visualization</li>
                        <li>Automated reporting</li>
                    </ul>
                </div>
                <div class="content-panel" id="integration">
                    <h3>Seamless Integration</h3>
                    <p>Connect with thousands of apps and services through our universal API. Built to work with your
                        existing tools and workflows.</p>
                    <ul class="feature-list">
                        <li>RESTful API architecture</li>
                        <li>WebSocket support</li>
                        <li>SDK for major platforms</li>
                        <li>One-click integrations</li>
                        <li>Custom webhook support</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <h2 class="section-title">About Electric Xtra</h2>
        <div class="about-content">
            <div class="about-text">
                <h2>Pioneering the Digital Frontier</h2>
                <p>At ELECTRIC XTRA, we're not just building technology – we're crafting the future. Our mission is to
                    bridge the gap between human potential and digital innovation, creating solutions that empower
                    individuals and transform industries.</p>
                <p>Founded by visionaries who saw beyond the limitations of current technology, ELECTRIC XTRA represents
                    a quantum leap in digital infrastructure. We combine cutting-edge research with practical
                    applications to deliver solutions that are both revolutionary and reliable.</p>
                <p>Join us as we redefine what's possible in the digital age. The future isn't something that happens to
                    us – it's something we create together.</p>
            </div>
            <div class="about-visual">
                <div class="about-graphic"></div>
            </div>
        </div>

        <!-- Second row with reversed layout -->
        <div class="about-content" style="margin-top: 80px;">
            <div class="about-visual">
                <div class="about-graphic-alt">
                    <div class="hexagon"></div>
                    <div class="hexagon"></div>
                    <div class="hexagon"></div>
                </div>
            </div>
            <div class="about-text">
                <h2>Innovation at Every Level</h2>
                <p>Our commitment to excellence drives us to push boundaries and challenge conventions. With a team of
                    world-class engineers, designers, and visionaries, we're creating solutions that not only meet
                    today's needs but anticipate tomorrow's challenges.</p>
                <p>From quantum computing to neural networks, from blockchain to AI, we're at the forefront of every
                    technological revolution. Our integrated approach ensures that each innovation builds upon the last,
                    creating a synergy that amplifies our impact.</p>
                <p>Experience the power of true digital transformation. With ELECTRIC XTRA, you're not just adopting
                    technology – you're embracing a philosophy of continuous evolution and limitless possibility.</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <h2 class="section-title">Get In Touch</h2>
        <div class="contact-container">
            <div class="contact-form">
                <form id="contactForm">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>
            <div class="contact-info">
                <h3>Connect With Us</h3>
                <div class="info-item">
                    <div class="info-icon">📧</div>
                    <div class="info-details">
                        <h4>Email</h4>
                        <p>contact@electricxtra.tech</p>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon">📱</div>
                    <div class="info-details">
                        <h4>Phone</h4>
                        <p>+1 (555) 123-4567</p>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon">📍</div>
                    <div class="info-details">
                        <h4>Location</h4>
                        <p>Neo Tokyo, Sector 7</p>
                    </div>
                </div>
                <div class="map-container">
                    <div class="map-placeholder">
                        <p>Interactive Map</p>
                        <p style="font-size: 0.9rem; margin-top: 10px;">Neo Tokyo, Sector 7</p>
                    </div>
                    <div class="map-overlay"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-links">
                <a href="#privacy">Privacy Policy</a>
                <a href="#terms">Terms of Service</a>
                <a href="#careers">Careers</a>
            </div>
            <p class="copyright">© 2025 ELECTRIC XTRA. All rights reserved. Building tomorrow, today. | Design: <a
                    href="https://templatemo.com" target="_blank" rel="nofollow noopener">TemplateMo</a></p>
        </div>
    </footer>
    <script src="templatemo-electric-scripts.js"></script>
</body>

</html>
