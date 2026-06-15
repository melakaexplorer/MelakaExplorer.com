<?php
$page_title = "Home";
include 'header.php';
?>

<!-- Hero Section with Slideshow Background -->
<section class="hero" style="position: relative; overflow: hidden;">
    <!-- Slideshow Background -->
    <div class="slideshow-container" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 0;">
        <?php for($i = 1; $i <= 10; $i++): ?>
        <div class="slide fade" style="background-image: url('<?php echo $i; ?>.jpg');"></div>
        <?php endfor; ?>
    </div>
    
    <!-- Dark Overlay -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1;"></div>
    
    <!-- Navigation Arrows -->
    <div style="position: absolute; top: 50%; left: 20px; transform: translateY(-50%); z-index: 3; cursor: pointer; background: rgba(0,0,0,0.5); width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; transition: 0.3s;" onclick="changeSlide(-1)" onmouseover="this.style.background='#FFD700'; this.style.color='#8B0000'" onmouseout="this.style.background='rgba(0,0,0,0.5)'; this.style.color='white'">
        &#10094;
    </div>
    <div style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%); z-index: 3; cursor: pointer; background: rgba(0,0,0,0.5); width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; transition: 0.3s;" onclick="changeSlide(1)" onmouseover="this.style.background='#FFD700'; this.style.color='#8B0000'" onmouseout="this.style.background='rgba(0,0,0,0.5)'; this.style.color='white'">
        &#10095;
    </div>
    
    <!-- Dot Indicators -->
    <div class="slideshow-dots">
        <?php for($i = 1; $i <= 10; $i++): ?>
        <div class="dot" onclick="currentSlide(<?php echo $i; ?>)"></div>
        <?php endfor; ?>
    </div>
    
    <!-- Hero Content -->
    <div class="hero-content" style="position: relative; z-index: 2;">
        <h1>MelakaExplorer.com</h1>
        <div class="tagline">"Melaka: Where History Comes Alive"</div>
        <p>Discover heritage, culture, and unforgettable experiences in Malaysia's historic gem.</p>
        <a href="attractions.php" class="btn">Explore Now</a>
        <a href="trip-planner.php" class="btn btn-outline">Plan Your Trip</a>
    </div>
</section>

<style>
    /* Slideshow Styles */
    .slideshow-container {
        position: relative;
    }
    
    .slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        opacity: 0;
        transition: opacity 1.5s ease-in-out;
    }
    
    .slide.active {
        opacity: 1;
    }
    
    .fade {
        animation-name: fade;
        animation-duration: 1.5s;
    }
    
    @keyframes fade {
        from {opacity: 0.4;}
        to {opacity: 1;}
    }
    
    /* Slideshow Dots */
    .slideshow-dots {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 3;
        display: flex;
        gap: 10px;
    }
    
    .dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: rgba(255,255,255,0.5);
        cursor: pointer;
        transition: 0.3s;
    }
    
    .dot.active-dot, .dot:hover {
        background: #FFD700;
        transform: scale(1.2);
    }
    
    /* Quick Highlights Card Images */
    .highlight-img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
</style>

<script>
    let slideIndex = 1;
    let slideInterval;
    const totalSlides = 10;
    
    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("slide");
        let dots = document.getElementsByClassName("dot");
        
        if (n > totalSlides) {slideIndex = 1}
        if (n < 1) {slideIndex = totalSlides}
        
        for (i = 0; i < slides.length; i++) {
            slides[i].classList.remove("active");
        }
        
        for (i = 0; i < dots.length; i++) {
            dots[i].classList.remove("active-dot");
        }
        
        slides[slideIndex-1].classList.add("active");
        if (dots[slideIndex-1]) {
            dots[slideIndex-1].classList.add("active-dot");
        }
    }
    
    function changeSlide(n) {
        clearInterval(slideInterval);
        showSlides(slideIndex += n);
        startAutoSlide();
    }
    
    function currentSlide(n) {
        clearInterval(slideInterval);
        showSlides(slideIndex = n);
        startAutoSlide();
    }
    
    function startAutoSlide() {
        slideInterval = setInterval(function() {
            showSlides(slideIndex += 1);
        }, 4000);
    }
    
    // Initialize slideshow
    document.addEventListener('DOMContentLoaded', function() {
        showSlides(slideIndex);
        startAutoSlide();
    });
</script>

<!-- Brief Intro with Animation -->
<div class="container" style="text-align: center; margin-top: -2rem;" data-aos="fade-up">
    <p style="font-size: 1.2rem;">🏛️ A UNESCO World Heritage Site, Melaka offers a rich tapestry of Peranakan, Portuguese, Dutch, and British influences. From Jonker Street night markets to the tranquil Melaka River, your adventure begins here.</p>
</div>

