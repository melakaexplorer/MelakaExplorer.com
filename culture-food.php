<?php
$page_title = "Culture & Food";
include 'header.php';

// Culture Section Data
$cultureItems = [
    ["name" => "Malay Community", "desc" => "The Malay community forms the backbone of Melaka's culture, with rich traditions in music (Dikir Barat), dance (Joget), and traditional games like Wau and Gasing. Malay weddings and religious celebrations showcase the warm hospitality of the community.", "img" => "malay.jpg"],
    ["name" => "Chinese Community", "desc" => "Melaka's Chinese community has preserved their heritage for generations. Visit the Cheng Hoon Teng Temple (oldest Chinese temple in Malaysia), experience the Hungry Ghost Festival, and explore the historic Chinese settlement along Jalan Tokong.", "img" => "chinese.jpg"],
    ["name" => "Indian Community", "desc" => "The Indian community adds vibrant color to Melaka's cultural tapestry. Visit the Sri Poyyatha Vinayagar Moorthi Temple (oldest Hindu temple in Malaysia), enjoy Deepavali celebrations, and explore Little India on Jalan Bendahara.", "img" => "indian.jpg"],
    ["name" => "Baba Nyonya (Peranakan)", "desc" => "The Peranakan Chinese or Baba Nyonya culture is unique to Melaka and Penang. Blending Chinese and Malay traditions, they have distinctive architecture, clothing (kebaya), language, and cuisine. Visit the Baba Nyonya Heritage Museum to learn more.", "img" => "baba.jpg"],
    ["name" => "Portuguese Community", "desc" => "The Kristang people are descendants of Portuguese colonists from the 16th century. Living in the Portuguese Settlement, they preserve their language (Papia Kristang), dance (Branyo), and celebrate Festa San Pedro (St. Peter's Festival) with great enthusiasm.", "img" => "portugis.jpg"]
];

// Food Section Data
$foodItems = [
    ["name" => "Bistro & Cafe", "desc" => "Modern cafes and bistros offering fusion cuisine, artisanal coffee, and relaxing ambience throughout Melaka's heritage district.", "img" => "bistro.jpg"],
    ["name" => "International Cuisine", "desc" => "From Western to Japanese and Middle Eastern, Melaka offers diverse international dining options for every palate.", "img" => "international.jpg"],
    ["name" => "Popular Melaka Food", "desc" => "A variety of must-try local delicacies that define Melaka's unique food scene and attract food lovers worldwide.", "img" => "variety.jpg"],
    ["name" => "Portuguese Cuisine", "desc" => "Devi's Curry, Portuguese Baked Fish, and other Eurasian specialties influenced by 500 years of Portuguese heritage.", "img" => "portugese.jpg"],
    ["name" => "Baba Nyonya Cuisine", "desc" => "Authentic Peranakan dishes like Ayam Pongteh, Itik Tim, Otak-Otak, and Nyonya Laksa - a perfect blend of Chinese and Malay cooking.", "img" => "babanyonyacuisine.jpg"],
    ["name" => "Indian Cuisine", "desc" => "Flavorful banana leaf rice, fish head curry, roti canai, biryani, and delicious Indian sweets found along Little India.", "img" => "indiancuisine.jpg"],
    ["name" => "Chinese Cuisine", "desc" => "Traditional Hainanese, Cantonese, and Hokkien dishes including satay bee hoon, wantan mee, and fresh seafood.", "img" => "chinesecuisine.jpg"],
    ["name" => "Hard Rock Cafe Melaka", "desc" => "Iconic American diner experience featuring burgers, ribs, and live music in a rock-and-roll atmosphere overlooking the Melaka River.", "img" => "hrcmelaka.jpg"],
    ["name" => "Satay Celup", "desc" => "Melaka's signature dish - skewered meat, seafood, and vegetables boiled in a rich, spicy peanut satay sauce. A must-try at Jalan Ong Kim Wee!", "img" => "sataycelup.jpg"],
    ["name" => "Chicken Rice Ball", "desc" => "Hainanese chicken rice rolled into golf-ball-sized portions, served with tender poached chicken and chili sauce. Famous at Jonker Street!", "img" => "riceball.jpg"],
    ["name" => "Asam Pedas Melaka", "desc" => "Spicy and sour fish stew made with tamarind, chili, and local herbs. A signature Malay dish best enjoyed with steamed rice.", "img" => "asampedas.jpg"],
    ["name" => "Cendol", "desc" => "Refreshing dessert made with shaved ice, coconut milk, green rice flour jelly, red beans, and palm sugar syrup. Perfect for Melaka's heat!", "img" => "cendol.jpg"],
    ["name" => "Cencaluk & Belacan", "desc" => "Fermented shrimp paste (belacan) and tiny shrimp (cencaluk) - essential condiments that add umami to many Melaka dishes.", "img" => "belacancencaluk.jpg"]
];
?>

