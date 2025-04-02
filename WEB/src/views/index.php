<?php require_once 'parts/header.php'; ?>

<div class="container">
    <section class="hero">
        <h1>Discover Dutch Gastronomy</h1>
        <p>Explore the rich culinary traditions of the Netherlands through its most iconic dishes</p>
    </section>

    <!-- Sección destacada Stroopwafel -->
    <section class="featured-stroopwafel">
        <div class="stroopwafel-content">
            <h2>The Famous Stroopwafel</h2>
            <p class="fun-fact">Fun fact: Stroopwafels were originally made from bakery leftovers in the 18th century in Gouda. The syrup filling was a clever way to use bread crumbs!</p>
            <img src="stroopwafel.jpeg" alt="Stroopwafel" class="stroopwafel-img">
            <a href="stroopwafel.php" class="btn-stroopwafel">Learn How to Make It</a>
        </div>
    </section>

    <!-- Resto del contenido existente -->
    <section class="food-section">
        <h2 class="section-title">Other Dutch Delicacies</h2>
        <div class="food-grid">
            <div class="food-card">
                <img src="huzarensalade.jpg" alt="Huzarensalade" class="food-img">
                <div class="food-info">
                    <h3>Huzarensalade</h3>
                    <p>A traditional Dutch salad with potatoes, vegetables, and meat.</p>
                    <a href="huzarensalade.php" class="btn-dark">View Recipe</a>
                </div>
            </div>

            <div class="food-card">
                <img src="../../public/img/stamppot.jpg" alt="Stamppot" class="food-img">
                <div class="food-info">
                    <h3>Stamppot</h3>
                    <p>Mashed potatoes mixed with vegetables, often served with sausage.</p>
                    <a href="stamppot.php" class="btn-dark">View Recipe</a>
                </div>
            </div>

            <div class="food-card">
                <img src="hachee.jpg" alt="Hachee" class="food-img">
                <div class="food-info">
                    <h3>Hachee</h3>
                    <p>A traditional Dutch stew made with beef, onions, and spices.</p>
                    <a href="hachee.php" class="btn-dark">View Recipe</a>
                </div>
            </div>
        </div>
    </section>

    <section class="food-section">
        <h2 class="section-title">Dutch Food Culture</h2>
        <div class="food-card">
            <img src="dutchFood.jpg" alt="Dutch Food Culture" class="food-img">
            <div class="food-info">
                <h3>Traditional Dutch Cuisine</h3>
                <p>Dutch cuisine is simple and straightforward, with many dishes based on meat, potatoes and vegetables.</p>
                <a href="culture.php" class="btn-dark">Learn More</a>
            </div>
        </div>
    </section>
</div>

<?php require_once 'parts/footer.php'; ?>