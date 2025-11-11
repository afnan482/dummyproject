<!-- Bottom Navigation -->
 <link rel="stylesheet" href="css/footer.css">
 
<div class="bottom-nav">
        <a href="index.php">
                <i class="material-icons <?= basename($_SERVER['PHP_SELF']) === 'index.php' ? 'active' : '' ?>">home</i>
        </a>

        <a href="member.php">
                <i
                        class="material-icons <?= basename($_SERVER['PHP_SELF']) === 'member.php' ? 'active' : '' ?>">group</i>
        </a>

        <a href="profile.php">
                <i
                        class="material-icons <?= basename($_SERVER['PHP_SELF']) === 'profile.php' ? 'active' : '' ?>">person</i>
        </a>
</div>

<!-- JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="js/footer.js"></script>