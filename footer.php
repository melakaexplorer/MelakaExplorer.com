<!-- Lightbox -->
<div id="lightbox" class="lightbox">
    <span class="close-lightbox">&times;</span>
    <img id="lightbox-img" src="">
</div>

<footer>
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-bottom: 2rem; text-align: left;">
            <div>
                <h3 style="color: #FFD700; margin-bottom: 1rem;">MelakaExplorer.com</h3>
                <p style="font-size: 0.9rem;">Your ultimate guide to exploring the historic state of Melaka, Malaysia's UNESCO World Heritage gem.</p>
            </div>
            <div>
                <h3 style="color: #FFD700; margin-bottom: 1rem;">Quick Links</h3>
                <ul style="list-style: none;">
                    <li><a href="attractions.php" style="color: white; text-decoration: none; transition: 0.3s;">🏛️ Attractions</a></li>
                    <li><a href="gallery.php" style="color: white; text-decoration: none; transition: 0.3s;">📸 Gallery</a></li>
                    <li><a href="culture-food.php" style="color: white; text-decoration: none; transition: 0.3s;">🍜 Culture & Food</a></li>
                    <li><a href="trip-planner.php" style="color: white; text-decoration: none; transition: 0.3s;">🗺️ Trip Planner</a></li>
                </ul>
            </div>
            <div>
                <h3 style="color: #FFD700; margin-bottom: 1rem;">Contact Info</h3>
                <p><i class="fas fa-map-marker-alt"></i> Jalan Kota, 75000 Melaka</p>
                <p><i class="fas fa-phone"></i> +606-288 3300</p>
                <p><i class="fas fa-envelope"></i> info@melakaexplorer.com</p>
            </div>
        </div>
        <hr style="border-color: rgba(255,255,255,0.2); margin: 1rem 0;">
        <p>&copy; 2025 MelakaExplorer.com | Promoting the Historic State of Melaka | All Rights Reserved</p>
        <p>📍 UNESCO Heritage City | Malaysia Truly Asia</p>
        <div class="social-links" style="margin-top: 1rem;">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</footer>

<script>
    // Lightbox logic
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    
    function openLightbox(src) {
        if(lightbox) {
            lightbox.classList.add('active');
            lightboxImg.src = src;
        }
    }
    
    function closeLightbox() {
        if(lightbox) {
            lightbox.classList.remove('active');
        }
    }
    
    const closeBtn = document.querySelector('.close-lightbox');
    if(closeBtn) closeBtn.onclick = closeLightbox;
    if(lightbox) {
        lightbox.onclick = (e) => {
            if(e.target === lightbox) closeLightbox();
        };
    }
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if(target) {
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
</script>
</body>
</html>