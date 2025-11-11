<!-- Bottom Navigation -->
<style>
        .bottom-nav {
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
                background: #fff;
                border-top: 1px solid #ddd;
                display: flex;
                justify-content: space-around;
                align-items: center;
                padding: 8px 0;
                z-index: 1000;
        }

        .bottom-nav a {
                color: #666;
                text-align: center;
                flex: 1;
        }

        .bottom-nav i {
                font-size: 28px;
                transition: color 0.3s;
        }

        .bottom-nav i.active {
                color: #2196F3;
                /* Warna biru untuk ikon aktif */
        }

        /* Tambahan agar tidak ketutup konten di bawah */
        body {
                padding-bottom: 60px;
        }
</style>

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