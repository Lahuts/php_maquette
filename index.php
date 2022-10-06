<?php
include_once './pages/var.inc.php';
include_once './pages/head.inc.php';
?>
<body>
    <?php
    include_once './pages/header.inc.php';
    ?>
    <main>
        <section>
            <img src="asset/sample.webp" alt="Pc Gamer">
            <article>
                <?php
                include_once './pages/tab.inc.php';
                ?>
                <button><span class="material-symbols-outlined">shopping_cart</span>Ajouter au panier</button>
            </article>
        </section>
    </main>
    <?php include './pages/footer.inc.php'; ?>
</body>
</html>
