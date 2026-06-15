<?php
$page_title = "Contact & Tips";
include 'header.php';
?>

<section style="padding: 3rem 2rem;">
    <div class="container">
        <h2 class="section-title">Contact & Travel Tips</h2>
        
        <?php if(isset($_SESSION['form_message'])): ?>
            <div class="alert alert-<?php echo $_SESSION['form_type']; ?>">
                <?php 
                    echo $_SESSION['form_message'];
                    unset($_SESSION['form_message']);
                    unset($_SESSION['form_type']);
                ?>
            </div>
        <?php endif; ?>
        
        <div class="contact-grid">
            <div>
                <form action="process_contact.php" method="POST">
                    <h3>✉️ Send Us an Inquiry</h3>
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Email Address" required>
                    <input type="tel" name="phone" placeholder="Phone Number (optional)">
                    <select name="subject" required>
                        <option value="">Select Inquiry Type</option>
                        <option value="Tourism Inquiry">Tourism Inquiry</option>
                        <option value="Tour Package">Tour Package Question</option>
                        <option value="Feedback">Feedback / Suggestion</option>
                        <option value="Complaint">Report an Issue</option>
                    </select>
                    <textarea name="message" rows="4" placeholder="Your message..." required></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>
            
            <div class="travel-tips">
                <h3><i class="fas fa-lightbulb"></i> Travel Advisory & Tips</h3>
                <p><strong>🌤️ Weather:</strong> Tropical climate (27°C-32°C). Nov-Mar is rainy; best time: May-August.</p>
                <p><strong>🚌 Local Transport:</strong> Grab (ride-hailing), Panorama Melaka bus, trishaws (colorful & fun!).</p>
                <p><strong>💰 Budget:</strong> Mid-range meal RM10-20, hotel RM80-150 per night.</p>
                <p><strong>🕌 Cultural Respect:</strong> Dress modestly when visiting mosques/temples.</p>
                <p><strong>📅 Best Time to Visit:</strong> Weekdays (Tue-Thu) to avoid crowds.</p>
                <p><strong>🚑 Emergency:</strong> Police: 999 | Ambulance: 999</p>
                
                <div style="margin-top: 1.5rem;">
                    <h4>📍 Melaka Tourism Office</h4>
                    <p><i class="fas fa-map-marker-alt"></i> Jalan Kota, 75000 Melaka</p>
                    <p><i class="fas fa-phone"></i> +606-288 3300</p>
                    <p><i class="fas fa-envelope"></i> info@melakatourism.gov.my</p>
                </div>
                
                <div class="social-links" style="margin-top: 1rem;">
                    <h4>Follow Us</h4>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
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