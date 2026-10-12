

<!DOCTYPE html>

<html lang="en">



<head>



    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <title>ShopEase - Online Store</title>



    <style>



        * {

            margin: 0;

            padding: 0;

            box-sizing: border-box;

            font-family: Arial, Helvetica, sans-serif;

        }



        html {

            scroll-behavior: smooth;

        }



        body {

            background-color: #f7f7f7;

            color: #222;

        }



        /* ================= NAVBAR ================= */



        header {

            width: 100%;

            height: 75px;

            background-color: white;



            display: flex;

            align-items: center;

            justify-content: space-between;



            padding: 0 60px;



            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);



            position: sticky;

            top: 0;

            z-index: 1000;

        }



        .logo {

            font-size: 28px;

            font-weight: bold;

        }



        .logo span {

            color: #e63946;

        }



        nav {

            display: flex;

            align-items: center;

            gap: 28px;

        }



        nav a {

            text-decoration: none;

            color: #222;

            font-size: 15px;

            transition: 0.3s;

        }



        nav a:hover {

            color: #e63946;

        }



        .cart-button {

            background-color: #222;

            color: white !important;



            padding: 10px 18px;



            border-radius: 25px;

        }



        .cart-button:hover {

            background-color: #e63946;

        }





        /* ================= HERO ================= */



        .hero {

            min-height: 560px;



            background:

                linear-gradient(

                    rgba(0, 0, 0, 0.45),

                    rgba(0, 0, 0, 0.45)

                ),

                url("https://images.unsplash.com/photo-1441986300917-64674bd600d8")

                center / cover no-repeat;



            display: flex;

            justify-content: center;

            align-items: center;



            text-align: center;

            color: white;

        }



        .hero-content {

            max-width: 700px;

            padding: 20px;

        }



        .hero-content h1 {

            font-size: 58px;

            margin-bottom: 20px;

        }



        .hero-content p {

            font-size: 20px;

            margin-bottom: 30px;

        }



        .hero-button {

            padding: 14px 32px;



            border: none;

            border-radius: 5px;



            background-color: white;

            color: #222;



            font-size: 16px;

            font-weight: bold;



            cursor: pointer;



            transition: 0.3s;

        }



        .hero-button:hover {

            background-color: #e63946;

            color: white;

        }





        /* ================= SECTION ================= */



        .section {

            padding: 70px 60px;

        }



        .section-title {

            text-align: center;

            font-size: 34px;

            margin-bottom: 40px;

        }





        /* ================= CATEGORIES ================= */



        .category-container {

            display: grid;



            grid-template-columns:

                repeat(4, 1fr);



            gap: 25px;

        }



        .category-card {

            height: 160px;



            background-color: white;



            border-radius: 10px;



            display: flex;

            flex-direction: column;



            justify-content: center;

            align-items: center;



            text-align: center;



            box-shadow:

                0 3px 12px rgba(0, 0, 0, 0.08);



            cursor: pointer;



            transition: 0.3s;

        }



        .category-card:hover {

            transform: translateY(-8px);

            box-shadow:

                0 8px 20px rgba(0, 0, 0, 0.12);

        }



        .category-icon {

            font-size: 42px;

            margin-bottom: 12px;

        }



        .category-card h3 {

            font-size: 18px;

        }





        /* ================= PRODUCTS ================= */



        .products-section {

            background-color: white;

        }



        .product-container {

            display: grid;



            grid-template-columns:

                repeat(4, 1fr);



            gap: 25px;

        }



        .product-card {

            background-color: #f8f8f8;



            border-radius: 10px;



            overflow: hidden;



            transition: 0.3s;

        }



        .product-card:hover {

            transform: translateY(-7px);



            box-shadow:

                0 8px 20px rgba(0, 0, 0, 0.12);

        }



        .product-image {

            width: 100%;

            height: 270px;



            object-fit: cover;



            display: block;

        }



        .product-info {

            padding: 20px;

        }



        .product-info h3 {

            font-size: 19px;

            margin-bottom: 8px;

        }



        .product-description {

            color: #777;

            font-size: 14px;

            margin-bottom: 12px;

        }



        .rating {

            margin-bottom: 12px;

            color: #f4b400;

        }



        .price {

            font-size: 21px;

            font-weight: bold;



            margin-bottom: 15px;

        }



        .add-cart {

            width: 100%;



            padding: 11px;



            border: none;

            border-radius: 5px;



            background-color: #222;

            color: white;



            font-size: 15px;



            cursor: pointer;



            transition: 0.3s;

        }



        .add-cart:hover {

            background-color: #e63946;

        }





        /* ================= OFFER ================= */



        .offer-section {

            margin: 60px;



            padding: 70px 30px;



            background-color: #222;



            color: white;



            text-align: center;



            border-radius: 12px;

        }



        .offer-section h2 {

            font-size: 40px;

            margin-bottom: 15px;

        }



        .offer-section p {

            font-size: 18px;

            margin-bottom: 25px;

        }



        .offer-button {

            padding: 13px 28px;



            border: none;

            border-radius: 5px;



            background-color: white;

            color: #222;



            cursor: pointer;



            font-weight: bold;

        }



        .offer-button:hover {

            background-color: #e63946;

            color: white;

        }





        /* ================= NEWSLETTER ================= */



        .newsletter {

            padding: 70px 20px;



            text-align: center;



            background-color: #f1f1f1;

        }



        .newsletter h2 {

            font-size: 32px;

            margin-bottom: 10px;

        }



        .newsletter p {

            color: #666;

            margin-bottom: 25px;

        }



        .newsletter-form {

            display: flex;



            justify-content: center;



            max-width: 500px;



            margin: auto;

        }



        .newsletter-form input {

            flex: 1;



            padding: 13px;



            border: 1px solid #ccc;



            outline: none;

        }



        .newsletter-form button {

            padding: 13px 22px;



            border: none;



            background-color: #222;

            color: white;



            cursor: pointer;

        }



        .newsletter-form button:hover {

            background-color: #e63946;

        }





        /* ================= FOOTER ================= */



        footer {

            background-color: #111;



            color: white;



            padding: 50px 60px;

        }



        .footer-container {

            display: grid;



            grid-template-columns:

                repeat(4, 1fr);



            gap: 30px;

        }



        .footer-column h3 {

            margin-bottom: 18px;

        }



        .footer-column p {

            color: #aaa;

            line-height: 1.7;

        }



        .footer-column a {

            display: block;



            color: #aaa;



            text-decoration: none;



            margin-bottom: 10px;

        }



        .footer-column a:hover {

            color: white;

        }



        .copyright {

            border-top: 1px solid #333;



            margin-top: 40px;



            padding-top: 20px;



            text-align: center;



            color: #888;

        }





        /* ================= CART POPUP ================= */



        .cart-message {

            position: fixed;



            right: 25px;

            bottom: 25px;



            background-color: #222;

            color: white;



            padding: 15px 22px;



            border-radius: 5px;



            display: none;



            z-index: 2000;

        }





        /* ================= RESPONSIVE ================= */



        @media (max-width: 1000px) {



            header {

                padding: 0 30px;

            }



            .category-container,

            .product-container {

                grid-template-columns:

                    repeat(2, 1fr);

            }



            .footer-container {

                grid-template-columns:

                    repeat(2, 1fr);

            }



            .hero-content h1 {

                font-size: 45px;

            }

        }





        @media (max-width: 650px) {



            header {

                height: auto;



                padding: 20px;



                flex-direction: column;



                gap: 15px;

            }



            nav {

                gap: 12px;



                flex-wrap: wrap;



                justify-content: center;

            }



            .hero {

                min-height: 450px;

            }



            .hero-content h1 {

                font-size: 36px;

            }



            .hero-content p {

                font-size: 16px;

            }



            .section {

                padding: 50px 20px;

            }



            .category-container,

            .product-container {

                grid-template-columns: 1fr;

            }



            .offer-section {

                margin: 30px 20px;

            }



            .newsletter-form {

                flex-direction: column;

                gap: 10px;

            }



            .footer-container {

                grid-template-columns: 1fr;

            }

        }



    
        /* ================= CATALOG SEARCH ================= */
        .category-card { width: 100%; font-family: inherit; font-size: inherit; color: inherit; border: none; }
        .catalog-controls { display:flex; gap:12px; max-width:760px; margin:0 auto 18px; }
        .catalog-controls input { flex:1; min-width:0; padding:13px 15px; border:1px solid #ccc; border-radius:6px; font-size:15px; }
        .catalog-reset, .admin-primary, .admin-secondary, .admin-tab { padding:11px 16px; border:0; border-radius:5px; cursor:pointer; font-weight:600; }
        .catalog-reset, .admin-secondary { background:#eee; color:#222; }
        .catalog-reset:hover, .admin-secondary:hover { background:#ddd; }
        .catalog-message { text-align:center; color:#666; margin:0 auto 22px; min-height:20px; }
        .details-button { width:100%; padding:10px; margin-top:8px; border:1px solid #222; background:transparent; border-radius:5px; cursor:pointer; }
        .details-button:hover { background:#e63946; color:white; border-color:#e63946; }
        .modal-overlay { display:none; position:fixed; inset:0; background:rgba(0,0,0,.6); z-index:3000; padding:24px; overflow-y:auto; align-items:center; justify-content:center; }
        .modal-overlay.open { display:flex; }
        .modal-card { background:white; width:min(100%,650px); max-height:90vh; overflow:auto; padding:28px; border-radius:12px; position:relative; }
        .modal-close { position:absolute; top:10px; right:14px; border:0; background:transparent; font-size:30px; cursor:pointer; line-height:1; }
        .detail-layout { display:grid; grid-template-columns:1fr 1fr; gap:24px; align-items:start; padding-top:16px; }
        .detail-layout img { width:100%; max-height:330px; object-fit:cover; border-radius:8px; }
        .detail-layout h2 { margin:10px 0; }
        .detail-price { font-size:24px; font-weight:bold; margin:16px 0; }
        .admin-login-card { max-width:430px; }
        .admin-login-card h2, .admin-dashboard h2 { margin:0 36px 14px 0; }
        .admin-hint { color:#777; font-size:13px; margin:8px 0 16px; }
        .admin-login-card label, .admin-form label { display:block; font-size:14px; font-weight:600; margin:12px 0 6px; }
        .admin-login-card input, .admin-form input, .admin-form textarea, .admin-form select, .admin-inline-form input { width:100%; padding:11px; border:1px solid #ccc; border-radius:5px; font:inherit; }
        .admin-primary { background:#e63946; color:white; }
        .admin-primary:hover { background:#c92d39; }
        .admin-login-card .admin-primary { width:100%; margin-top:16px; }
        .form-message { font-size:14px; color:#555; margin-top:10px; }
        .admin-dashboard { width:min(100%,1000px); }
        .admin-heading-row { display:flex; justify-content:space-between; align-items:flex-start; gap:16px; padding-right:25px; }
        .admin-heading-row p { color:#666; font-size:14px; }
        .admin-tabs { display:flex; gap:8px; border-bottom:1px solid #ddd; margin:22px 0; }
        .admin-tab { background:#eee; margin-bottom:8px; }
        .admin-tab.active { background:#222; color:white; }
        .admin-form { display:grid; grid-template-columns:1fr 1fr; gap:0 16px; }
        .admin-form label { align-self:end; }
        .admin-form textarea, .admin-form .admin-actions, .admin-form .form-message { grid-column:1/-1; }
        .admin-actions { display:flex; gap:10px; margin-top:14px; }
        .admin-list-title { margin:26px 0 12px; }
        .admin-list { display:grid; gap:10px; margin-top:14px; }
        .admin-list-item { display:flex; justify-content:space-between; align-items:center; gap:15px; border:1px solid #e5e5e5; border-radius:7px; padding:12px; }
        .admin-list-item p { color:#777; font-size:13px; margin-top:4px; }
        .admin-list-actions { display:flex; gap:7px; flex-shrink:0; }
        .admin-list-actions button { padding:7px 10px; border:0; border-radius:4px; cursor:pointer; }
        .admin-inline-form { display:grid; grid-template-columns:1fr 1fr auto; gap:10px; }
        @media(max-width:650px) {
            .catalog-controls { flex-direction:column; }
            .detail-layout { grid-template-columns:1fr; }
            .admin-form, .admin-inline-form { grid-template-columns:1fr; }
            .admin-heading-row, .admin-list-item { flex-direction:column; align-items:stretch; }
            .admin-list-actions { flex-wrap:wrap; }
            .modal-overlay { padding:10px; }
            .modal-card { padding:22px 16px; }
        }

    </style>



</head>





<body>





<!-- ================= NAVBAR ================= -->



<header>



    <div class="logo">

        Shop<span>Ease</span>

    </div>



    <nav>



        <a href="#home">

            Home

        </a>



        <a href="#categories">

            Categories

        </a>



        <a href="#products">

            Products

        </a>



        <a href="#contact">

            Contact

        </a>



        <a href="#" onclick="openAdminLogin(); return false;">Admin</a>

        <a href="#" class="cart-button">

            🛒 Cart (<span id="cartCount">0</span>)

        </a>



    </nav>



</header>





<!-- ================= HERO ================= -->



<section class="hero" id="home">



    <div class="hero-content">



        <h1>

            Discover Your Style

        </h1>



        <p>

            Shop the latest products at amazing prices.

        </p>



        <button

            class="hero-button"

            onclick="scrollToProducts()">



            Shop Now



        </button>



    </div>



</section>





<!-- ================= CATEGORIES ================= -->



<section class="section" id="categories">
    <h2 class="section-title">Shop By Category</h2>
    <div class="category-container" id="categoryContainer">
        <button type="button" class="category-card" onclick="filterProducts('Fashion')">
            <div class="category-icon">👕</div><h3>Fashion</h3>
        </button>
        <button type="button" class="category-card" onclick="filterProducts('Footwear')">
            <div class="category-icon">👟</div><h3>Footwear</h3>
        </button>
        <button type="button" class="category-card" onclick="filterProducts('Electronics')">
            <div class="category-icon">💻</div><h3>Electronics</h3>
        </button>
        <button type="button" class="category-card" onclick="filterProducts('Accessories')">
            <div class="category-icon">👜</div><h3>Accessories</h3>
        </button>
    </div>
</section>





<!-- ================= PRODUCTS ================= -->



<section

    class="section products-section"

    id="products">



    <h2 class="section-title" id="productHeading">Featured Products</h2>
    <div class="catalog-controls">
        <input type="search" id="productSearch" placeholder="Search products by name or keyword..." oninput="searchProducts()">
        <button type="button" class="catalog-reset" onclick="showAllProducts()">View All Products</button>
    </div>
    <p id="catalogMessage" class="catalog-message" role="status"></p>





    <div class="product-container" id="productContainer"></div>



</section>





<!-- ================= OFFER ================= -->



<section class="offer-section">



    <h2>

        Special Offer

    </h2>



    <p>

        Get up to 30% OFF on selected products!

    </p>



    <button

        class="offer-button"

        onclick="scrollToProducts()">



        Shop Now



    </button>



</section>





<!-- ================= NEWSLETTER ================= -->



<section class="newsletter">



    <h2>

        Stay Updated

    </h2>



    <p>

        Subscribe to receive new product updates and special offers.

    </p>



    <div class="newsletter-form">



        <input

            type="email"

            id="email"

            placeholder="Enter your email">



        <button onclick="subscribe()">

            Subscribe

        </button>



    </div>



</section>





<!-- ================= FOOTER ================= -->



<footer id="contact">



    <div class="footer-container">





        <div class="footer-column">



            <h3>

                ShopEase

            </h3>



            <p>

                Your one-stop destination for

                quality products at great prices.

            </p>



        </div>





        <div class="footer-column">



            <h3>

                Quick Links

            </h3>



            <a href="#home">

                Home

            </a>



            <a href="#categories">

                Categories

            </a>



            <a href="#products">

                Products

            </a>



        </div>





        <div class="footer-column">



            <h3>

                Customer Service

            </h3>



            <a href="#">

                Contact Us

            </a>



            <a href="#">

                Shipping

            </a>



            <a href="#">

                Returns

            </a>



            <a href="#">

                FAQs

            </a>



        </div>





        <div class="footer-column">



            <h3>

                Follow Us

            </h3>



            <a href="#">

                Instagram

            </a>



            <a href="#">

                Facebook

            </a>



            <a href="#">

                Twitter

            </a>



        </div>



    </div>





    <div class="copyright">



        © 2026 ShopEase. All Rights Reserved.



    </div>



</footer>





<!-- PRODUCT DETAILS MODAL -->
<div class="modal-overlay" id="detailsModal" role="dialog" aria-modal="true" aria-labelledby="detailName">
    <div class="modal-card">
        <button class="modal-close" type="button" onclick="closeModal('detailsModal')" aria-label="Close">×</button>
        <div id="productDetailsContent"></div>
    </div>
</div>

<!-- ADMIN LOGIN MODAL -->
<div class="modal-overlay" id="adminLoginModal" role="dialog" aria-modal="true" aria-labelledby="adminLoginTitle">
    <div class="modal-card admin-login-card">
        <button class="modal-close" type="button" onclick="closeModal('adminLoginModal')" aria-label="Close">×</button>
        <h2 id="adminLoginTitle">Administrator Login</h2>
        <p class="admin-hint">Demo frontend login: admin / admin123</p>
        <form id="adminLoginForm">
            <label for="adminUsername">Username or email</label>
            <input id="adminUsername" required autocomplete="username" placeholder="Enter username">
            <label for="adminPassword">Password</label>
            <input id="adminPassword" type="password" required autocomplete="current-password" placeholder="Enter password">
            <button class="admin-primary" type="submit">Login</button>
            <p id="loginMessage" class="form-message" role="status"></p>
        </form>
    </div>
</div>

<!-- ADMIN DASHBOARD -->
<div class="modal-overlay" id="adminDashboardModal" role="dialog" aria-modal="true" aria-labelledby="adminDashboardTitle">
    <div class="modal-card admin-dashboard">
        <button class="modal-close" type="button" onclick="closeModal('adminDashboardModal')" aria-label="Close">×</button>
        <div class="admin-heading-row">
            <div><h2 id="adminDashboardTitle">Catalog Administration</h2><p>Manage products and categories in this browser demo.</p></div>
            <button type="button" class="admin-secondary" onclick="adminLogout()">Logout</button>
        </div>
        <div class="admin-tabs">
            <button type="button" class="admin-tab active" onclick="showAdminTab('productsAdmin', this)">Products</button>
            <button type="button" class="admin-tab" onclick="showAdminTab('categoriesAdmin', this)">Categories</button>
        </div>
        <section id="productsAdmin" class="admin-pane">
            <h3 id="productFormTitle">Add Product</h3>
            <form id="productForm" class="admin-form">
                <input type="hidden" id="editProductId">
                <label for="adminProductName">Product name</label><input id="adminProductName" required>
                <label for="adminProductDescription">Full description</label><textarea id="adminProductDescription" rows="3" required></textarea>
                <label for="adminProductPrice">Price (₹)</label><input id="adminProductPrice" type="number" min="0" step="0.01" required>
                <label for="adminProductCategory">Category</label><select id="adminProductCategory" required></select>
                <label for="adminProductImage">Image URL (optional)</label><input id="adminProductImage" type="url" placeholder="https://example.com/image.jpg">
                <label for="adminProductImageFile">Or upload an image</label><input id="adminProductImageFile" type="file" accept="image/*">
                <div class="admin-actions"><button class="admin-primary" type="submit">Save Product</button><button class="admin-secondary" type="button" onclick="resetProductForm()">Clear</button></div>
                <p id="productFormMessage" class="form-message" role="status"></p>
            </form>
            <h3 class="admin-list-title">Existing Products</h3>
            <div id="adminProductList" class="admin-list"></div>
        </section>
        <section id="categoriesAdmin" class="admin-pane" hidden>
            <h3>Manage Categories</h3>
            <form id="categoryForm" class="admin-inline-form">
                <input id="newCategoryName" required placeholder="New category name">
                <input id="newCategoryDescription" placeholder="Description (optional)">
                <button class="admin-primary" type="submit">Add Category</button>
            </form>
            <p class="admin-hint">Deleting a category with products will move those products to Accessories.</p>
            <div id="adminCategoryList" class="admin-list"></div>
            <p id="categoryFormMessage" class="form-message" role="status"></p>
        </section>
    </div>
</div>

<!-- ================= CART MESSAGE ================= -->



<div

    class="cart-message"

    id="cartMessage">



    Product added to cart!



</div>





<!-- ================= JAVASCRIPT ================= -->





<script>
    let cartCount = 0;
    let products = [];
    let categories = [
        { name: "Fashion", description: "Clothing and fashion items" },
        { name: "Footwear", description: "Shoes and footwear" },
        { name: "Electronics", description: "Electronic devices and accessories" },
        { name: "Accessories", description: "Everyday accessories" }
    ];
    let activeCategory = "All";
    let searchTerm = "";

    const starterProducts = [
        { id: 1, name: "Classic T-Shirt", description: "Premium cotton casual T-shirt.", price: 599, category: "Fashion", image: "https://images.unsplash.com/photo-1521572163474-6864f9cf17ab", rating: "★★★★★" },
        { id: 2, name: "Running Sneakers", description: "Comfortable sneakers for everyday use.", price: 1999, category: "Footwear", image: "https://images.unsplash.com/photo-1542291026-7eec264c27ff", rating: "★★★★★" },
        { id: 3, name: "Classic Watch", description: "Elegant watch for everyday wear.", price: 1499, category: "Accessories", image: "https://images.unsplash.com/photo-1523275335684-37898b6baf30", rating: "★★★★☆" },
        { id: 4, name: "Travel Backpack", description: "Stylish and spacious travel backpack.", price: 999, category: "Accessories", image: "https://images.unsplash.com/photo-1553062407-98eeb64c6a62", rating: "★★★★★" },
        { id: 5, name: "Wireless Headphones", description: "High-quality wireless headphones.", price: 2499, category: "Electronics", image: "https://images.unsplash.com/photo-1505740420928-5e560c06d30e", rating: "★★★★★" },
        { id: 6, name: "Premium Sunglasses", description: "Stylish sunglasses with premium design.", price: 799, category: "Accessories", image: "https://images.unsplash.com/photo-1511499767150-a48a237f0083", rating: "★★★★☆" },
        { id: 7, name: "Leather Handbag", description: "Elegant handbag for everyday use.", price: 1799, category: "Accessories", image: "https://images.unsplash.com/photo-1548036328-c9fa89d128fa", rating: "★★★★★" },
        { id: 8, name: "Smartphone", description: "Modern smartphone with premium features.", price: 14999, category: "Electronics", image: "https://images.unsplash.com/photo-1511707171634-5f897ff02aa9", rating: "★★★★★" }
    ];

    function saveCatalog() {
        localStorage.setItem("shopeaseProducts", JSON.stringify(products));
        localStorage.setItem("shopeaseCategories", JSON.stringify(categories));
    }

    function loadCatalog() {
        try {
            const savedProducts = localStorage.getItem("shopeaseProducts");
            const savedCategories = localStorage.getItem("shopeaseCategories");
            products = savedProducts ? JSON.parse(savedProducts) : starterProducts.slice();
            if (savedCategories) categories = JSON.parse(savedCategories);
        } catch (error) {
            products = starterProducts.slice();
            categories = [
                { name: "Fashion", description: "Clothing and fashion items" },
                { name: "Footwear", description: "Shoes and footwear" },
                { name: "Electronics", description: "Electronic devices and accessories" },
                { name: "Accessories", description: "Everyday accessories" }
            ];
        }
        renderCategories();
        renderProducts();
        renderAdminLists();
    }

    function renderCategories() {
        const container = document.getElementById("categoryContainer");
        if (!container) return;
        const icons = { Fashion: "👕", Footwear: "👟", Electronics: "💻", Accessories: "👜" };
        container.innerHTML = "";
        categories.forEach(function(category) {
            const button = document.createElement("button");
            button.type = "button";
            button.className = "category-card";
            button.onclick = function() { filterProducts(category.name); };
            const icon = document.createElement("div");
            icon.className = "category-icon";
            icon.textContent = icons[category.name] || "📦";
            const title = document.createElement("h3");
            title.textContent = category.name;
            button.append(icon, title);
            container.appendChild(button);
        });
    }

    function renderProducts() {
        const container = document.getElementById("productContainer");
        if (!container) return;
        const filtered = products.filter(function(product) {
            const matchesCategory = activeCategory === "All" || product.category === activeCategory;
            const text = (product.name + " " + product.description + " " + product.category).toLowerCase();
            return matchesCategory && text.includes(searchTerm.toLowerCase());
        });
        container.innerHTML = "";
        filtered.forEach(function(product) {
            const card = document.createElement("article");
            card.className = "product-card";
            card.dataset.category = product.category;
            const image = document.createElement("img");
            image.className = "product-image";
            image.src = product.image || "https://images.unsplash.com/photo-1542291026-7eec264c27ff";
            image.alt = product.name;
            image.loading = "lazy";
            image.onerror = function() { this.style.display = "none"; };
            const info = document.createElement("div");
            info.className = "product-info";
            const name = document.createElement("h3");
            name.textContent = product.name;
            const desc = document.createElement("p");
            desc.className = "product-description";
            desc.textContent = product.description;
            const rating = document.createElement("div");
            rating.className = "rating";
            rating.textContent = product.rating || "★★★★★";
            const price = document.createElement("div");
            price.className = "price";
            price.textContent = "₹" + Number(product.price).toLocaleString("en-IN");
            const add = document.createElement("button");
            add.className = "add-cart";
            add.textContent = "Add to Cart";
            add.type = "button";
            add.onclick = function() { addToCart(product.name); };
            const details = document.createElement("button");
            details.className = "details-button";
            details.textContent = "View Details";
            details.type = "button";
            details.onclick = function() { viewProductDetails(product.id); };
            info.append(name, desc, rating, price, add, details);
            card.append(image, info);
            container.appendChild(card);
        });
        const message = document.getElementById("catalogMessage");
        if (message) {
            message.textContent = filtered.length ? filtered.length + " product(s) found." :
                (searchTerm ? "No products match your search." : "No products are available in this category.");
        }
        const heading = document.getElementById("productHeading");
        if (heading) heading.textContent = searchTerm ? "Search Results" :
            (activeCategory === "All" ? "Featured Products" : activeCategory + " Products");
    }

    function filterProducts(category) {
        activeCategory = category;
        searchTerm = "";
        const search = document.getElementById("productSearch");
        if (search) search.value = "";
        renderProducts();
        document.getElementById("products").scrollIntoView({ behavior: "smooth" });
    }

    function searchProducts() {
        activeCategory = "All";
        searchTerm = document.getElementById("productSearch").value.trim();
        renderProducts();
    }

    function showAllProducts() {
        activeCategory = "All";
        searchTerm = "";
        const search = document.getElementById("productSearch");
        if (search) search.value = "";
        renderProducts();
    }

    function addToCart(productName) {
        cartCount++;
        document.getElementById("cartCount").innerText = cartCount;
        const message = document.getElementById("cartMessage");
        message.innerText = productName + " added to cart!";
        message.style.display = "block";
        setTimeout(function() { message.style.display = "none"; }, 2000);
    }

    function scrollToProducts() {
        document.getElementById("products").scrollIntoView({ behavior: "smooth" });
    }

    function subscribe() {
        const email = document.getElementById("email").value.trim();
        if (email === "") {
            alert("Please enter your email.");
            return;
        }
        alert("Thank you for subscribing!");
        document.getElementById("email").value = "";
    }

    function openModal(id) { document.getElementById(id).classList.add("open"); }
    function closeModal(id) { document.getElementById(id).classList.remove("open"); }

    function viewProductDetails(id) {
        const product = products.find(function(item) { return item.id === id; });
        if (!product) return;
        const content = document.getElementById("productDetailsContent");
        content.innerHTML = "";
        const layout = document.createElement("div");
        layout.className = "detail-layout";
        const img = document.createElement("img");
        img.src = product.image || "";
        img.alt = product.name;
        const info = document.createElement("div");
        const category = document.createElement("p");
        category.textContent = "Category: " + product.category;
        const name = document.createElement("h2");
        name.id = "detailName";
        name.textContent = product.name;
        const description = document.createElement("p");
        description.textContent = product.description;
        const price = document.createElement("p");
        price.className = "detail-price";
        price.textContent = "₹" + Number(product.price).toLocaleString("en-IN");
        const add = document.createElement("button");
        add.className = "admin-primary";
        add.textContent = "Add to Cart";
        add.onclick = function() { addToCart(product.name); };
        info.append(category, name, description, price, add);
        layout.append(img, info);
        content.appendChild(layout);
        openModal("detailsModal");
    }

    function openAdminLogin() {
        document.getElementById("loginMessage").textContent = "";
        document.getElementById("adminUsername").value = "";
        document.getElementById("adminPassword").value = "";
        openModal("adminLoginModal");
    }

    document.getElementById("adminLoginForm").addEventListener("submit", function(event) {
        event.preventDefault();
        const username = document.getElementById("adminUsername").value.trim();
        const password = document.getElementById("adminPassword").value;
        if (username === "admin" && password === "admin123") {
            closeModal("adminLoginModal");
            openModal("adminDashboardModal");
            renderAdminLists();
        } else {
            document.getElementById("loginMessage").textContent = "Invalid demo credentials. Try admin / admin123.";
        }
    });

    function adminLogout() {
        closeModal("adminDashboardModal");
        document.getElementById("adminLoginForm").reset();
    }

    function showAdminTab(tabId, button) {
        document.querySelectorAll(".admin-pane").forEach(function(pane) { pane.hidden = pane.id !== tabId; });
        document.querySelectorAll(".admin-tab").forEach(function(tab) { tab.classList.remove("active"); });
        button.classList.add("active");
    }

    function populateCategorySelect() {
        const select = document.getElementById("adminProductCategory");
        select.innerHTML = "";
        categories.forEach(function(category) {
            const option = document.createElement("option");
            option.value = category.name;
            option.textContent = category.name;
            select.appendChild(option);
        });
    }

    function renderAdminLists() {
        populateCategorySelect();
        const productList = document.getElementById("adminProductList");
        const categoryList = document.getElementById("adminCategoryList");
        if (!productList || !categoryList) return;
        renderCategories();
        productList.innerHTML = "";
        products.forEach(function(product) {
            const row = document.createElement("div");
            row.className = "admin-list-item";
            const details = document.createElement("div");
            const title = document.createElement("strong");
            title.textContent = product.name + " — ₹" + Number(product.price).toLocaleString("en-IN");
            const desc = document.createElement("p");
            desc.textContent = product.category;
            details.append(title, desc);
            const actions = document.createElement("div");
            actions.className = "admin-list-actions";
            const edit = document.createElement("button");
            edit.textContent = "Edit";
            edit.onclick = function() { editProduct(product.id); };
            const del = document.createElement("button");
            del.textContent = "Delete";
            del.style.background = "#ffe3e3";
            del.onclick = function() { deleteProduct(product.id); };
            actions.append(edit, del);
            row.append(details, actions);
            productList.appendChild(row);
        });
        categoryList.innerHTML = "";
        categories.forEach(function(category) {
            const row = document.createElement("div");
            row.className = "admin-list-item";
            const details = document.createElement("div");
            const title = document.createElement("strong");
            title.textContent = category.name;
            const desc = document.createElement("p");
            desc.textContent = category.description || "No description";
            details.append(title, desc);
            const actions = document.createElement("div");
            actions.className = "admin-list-actions";
            const del = document.createElement("button");
            del.textContent = "Delete";
            del.style.background = "#ffe3e3";
            del.onclick = function() { deleteCategory(category.name); };
            actions.appendChild(del);
            row.append(details, actions);
            categoryList.appendChild(row);
        });
    }

    document.getElementById("productForm").addEventListener("submit", async function(event) {
        event.preventDefault();
        const idValue = document.getElementById("editProductId").value;
        const oldProduct = idValue ? products.find(function(product) { return product.id === Number(idValue); }) : null;
        let image = document.getElementById("adminProductImage").value.trim() || (oldProduct ? oldProduct.image : "");
        const imageFile = document.getElementById("adminProductImageFile").files[0];
        if (imageFile) {
            if (!imageFile.type.startsWith("image/")) {
                document.getElementById("productFormMessage").textContent = "Please select an image file.";
                return;
            }
            image = await new Promise(function(resolve, reject) {
                const reader = new FileReader();
                reader.onload = function() { resolve(reader.result); };
                reader.onerror = function() { reject(new Error("Could not read the image file.")); };
                reader.readAsDataURL(imageFile);
            }).catch(function() { return ""; });
        }
        const item = {
            id: idValue ? Number(idValue) : Date.now(),
            name: document.getElementById("adminProductName").value.trim(),
            description: document.getElementById("adminProductDescription").value.trim(),
            price: Number(document.getElementById("adminProductPrice").value),
            category: document.getElementById("adminProductCategory").value,
            image: image,
            rating: oldProduct ? (oldProduct.rating || "★★★★★") : "★★★★★"
        };
        if (idValue) {
            products = products.map(function(product) { return product.id === Number(idValue) ? item : product; });
            document.getElementById("productFormMessage").textContent = "Product updated successfully in this browser demo.";
        } else {
            products.push(item);
            document.getElementById("productFormMessage").textContent = "Product added successfully in this browser demo.";
        }
        saveCatalog();
        renderProducts();
        renderAdminLists();
        resetProductForm(false);
    });

    function editProduct(id) {
        const product = products.find(function(item) { return item.id === id; });
        if (!product) return;
        document.getElementById("editProductId").value = product.id;
        document.getElementById("adminProductName").value = product.name;
        document.getElementById("adminProductDescription").value = product.description;
        document.getElementById("adminProductPrice").value = product.price;
        document.getElementById("adminProductCategory").value = product.category;
        document.getElementById("adminProductImage").value = product.image && !product.image.startsWith("data:") ? product.image : "";
        document.getElementById("adminProductImageFile").value = "";
        document.getElementById("productFormTitle").textContent = "Edit Product";
        document.getElementById("productFormMessage").textContent = "Edit the fields and click Save Product.";
        document.getElementById("productsAdmin").scrollIntoView({ behavior: "smooth", block: "start" });
    }

    function resetProductForm(clearMessage = true) {
        document.getElementById("productForm").reset();
        document.getElementById("editProductId").value = "";
        document.getElementById("productFormTitle").textContent = "Add Product";
        if (clearMessage) document.getElementById("productFormMessage").textContent = "";
    }

    function deleteProduct(id) {
        const product = products.find(function(item) { return item.id === id; });
        if (!product || !confirm('Delete "' + product.name + '"?')) return;
        products = products.filter(function(item) { return item.id !== id; });
        saveCatalog();
        renderProducts();
        renderAdminLists();
        resetProductForm();
    }

    document.getElementById("categoryForm").addEventListener("submit", function(event) {
        event.preventDefault();
        const name = document.getElementById("newCategoryName").value.trim();
        const description = document.getElementById("newCategoryDescription").value.trim();
        if (categories.some(function(category) { return category.name.toLowerCase() === name.toLowerCase(); })) {
            document.getElementById("categoryFormMessage").textContent = "That category already exists.";
            return;
        }
        categories.push({ name: name, description: description });
        saveCatalog();
        renderAdminLists();
        document.getElementById("categoryForm").reset();
        document.getElementById("categoryFormMessage").textContent = "Category added successfully in this browser demo.";
    });

    function deleteCategory(name) {
        if (!confirm('Delete category "' + name + '"? Products in this category will move to Accessories.')) return;
        categories = categories.filter(function(category) { return category.name !== name; });
        const fallback = categories.some(function(category) { return category.name === "Accessories"; }) ? "Accessories" : (categories[0] ? categories[0].name : "Uncategorized");
        products = products.map(function(product) {
            if (product.category === name) product.category = fallback;
            return product;
        });
        if (fallback === "Uncategorized" && !categories.length) categories.push({ name: "Uncategorized", description: "Default category" });
        saveCatalog();
        renderProducts();
        renderAdminLists();
        document.getElementById("categoryFormMessage").textContent = "Category deleted.";
    }

    window.addEventListener("click", function(event) {
        if (event.target.classList.contains("modal-overlay")) event.target.classList.remove("open");
    });

    loadCatalog();
</script>





</body>



</html>
