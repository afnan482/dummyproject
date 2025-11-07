<!-- Bottom Navigation -->
<div class="bottom-nav">
  <a href="index.php"><i class="material-icons <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">home</i></a>
  <a href="member.php"><i class="material-icons <?= basename($_SERVER['PHP_SELF']) == 'member.php' ? 'active' : '' ?>">group</i></a>
  <a href="profile.php"><i class="material-icons <?= basename($_SERVER['PHP_SELF']) == 'profile.php' ? 'active' : '' ?>">person</i></a>
</div>
   
<!-- JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Modal init
    var modals = document.querySelectorAll('.modal');
    M.Modal.init(modals, {endingTop: '5%'});

    // Swiper init
    new Swiper(".mySwiper", {
      loop: true,
      pagination: { el: ".swiper-pagination", clickable: true },
      navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" }
    });

    // Like button toggle
    document.querySelectorAll('.like-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        if (btn.textContent.trim() === 'favorite_border') {
          btn.textContent = 'favorite';
          btn.style.color = 'red';
        } else {
          btn.textContent = 'favorite_border';
          btn.style.color = 'black';
        }
      });
    });
  });
</script>

</body>
</html>