<!-- Quick Highlights -->
<section style="padding: 2rem;">
    <div class="container">
        <h2 class="section-title" data-aos="fade-down">Why Visit Melaka?</h2>
        <div class="cards-grid">
            <div class="card" data-aos="flip-left" data-aos-delay="100">
                <img src="richheritage.jpg" alt="Rich Heritage" class="highlight-img" onerror="this.src='https://images.unsplash.com/photo-1585238342024-afd10fbfc2f4?q=80&w=2070&auto=format'">
                <div class="card-content">
                    <h3>Rich Heritage</h3>
                    <p>UNESCO World Heritage site with 500+ years of history.</p>
                    <div class="info-item"><i class="fas fa-building"></i> 50+ Historical Sites</div>
                </div>
            </div>
            <div class="card" data-aos="flip-up" data-aos-delay="200">
                <img src="amazingfood.jpg" alt="Amazing Food" class="highlight-img" onerror="this.src='https://images.unsplash.com/photo-1545247181-516773cae754?q=80&w=2070&auto=format'">
                <div class="card-content">
                    <h3>Amazing Food</h3>
                    <p>From Nyonya cuisine to chicken rice balls.</p>
                    <div class="info-item"><i class="fas fa-utensils"></i> 100+ Local Delicacies</div>
                </div>
            </div>
            <div class="card" data-aos="flip-right" data-aos-delay="300">
                <img src="topattractions.jpg" alt="Top Attractions" class="highlight-img" onerror="this.src='https://images.unsplash.com/photo-1620805137662-9b8f0b4f8c4c?q=80&w=2070&auto=format'">
                <div class="card-content">
                    <h3>Top Attractions</h3>
                    <p>River cruises, night markets, and cultural sites.</p>
                    <div class="info-item"><i class="fas fa-map-marker-alt"></i> Must-Visit Places</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Stats with Counter Animation -->
<section style="background: #8B0000; color: white; text-align: center; padding: 3rem; position: relative; overflow: hidden;">
    <div style="position: absolute; top: -50%; right: -10%; width: 300px; height: 300px; background: rgba(255,215,0,0.1); border-radius: 50%;"></div>
    <div style="position: absolute; bottom: -30%; left: -5%; width: 200px; height: 200px; background: rgba(255,215,0,0.1); border-radius: 50%;"></div>
    <div class="container" style="position: relative; z-index: 1;">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem;">
            <div data-aos="zoom-in" data-aos-delay="100">
                <i class="fas fa-building" style="font-size: 3rem; color: #FFD700;"></i>
                <h3 style="font-size: 2.5rem; margin-top: 1rem;" class="counter" data-target="500">500+</h3>
                <p>Years of History</p>
            </div>
            <div data-aos="zoom-in" data-aos-delay="200">
                <i class="fas fa-utensils" style="font-size: 3rem; color: #FFD700;"></i>
                <h3 style="font-size: 2.5rem; margin-top: 1rem;" class="counter" data-target="100">100+</h3>
                <p>Local Delicacies</p>
            </div>
            <div data-aos="zoom-in" data-aos-delay="300">
                <i class="fas fa-map-marker-alt" style="font-size: 3rem; color: #FFD700;"></i>
                <h3 style="font-size: 2.5rem; margin-top: 1rem;" class="counter" data-target="50">50+</h3>
                <p>Tourist Attractions</p>
            </div>
        </div>
    </div>
</section>

<script>
// Counter animation
const counters = document.querySelectorAll('.counter');
const speed = 200;

const animateCounter = (counter) => {
    const updateCount = () => {
        const target = parseInt(counter.getAttribute('data-target'));
        const count = parseInt(counter.innerText);
        const increment = target / speed;
        
        if (count < target) {
            counter.innerText = Math.ceil(count + increment);
            setTimeout(updateCount, 20);
        } else {
            counter.innerText = target + '+';
        }
    };
    updateCount();
};

// Trigger counter when in viewport
const observerOptions = {
    threshold: 0.5
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const counter = entry.target;
            animateCounter(counter);
            observer.unobserve(counter);
        }
    });
}, observerOptions);

counters.forEach(counter => {
    observer.observe(counter);
});
</script>
<!-- Back to Top Button -->
<style>
    .back-to-top {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 50px;
        height: 50px;
        background: #8B0000;
        color: #FFD700;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s;
        z-index: 1000;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }
    
    .back-to-top.show {
        opacity: 1;
        visibility: visible;
    }
    
    .back-to-top:hover {
        background: #FFD700;
        color: #8B0000;
        transform: translateY(-5px);
    }
</style>

<div class="back-to-top" id="backToTop">
    <i class="fas fa-arrow-up"></i>
</div>

<script>
    const backToTop = document.getElementById('backToTop');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            backToTop.classList.add('show');
        } else {
            backToTop.classList.remove('show');
        }
    });
    
    backToTop.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>
<?php include 'footer.php'; ?>