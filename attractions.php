<!-- Add this before your existing content -->
<style>
    .card {
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    
    .info-item a {
        transition: all 0.3s;
    }
    
    .info-item a:hover {
        color: #FFD700 !important;
        padding-left: 5px;
    }
</style>
<?php
$page_title = "Attractions";
include 'header.php';

$attractions = [
    ["name" => "A Famosa & Stadthuys", "desc" => "Remains of Portuguese fort & Dutch red buildings.", "hours" => "9am-6pm", "fee" => "RM5 (Stadthuys Museum)", "img" => "afamosa.jpg", "website" => "https://www.afamosa.com/"],
    ["name" => "Jonker Street", "desc" => "Night market, antique shops & street food.", "hours" => "Fri-Sat 6pm-11pm", "fee" => "Free entry", "img" => "jonker.jpeg", "website" => "https://discovermalaysia-unesco.com/portfolio/jonker-walk-melaka/"],
    ["name" => "Melaka River Cruise", "desc" => "Scenic 45-min river tour.", "hours" => "9am-11pm", "fee" => "RM25 adult", "img" => "rivercruise.jpeg", "website" => "https://ticket.melakarivercruise.my/"],
    ["name" => "Zoo Melaka", "desc" => "Night safari & animal shows.", "hours" => "10am-10pm", "fee" => "RM35 adult", "img" => "zoo.jpg", "website" => "https://www.melakabook.my/ms/attractions/zoo-melaka"],
    ["name" => "Melaka Waterpark", "desc" => "Slides and family pools.", "hours" => "10am-7pm", "fee" => "RM40", "img" => "waterpark.webp", "website" => "https://www.melakawonderland.com.my/bm/"],
    ["name" => "Snow World Melaka", "desc" => "Indoor snow fun.", "hours" => "11am-8pm", "fee" => "RM30", "img" => "snow.jpg", "website" => "https://snowworldmelaka.com.my/"],
    ["name" => "Hang Tuah Centre", "desc" => "Malay History and Hikayat Hang Tuah.", "hours" => "9am-5.30pm", "fee" => "RM10 adult", "img" => "hangtuahcentre.jpg", "website" => "https://visitmelaka.com.my/index.php/culture-heritagemenu/heritage/47-hang-tuah-centre"],
    ["name" => "Submarine Museum", "desc" => "FS Ouessant Agosta 70.", "hours" => "9am-5pm", "fee" => "RM10 adult", "img" => "submarine.jpg", "website" => "https://visitmelaka.com.my/index.php/nature-adventure/recreation/137-submarine-museum"],
    ["name" => "Encore Melaka", "desc" => "Biggest theatre in Southeast Asia with 360-degree rotating auditorium.", "hours" => "Shows vary, check website", "fee" => "Check website", "img" => "encore.jpg", "website" => "https://encore-melaka.com/"]
];
?>

<section style="padding: 3rem 2rem;">
    <div class="container">
        <h2 class="section-title">Top Attractions in Melaka</h2>
        <div class="cards-grid">
            <?php foreach($attractions as $att): ?>
            <div class="card">
                <img src="<?php echo $att['img']; ?>" alt="<?php echo $att['name']; ?>" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1545247181-516773cae754?q=80&w=2070&auto=format'">
                <div class="card-content">
                    <h3><?php echo $att['name']; ?></h3>
                    <p><?php echo $att['desc']; ?></p>
                    <div class="info-item"><i class="far fa-clock"></i> <?php echo $att['hours']; ?></div>
                    <div class="info-item"><i class="fas fa-ticket-alt"></i> <?php echo $att['fee']; ?></div>
                    
                    <!-- Official Website Link for all attractions -->
                    <?php if(isset($att['website'])): ?>
                    <div class="info-item">
                        <i class="fas fa-globe"></i> 
                        <a href="<?php echo $att['website']; ?>" target="_blank" rel="noopener noreferrer" style="color: #8B0000; text-decoration: none; font-weight: 500;">
                            Official Website →
                        </a>
                    </div>
                    <?php endif; ?>
                    
                    <div class="map-container">
                        <iframe src="https://maps.google.com/?q=<?php echo urlencode($att['name'] . ' Melaka'); ?>&output=embed" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
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