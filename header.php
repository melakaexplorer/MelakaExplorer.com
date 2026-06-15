<?php
// Start session for all pages
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>MelakaExplorer.com - <?php echo $page_title ?? 'Discover Historic Melaka'; ?></title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #fef9f0 0%, #fff5e6 100%);
            overflow-x: hidden;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #8B0000;
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #6b0000;
        }

        /* Navigation Enhanced */
        nav {
            background: #8B0000;
            background: linear-gradient(135deg, #a51c1c, #6b0000);
            padding: 1rem 5%;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(0,0,0,0.3);
            transition: all 0.3s ease;
        }
        
        nav.scrolled {
            padding: 0.7rem 5%;
            background: linear-gradient(135deg, #8B0000, #4a0000);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .logo {
            color: #FFD700;
            font-size: 1.8rem;
            font-weight: 800;
            letter-spacing: 1px;
            position: relative;
            animation: slideInLeft 0.5s ease;
        }
        
        .logo::after {
            content: '★';
            position: absolute;
            font-size: 1rem;
            top: -5px;
            right: -20px;
            color: #FFD700;
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.5; transform: scale(1.2); }
        }
        
        @keyframes slideInLeft {
            from { opacity: 0; transform: translateX(-50px); }
            to { opacity: 1; transform: translateX(0); }
        }

        .logo span {
            color: white;
            font-weight: 400;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 1.5rem;
            flex-wrap: wrap;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: 0.3s;
            font-size: 1rem;
            position: relative;
            padding: 5px 0;
        }
        
        .nav-links a::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: #FFD700;
            transition: width 0.3s ease;
        }
        
        .nav-links a:hover::before,
        .nav-links a.active-page::before {
            width: 100%;
        }

        .nav-links a:hover, .nav-links a.active {
            color: #FFD700;
        }

        .menu-toggle {
            display: none;
            font-size: 1.8rem;
            color: white;
            cursor: pointer;
            transition: transform 0.3s;
        }
        
        .menu-toggle:hover {
            transform: rotate(90deg);
        }

        /* Hero Section Enhanced */
        .hero {
            height: 85vh;
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1560217632-b4b0b9c0b7b2?q=80&w=2070&auto=format');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
        }

        .hero-content {
            animation: fadeInUp 1s ease;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero-content h1 {
            font-size: 4rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.5);
            animation: glow 3s ease-in-out infinite;
        }
        
        @keyframes glow {
            0%, 100% { text-shadow: 2px 2px 10px rgba(0,0,0,0.5); }
            50% { text-shadow: 0 0 20px #FFD700, 2px 2px 10px rgba(0,0,0,0.5); }
        }

        .hero-content p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
        }

        .tagline {
            font-size: 1.8rem;
            font-style: italic;
            color: #FFD700;
            animation: bounce 2s ease-in-out infinite;
        }
        
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .btn {
            display: inline-block;
            background: #FFD700;
            color: #8B0000;
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
            margin: 0.5rem;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s;
            z-index: -1;
        }
        
        .btn:hover::before {
            left: 100%;
        }

        .btn:hover {
            background: #ffaa00;
            transform: scale(1.05);
            box-shadow: 0 5px 20px rgba(255,215,0,0.4);
        }

        .btn-outline {
            background: transparent;
            border: 2px solid #FFD700;
            color: #FFD700;
        }

        .btn-outline:hover {
            background: #FFD700;
            color: #8B0000;
            box-shadow: 0 5px 20px rgba(255,215,0,0.4);
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 2rem;
        }

        section {
            padding: 4rem 2rem;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 2rem;
            color: #8B0000;
            position: relative;
        }

        .section-title:after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #FFD700, #FFA500);
            margin: 10px auto;
            border-radius: 2px;
        }

        /* Cards Grid Enhanced */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
        }
        
        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, #FFD700, #FFA500);
            transform: scaleX(0);
            transition: transform 0.3s;
            transform-origin: left;
        }

        .card:hover::before {
            transform: scaleX(1);
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .card:hover img {
            transform: scale(1.05);
        }

        .card-content {
            padding: 1.5rem;
        }

        .card-content h3 {
            color: #8B0000;
            margin-bottom: 0.5rem;
        }

        .info-item {
            font-size: 0.9rem;
            color: #555;
            margin: 0.5rem 0;
        }

        .info-item i {
            width: 25px;
            color: #FFD700;
        }

        /* Gallery Enhanced */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .gallery-item::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(139,0,0,0.3), rgba(0,0,0,0.3));
            opacity: 0;
            transition: opacity 0.3s;
        }
        
        .gallery-item:hover::after {
            opacity: 1;
        }

        .gallery-item img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        /* Lightbox */
        .lightbox {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.95);
            z-index: 2000;
            justify-content: center;
            align-items: center;
            animation: fadeIn 0.3s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .lightbox.active {
            display: flex;
        }

        .lightbox img {
            max-width: 90%;
            max-height: 90%;
            border-radius: 10px;
            box-shadow: 0 0 50px rgba(0,0,0,0.5);
        }

        .close-lightbox {
            position: absolute;
            top: 20px;
            right: 40px;
            color: white;
            font-size: 40px;
            cursor: pointer;
            transition: transform 0.3s;
        }
        
        .close-lightbox:hover {
            transform: rotate(90deg);
        }

        /* Itinerary Table Enhanced */
        .itinerary-card {
            background: white;
            border-radius: 20px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }
        
        .itinerary-card::before {
            content: '✧';
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 3rem;
            color: rgba(255,215,0,0.1);
            font-family: monospace;
        }
        
        .itinerary-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }

        .itinerary-card h3 {
            color: #8B0000;
            margin-bottom: 1rem;
            font-size: 1.8rem;
        }

        .timeline {
            list-style: none;
        }

        .timeline li {
            padding: 10px;
            border-left: 3px solid #FFD700;
            margin-bottom: 15px;
            background: #f9f9f9;
        }

        /* Contact Form Enhanced */
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
        }

        form {
            background: white;
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        
        form:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }

        input, textarea, select {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-family: inherit;
            transition: all 0.3s;
        }
        
        input:focus, textarea:focus, select:focus {
            outline: none;
            border-color: #FFD700;
            box-shadow: 0 0 10px rgba(255,215,0,0.3);
        }

        button {
            background: #8B0000;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-weight: bold;
            width: 100%;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }
        
        button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s;
        }
        
        button:hover::before {
            left: 100%;
        }

        button:hover {
            background: #a51c1c;
            transform: scale(1.02);
            box-shadow: 0 5px 20px rgba(139,0,0,0.4);
        }

        .travel-tips {
            background: linear-gradient(135deg, white, #fff5e6);
            padding: 1.5rem;
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        
        .travel-tips:hover {
            transform: translateY(-5px);
        }

        /* Alert Messages */
        .alert {
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 15px;
            text-align: center;
            animation: slideDown 0.5s ease;
        }
        
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-error {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        /* Footer Enhanced */
        footer {
            background: linear-gradient(135deg, #2c2c2c, #1a1a1a);
            color: white;
            text-align: center;
            padding: 2rem;
            margin-top: 2rem;
            position: relative;
        }
        
        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, #FFD700, #FFA500, #FFD700);
        }

        .social-links a {
            color: #FFD700;
            font-size: 1.8rem;
            margin: 0 10px;
            transition: all 0.3s;
            display: inline-block;
        }

        .social-links a:hover {
            color: white;
            transform: translateY(-5px) rotate(360deg);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .menu-toggle {
                display: block;
            }
            .nav-links {
                display: none;
                width: 100%;
                flex-direction: column;
                text-align: center;
                padding: 1rem 0;
            }
            .nav-links.active {
                display: flex;
                animation: slideDown 0.3s ease;
            }
            .hero-content h1 {
                font-size: 2.2rem;
            }
            .contact-grid {
                grid-template-columns: 1fr;
            }
            .section-title {
                font-size: 2rem;
            }
            .tagline {
                font-size: 1.2rem;
            }
        }

        /* Map embed */
        .map-container {
            margin-top: 1rem;
            border-radius: 15px;
            overflow: hidden;
        }

        iframe {
            width: 100%;
            height: 300px;
            border: 0;
            transition: transform 0.3s;
        }
        
        iframe:hover {
            transform: scale(1.02);
        }
        
        /* Active page highlight */
        .nav-links a.active-page {
            color: #FFD700;
        }
        
        .nav-links a.active-page::before {
            width: 100%;
        }
        
        /* Loading Animation */
        .loading-spinner {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s;
        }
        
        .spinner {
            width: 50px;
            height: 50px;
            border: 5px solid #f3f3f3;
            border-top: 5px solid #8B0000;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        /* Floating Animation for Cards */
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }
        
        .floating {
            animation: float 3s ease-in-out infinite;
        }
    </style>
    
    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>

<!-- Loading Spinner -->
<div class="loading-spinner" id="loadingSpinner">
    <div class="spinner"></div>
</div>

<nav id="navbar">
    <div class="nav-container">
        <div class="logo">Melaka<span>Explorer</span>.com</div>
        <div class="menu-toggle" id="mobile-menu">
            <i class="fas fa-bars"></i>
        </div>
        <ul class="nav-links" id="nav-links">
            <li><a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active-page' : ''; ?>">Home</a></li>
            <li><a href="attractions.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'attractions.php' ? 'active-page' : ''; ?>">Attractions</a></li>
            <li><a href="gallery.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'gallery.php' ? 'active-page' : ''; ?>">Gallery</a></li>
            <li><a href="culture-food.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'culture-food.php' ? 'active-page' : ''; ?>">Culture & Food</a></li>
            <li><a href="trip-planner.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'trip-planner.php' ? 'active-page' : ''; ?>">Trip Planner</a></li>
            <li><a href="contact.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active-page' : ''; ?>">Contact & Tips</a></li>
        </ul>
    </div>
</nav>

<script>
    // Loading spinner
    window.addEventListener('load', function() {
        const spinner = document.getElementById('loadingSpinner');
        setTimeout(function() {
            spinner.style.opacity = '0';
            setTimeout(function() {
                spinner.style.display = 'none';
            }, 500);
        }, 500);
    });
    
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
    
    // Mobile menu toggle
    const mobileBtn = document.getElementById('mobile-menu');
    const navLinks = document.getElementById('nav-links');
    if(mobileBtn) {
        mobileBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    }
    
    // Initialize AOS
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });
</script>