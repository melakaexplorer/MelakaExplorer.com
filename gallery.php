<?php
$page_title = "Gallery";
include 'header.php';

// Generate gallery images from 11.jpg to 34.jpg
$galleryImages = [];
for($i = 11; $i <= 34; $i++) {
    $galleryImages[] = $i . ".jpg";
}
?>

<section style="padding: 3rem 2rem;">
    <div class="container">
        <h2 class="section-title">Photo Gallery</h2>
        
        <!-- Gallery Category Filter (Optional) -->
        <div style="text-align: center; margin-bottom: 2rem;">
            <button class="filter-btn active" data-filter="all">All Photos</button>
            <button class="filter-btn" data-filter="heritage">Heritage</button>
            <button class="filter-btn" data-filter="food">Food</button>
            <button class="filter-btn" data-filter="nature">Nature</button>
            <button class="filter-btn" data-filter="night">Night Activities</button>
        </div>
        
        <div class="gallery-grid" id="gallery-grid">
            <?php foreach($galleryImages as $index => $img): ?>
            <div class="gallery-item" data-category="<?php 
                // Assign categories based on image number (you can customize this)
                if($index < 6) echo 'heritage';
                elseif($index < 12) echo 'food';
                elseif($index < 18) echo 'nature';
                elseif($index < 24) echo 'night';
                else echo 'heritage';
            ?>" onclick="openLightbox('<?php echo $img; ?>')">
                <img src="<?php echo $img; ?>" alt="Melaka Gallery Image <?php echo ($index + 11); ?>" loading="lazy">
                <div class="gallery-overlay">
                    <i class="fas fa-search-plus"></i>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <!-- Embedded Video with local MP4 file -->
        <div style="margin-top: 3rem; text-align: center;">
            <h3 style="color: #8B0000;">✨ Experience Melaka from Above ✨</h3>
            <div style="position: relative; padding-bottom: 56.25%; height: 0; margin-top: 1rem;">
                <video style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 20px; object-fit: cover;" 
                       controls 
                       autoplay 
                       loop 
                       muted>
                    <source src="vid1.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <p style="margin-top: 0.5rem;">🎥 Drone footage - Melaka River & Heritage Zone</p>
        </div>
    </div>
</section>

<style>
    /* Gallery Item Styling with Overlay */
    .gallery-item {
        position: relative;
        overflow: hidden;
        border-radius: 12px;
        cursor: pointer;
        transition: transform 0.3s;
    }
    
    .gallery-item:hover {
        transform: scale(1.02);
    }
    
    .gallery-item img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        transition: 0.3s;
    }
    
    .gallery-item:hover img {
        transform: scale(1.05);
    }
    
    .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.6);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: 0.3s;
        color: white;
        font-size: 2rem;
    }
    
    .gallery-item:hover .gallery-overlay {
        opacity: 1;
    }
    
    /* Filter Button Styles */
    .filter-btn {
        background: transparent;
        color: #8B0000;
        border: 2px solid #8B0000;
        padding: 8px 20px;
        margin: 0 5px;
        border-radius: 25px;
        cursor: pointer;
        font-weight: 500;
        transition: 0.3s;
    }
    
    .filter-btn:hover {
        background: #8B0000;
        color: white;
    }
    
    .filter-btn.active {
        background: #8B0000;
        color: white;
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .filter-btn {
            padding: 5px 12px;
            font-size: 0.8rem;
            margin: 5px;
        }
    }
</style>

<script>
    // Gallery Filter Functionality
    const filterButtons = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            
            // Get filter value
            const filterValue = button.getAttribute('data-filter');
            
            // Filter gallery items
            galleryItems.forEach(item => {
                if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 10);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        });
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