<?php include 'includes/header.php'; ?>

<div class="container section" style="max-width:500px;">
  <div class="card insta-card">
    <!-- Header Post -->
    <div class="card-content" style="display:flex; align-items:center; gap:10px;">
      <img src="https://picsum.photos/50" 
           alt="profile" 
           style="width:40px;height:40px;border-radius:50%;object-fit:cover;">
      <span class="username" style="font-weight:bold;">afnan</span>
    </div>

    <!-- Gambar Utama Feed -->
    <div class="card-image">
      <img src="https://picsum.photos/800/600?random=1" 
           class="feed-img" 
           alt="feed" 
           style="cursor:pointer; width:100%; height:auto;">
    </div>

    <!-- Aksi dan Caption -->
    <div class="card-content">
      <div class="action-icons" style="display:flex; gap:10px; margin-bottom:8px;">
        <i class="material-icons like-btn" style="cursor:pointer;">favorite_border</i>
        <i class="material-icons" style="cursor:pointer;">chat_bubble_outline</i>
        <i class="material-icons" style="cursor:pointer;">send</i>
      </div>
      <p><b>124 likes</b></p>
      <p class="caption"><b>afnan</b> Pemandangan pagi yang indah 🌄</p>
    </div>
  </div>
</div>

  </div>
</div>

  <!-- Panggil file JS -->
  <script src="js/index.js"></script>

</body>

<?php include 'includes/footer.php'; ?>