<style>
    /* Section styling */
    .culture-section, .food-section {
        margin-bottom: 4rem;
    }
    
    .section-subtitle {
        text-align: center;
        font-size: 2rem;
        margin-bottom: 2rem;
        color: #8B0000;
        position: relative;
    }
    
    .section-subtitle:after {
        content: '';
        display: block;
        width: 60px;
        height: 3px;
        background: #FFD700;
        margin: 10px auto;
    }
    
    /* Card styling */
    .culture-card, .food-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        transition: transform 0.3s, box-shadow 0.3s;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    
    .culture-card:hover, .food-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    }
    
    .culture-card img, .food-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        transition: transform 0.3s;
    }
    
    .culture-card:hover img, .food-card:hover img {
        transform: scale(1.03);
    }
    
    .card-desc {
        padding: 1.5rem;
        flex-grow: 1;
    }
    
    .card-desc h3 {
        color: #8B0000;
        margin-bottom: 0.75rem;
        font-size: 1.3rem;
    }
    
    .card-desc p {
        color: #555;
        line-height: 1.6;
        font-size: 0.95rem;
    }
    
    .food-tag {
        display: inline-block;
        background: #FFD700;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: bold;
        color: #8B0000;
        margin-top: 10px;
    }
    
    /* Cultural introduction enhancement */
    .culture-intro {
        background: linear-gradient(135deg, #FFD70020, #FFA50020);
    }
</style>

<section style="padding: 3rem 2rem;">
    <div class="container">
        <h2 class="section-title">Cultural & Food Highlights</h2>
        
        <!-- Cultural Introduction -->
        <div class="culture-intro" style="background: #FFD70020; padding: 2rem; border-radius: 20px; margin-bottom: 3rem; text-align: center;">
            <h3 style="color: #8B0000;">🎭 Unique Melaka Culture</h3>
            <p>Melaka is a melting pot of Malay, Chinese, Indian, Portuguese, Dutch, and British influences. The Peranakan (Baba Nyonya) culture is unique to this region, blending Chinese and Malay traditions.</p>
            <p><strong>Festivals:</strong> Hungry Ghost Festival, Portuguese Settlement Fiesta, and Melaka River Festival.</p>
        </div>
        
        <!-- ==================== CULTURE SECTION ==================== -->
        <div class="culture-section">
            <h2 class="section-subtitle">
                <i class="fas fa-users"></i> Communities of Melaka
            </h2>
            <div class="cards-grid">
                <?php foreach($cultureItems as $item): ?>
                <div class="culture-card">
                    <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['name']; ?>" loading="lazy" onerror="this.src='https://via.placeholder.com/400x200?text=<?php echo urlencode($item['name']); ?>'">
                    <div class="card-desc">
                        <h3><?php echo $item['name']; ?></h3>
                        <p><?php echo $item['desc']; ?></p>
                        <span class="food-tag"><i class="fas fa-landmark"></i> Cultural Heritage</span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        
        <!-- ==================== FOOD SECTION ==================== -->
        <div class="food-section">
            <h2 class="section-subtitle">
                <i class="fas fa-utensils"></i> Culinary Delights of Melaka
            </h2>
            <div class="cards-grid">
                <?php foreach($foodItems as $item): ?>
                <div class="food-card">
                    <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['name']; ?>" loading="lazy" onerror="this.src='https://via.placeholder.com/400x200?text=<?php echo urlencode($item['name']); ?>'">
                    <div class="card-desc">
                        <h3><?php echo $item['name']; ?></h3>
                        <p><?php echo $item['desc']; ?></p>
                        <span class="food-tag"><i class="fas fa-star"></i> Must-Try</span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        
        <!-- Traditional Architecture Section -->
        <div style="margin-top: 3rem;">
            <h3 style="color: #8B0000; text-align: center;">🏛️ Traditional Architecture</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
                <div style="background: white; padding: 1.5rem; border-radius: 15px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                    <i class="fas fa-church" style="font-size: 2rem; color: #8B0000;"></i>
                    <h4>Dutch Colonial</h4>
                    <p>Stadthuys, Christ Church - distinctive red buildings from 1650s.</p>
                </div>
                <div style="background: white; padding: 1.5rem; border-radius: 15px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                    <i class="fas fa-mosque" style="font-size: 2rem; color: #8B0000;"></i>
                    <h4>Mosques & Temples</h4>
                    <p>Kampung Kling Mosque, Cheng Hoon Teng Temple.</p>
                </div>
                <div style="background: white; padding: 1.5rem; border-radius: 15px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                    <i class="fas fa-home" style="font-size: 2rem; color: #8B0000;"></i>
                    <h4>Peranakan Houses</h4>
                    <p>Baba Nyonya Heritage Museum showcases traditional architecture.</p>
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