<?php
$page_title = "Trip Planner";
include 'header.php';
?>

<style>
    /* Itinerary Card Styling */
    .itinerary-card {
        background: white;
        border-radius: 20px;
        padding: 1.5rem;
        margin-bottom: 2rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s;
    }
    
    .itinerary-card:hover {
        transform: translateY(-5px);
    }
    
    .itinerary-card h3 {
        color: #8B0000;
        margin-bottom: 1rem;
        font-size: 1.8rem;
    }
    
    .timeline {
        list-style: none;
        padding: 0;
    }
    
    .timeline li {
        padding: 12px 10px;
        border-left: 3px solid #FFD700;
        margin-bottom: 15px;
        background: #f9f9f9;
        display: flex;
        align-items: center;
        gap: 15px;
        flex-wrap: wrap;
        border-radius: 8px;
    }
    
    .activity-img {
        width: 100px;
        height: 100px;
        border-radius: 10px;
        object-fit: cover;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    
    .activity-text {
        flex: 1;
    }
    
    .activity-text strong {
        color: #8B0000;
        font-size: 1rem;
    }
    
    /* Day separator styling */
    .day-separator {
        background: linear-gradient(135deg, #FFD700, #FFA500);
        color: #8B0000;
        padding: 8px 15px;
        border-radius: 25px;
        display: inline-block;
        margin-bottom: 15px;
        font-weight: bold;
    }
    
    /* Map Container Styling */
    .map-container {
        margin-top: 20px;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }
    
    .map-container iframe {
        width: 100%;
        height: 400px;
        border: 0;
    }
    
    .route-btn {
        display: inline-block;
        background: #8B0000;
        color: white;
        padding: 10px 20px;
        border-radius: 25px;
        text-decoration: none;
        margin-top: 15px;
        font-size: 0.9rem;
        transition: 0.3s;
    }
    
    .route-btn:hover {
        background: #6b0000;
        transform: scale(1.02);
    }
    
    /* Budget table responsive */
    @media (max-width: 768px) {
        .timeline li {
            flex-direction: column;
            text-align: center;
        }
        
        .activity-img {
            width: 100px;
            height: 100px;
        }
        
        .map-container iframe {
            height: 300px;
        }
        
        table, thead, tbody, th, td, tr {
            display: block;
        }
        
        table tr {
            margin-bottom: 10px;
            display: block;
        }
        
        table td, table th {
            display: block;
            text-align: right;
            padding-left: 50%;
            position: relative;
        }
        
        table td:before, table th:before {
            content: attr(data-label);
            position: absolute;
            left: 12px;
            font-weight: bold;
        }
    }
</style>

<section style="padding: 3rem 2rem;">
    <div class="container">
        <h2 class="section-title">Plan Your Melaka Adventure</h2>
        
        <!-- ==================== 1 DAY ITINERARY ==================== -->
        <div class="itinerary-card">
            <h3>🗓️ 1-Day Express: Heritage Walk</h3>
            <ul class="timeline">
                <li>
                    <img src="riceball.jpg" alt="Breakfast" class="activity-img" onerror="this.src='https://via.placeholder.com/100x100?text=Food'">
                    <div class="activity-text">
                        <strong>08:00</strong> - Breakfast at Kedai Kopi Chung Wah (Chicken Rice Ball)
                    </div>
                </li>
                <li>
                    <img src="afamosa.jpg" alt="A Famosa" class="activity-img" onerror="this.src='https://via.placeholder.com/100x100?text=Heritage'">
                    <div class="activity-text">
                        <strong>10:00</strong> - A Famosa & St. Paul's Hill
                    </div>
                </li>
                <li>
                    <img src="stad.jpg" alt="Stadthuys" class="activity-img" onerror="this.src='https://via.placeholder.com/100x100?text=Church'">
                    <div class="activity-text">
                        <strong>12:00</strong> - The Stadthuys & Christ Church
                    </div>
                </li>
                <li>
                    <img src="nancy.jpg" alt="Lunch" class="activity-img" onerror="this.src='https://via.placeholder.com/100x100?text=Lunch'">
                    <div class="activity-text">
                        <strong>14:00</strong> - Lunch at Nancy's Kitchen (Nyonya Food)
                    </div>
                </li>
                <li>
                    <img src="rivercruise.jpeg" alt="River Cruise" class="activity-img" onerror="this.src='https://via.placeholder.com/100x100?text=Cruise'">
                    <div class="activity-text">
                        <strong>16:00</strong> - Melaka River Cruise
                    </div>
                </li>
                <li>
                    <img src="jonker.jpeg" alt="Jonker Street" class="activity-img" onerror="this.src='https://via.placeholder.com/100x100?text=Night+Market'">
                    <div class="activity-text">
                        <strong>19:00</strong> - Jonker Street Night Market (weekends) & Dinner
                    </div>
                </li>
            </ul>
            
            <!-- Google Map for 1-Day Trip -->
            <div class="map-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=1!1m28!1m12!1m3!1d31891.68068489247!2d102.24014223750794!3d2.190375655268966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e2!4m5!1s0x31d1e4669511ddbd%3A0x7b8c8e8e9b9e9b9e!2sKedai%20Kopi%20Chung%20Wah%2C%20Melaka!3m2!1d2.196472!2d102.248217!4m5!1s0x31d1e4669511ddbd%3A0x7b8c8e8e9b9e9b9e!2sA%20Famosa%2C%20Melaka!3m2!1d2.191735!2d102.250676!5e0!3m2!1sen!2smy!4v1700000000000!5m2!1sen!2smy" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div style="text-align: center; margin-top: 15px;">
                <a href="https://www.google.com/maps/dir/Kedai+Kopi+Chung+Wah,+Melaka/A+Famosa,+Melaka/Stadthuys,+Melaka/Nancy's+Kitchen,+Melaka/Melaka+River+Cruise+Jetty/Jonker+Street,+Melaka" 
                   target="_blank" 
                   class="route-btn">
                    <i class="fas fa-directions"></i> Open Full Route in Google Maps →
                </a>
            </div>
            <div class="info-item"><i class="fas fa-walking"></i> Walking distance: ~5km</div>
            <div class="info-item"><i class="fas fa-clock"></i> Suggested start: Early morning</div>
        </div>
        
        <!-- ==================== 2 DAY ITINERARY ==================== -->
        <div class="itinerary-card">
            <h3>🗓️ 2-Day: Culture + Family Fun</h3>
            
            <div class="day-separator">📅 DAY 1 - Heritage Focus</div>
            <ul class="timeline">
                <li>
                    <img src="afamosa.jpg" alt="Heritage Walk" class="activity-img" onerror="this.src='https://via.placeholder.com/100x100?text=Heritage'">
                    <div class="activity-text">
                        <strong>Morning:</strong> Heritage walk, A Famosa, St. Paul's Hill, Stadthuys
                    </div>
                </li>
                <li>
                    <img src="palace.jpg" alt="Sultanate Palace" class="activity-img" onerror="this.src='https://via.placeholder.com/100x100?text=Palace'">
                    <div class="activity-text">
                        <strong>Afternoon:</strong> Melaka Sultanate Palace, River Cruise
                    </div>
                </li>
                <li>
                    <img src="jonker.jpeg" alt="Jonker Street" class="activity-img" onerror="this.src='https://via.placeholder.com/100x100?text=Night+Market'">
                    <div class="activity-text">
                        <strong>Evening:</strong> Jonker Street Night Market, Dinner
                    </div>
                </li>
            </ul>
            
            <!-- Google Map for Day 1 -->
            <div class="map-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=1!1m22!1m12!1m3!1d31891.68068489247!2d102.24014223750794!3d2.190375655268966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m7!3e2!4m5!1s0x31d1e4669511ddbd%3A0x7b8c8e8e9b9e9b9e!2sA%20Famosa%2C%20Melaka!3m2!1d2.191735!2d102.250676!5e0!3m2!1sen!2smy!4v1700000000000!5m2!1sen!2smy" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            
            <div class="day-separator" style="margin-top: 20px;">📅 DAY 2 - Family Fun</div>
            <ul class="timeline">
                <li>
                    <img src="zoo.jpg" alt="Zoo Melaka" class="activity-img" onerror="this.src='https://via.placeholder.com/100x100?text=Zoo'">
                    <div class="activity-text">
                        <strong>Morning:</strong> Melaka Zoo or Bird Park
                    </div>
                </li>
                <li>
                    <img src="sari.jpg" alt="Menara Taming Sari" class="activity-img" onerror="this.src='https://via.placeholder.com/100x100?text=Tower'">
                    <div class="activity-text">
                        <strong>Afternoon:</strong> Lunch Asam Pedas, Menara Taming Sari revolving tower
                    </div>
                </li>
                <li>
                    <img src="settle.jpg" alt="Portuguese Settlement" class="activity-img" onerror="this.src='https://via.placeholder.com/100x100?text=Settlement'">
                    <div class="activity-text">
                        <strong>Evening:</strong> Shopping at Mahkota Parade, Portuguese Settlement dinner
                    </div>
                </li>
            </ul>
            
            <!-- Google Map for Day 2 -->
            <div class="map-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=1!1m22!1m12!1m3!1d31895.123456789!2d102.235!3d2.185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m7!3e2!4m5!1s0x31d1e456789abcd%3A0x123456789abcdef!2sZoo%20Melaka!3m2!1d2.185!2d102.235!5e0!3m2!1sen!2smy!4v1700000000000!5m2!1sen!2smy" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            
            <div style="text-align: center; margin-top: 15px;">
                <a href="https://www.google.com/maps/dir/A+Famosa,+Melaka/Melaka+Sultanate+Palace/Jonker+Street,+Melaka" 
                   target="_blank" 
                   class="route-btn">
                    <i class="fas fa-directions"></i> Open Day 1 Route in Google Maps →
                </a>
                <a href="https://www.google.com/maps/dir/Zoo+Melaka/Menara+Taming+Sari/Mahkota+Parade" 
                   target="_blank" 
                   class="route-btn" style="margin-left: 10px;">
                    <i class="fas fa-directions"></i> Open Day 2 Route →
                </a>
            </div>
        </div>
        
        <!-- ==================== 3 DAY ITINERARY ==================== -->
        <div class="itinerary-card">
            <h3>🗓️ 3-Day: Complete Melaka Experience</h3>
            
            <div class="day-separator">📅 DAY 1 - Heritage & Culture</div>
            <ul class="timeline">
                <li>
                    <img src="rivercruise.jpeg" alt="Heritage Zone" class="activity-img" onerror="this.src='https://via.placeholder.com/100x100?text=Heritage'">
                    <div class="activity-text">
                        <strong>Day 1:</strong> Heritage Zone + River Cruise + Jonker Street
                    </div>
                </li>
            </ul>
            
            <!-- Google Map for Day 1 -->
            <div class="map-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=1!1m18!1m12!1m3!1d31891.68068489247!2d102.24014223750794!3d2.190375655268966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d1e4669511ddbd%3A0x7b8c8e8e9b9e9b9e!2sJonker%20Street%2C%20Melaka!5e0!3m2!1sen!2smy!4v1700000000000!5m2!1sen!2smy" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            
            <div class="day-separator" style="margin-top: 20px;">📅 DAY 2 - Adventure & Fun</div>
            <ul class="timeline">
                <li>
                    <img src="snow.jpg" alt="Waterpark & Snow" class="activity-img" onerror="this.src='https://via.placeholder.com/100x100?text=Adventure'">
                    <div class="activity-text">
                        <strong>Day 2:</strong> Melaka Waterpark + Snow World + Zoo Melaka Night Safari
                    </div>
                </li>
            </ul>
            
            <!-- Google Map for Day 2 -->
            <div class="map-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=1!1m18!1m12!1m3!1d31895.123456789!2d102.235!3d2.185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d1e456789abcd%3A0x123456789abcdef!2sZoo%20Melaka!5e0!3m2!1sen!2smy!4v1700000000000!5m2!1sen!2smy" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            
            <div class="day-separator" style="margin-top: 20px;">📅 DAY 3 - Nature & Food</div>
            <ul class="timeline">
                <li>
                    <img src="bird.jpg" alt="Bird Park" class="activity-img" onerror="this.src='https://via.placeholder.com/100x100?text=Bird+Park'">
                    <div class="activity-text">
                        <strong>Day 3:</strong> Melaka Bird Park + Butterfly & Reptile Sanctuary + Try Cendol at Jonker 88 + Shopping
                    </div>
                </li>
            </ul>
            
            <!-- Google Map for Day 3 -->
            <div class="map-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=1!1m18!1m12!1m3!1d31893.456789!2d102.230!3d2.190!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d1e44556677889%3A0x987654321abcdef!2sMelaka%20Bird%20Park!5e0!3m2!1sen!2smy!4v1700000000000!5m2!1sen!2smy" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            
            <div style="text-align: center; margin-top: 15px;">
                <a href="https://www.google.com/maps/dir/Jonker+Street,+Melaka/Melaka+Waterpark/Zoo+Melaka/Melaka+Bird+Park" 
                   target="_blank" 
                   class="route-btn">
                    <i class="fas fa-directions"></i> Open Full 3-Day Route in Google Maps →
                </a>
            </div>
        </div>
        
        <!-- Travel Tips Box -->
        <div style="background: #FFD70020; padding: 1.5rem; border-radius: 20px; margin-top: 1rem;">
            <h3><i class="fas fa-lightbulb"></i> Essential Travel Tips</h3>
            <ul style="margin-left: 2rem;">
                <li>✅ Wear comfortable shoes - you'll be walking a lot!</li>
                <li>✅ Bring hat, sunglasses, and sunscreen (tropical sun is strong)</li>
                <li>✅ Visit on weekdays (Tuesday-Thursday) to avoid weekend crowds</li>
                <li>✅ Download Grab app for affordable rides</li>
                <li>✅ Carry cash as some street vendors don't accept cards</li>
                <li>✅ Book hotels in advance during peak season (June-August, December)</li>
                <li>✅ Use Google Maps to navigate between attractions</li>
            </ul>
        </div>
        
        <!-- Budget Guide -->
        <div style="margin-top: 2rem;">
            <h3 style="color: #8B0000;">💰 Budget Travel Guide (Per Person/Day)</h3>
            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse; background: white; border-radius: 15px; overflow: hidden;">
                    <tr style="background: #8B0000; color: white;">
                        <th style="padding: 12px; text-align: left;">Category</th>
                        <th style="padding: 12px; text-align: left;">Budget (RM)</th>
                        <th style="padding: 12px; text-align: left;">Mid-Range (RM)</th>
                        <th style="padding: 12px; text-align: left;">Luxury (RM)</th>
                    </tr>
                    <tr style="border-bottom: 1px solid #ddd;">
                        <td style="padding: 12px;" data-label="Category">Accommodation</td>
                        <td style="padding: 12px;" data-label="Budget">50-80</td>
                        <td style="padding: 12px;" data-label="Mid-Range">100-180</td>
                        <td style="padding: 12px;" data-label="Luxury">250+</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #ddd;">
                        <td style="padding: 12px;" data-label="Category">Food</td>
                        <td style="padding: 12px;" data-label="Budget">20-30</td>
                        <td style="padding: 12px;" data-label="Mid-Range">40-70</td>
                        <td style="padding: 12px;" data-label="Luxury">100+</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px;" data-label="Category">Transport</td>
                        <td style="padding: 12px;" data-label="Budget">10-20</td>
                        <td style="padding: 12px;" data-label="Mid-Range">30-50</td>
                        <td style="padding: 12px;" data-label="Luxury">80+</td>
                    </tr>
                </table>
            </div>
        </div>
        
        <!-- Download Itinerary Button -->
        <div style="text-align: center; margin-top: 2rem;">
            <button onclick="window.print()" style="background: #8B0000; color: white; padding: 12px 30px; border: none; border-radius: 50px; cursor: pointer; font-size: 1rem;">
                <i class="fas fa-download"></i> Download Itinerary (Print)
            </button>
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