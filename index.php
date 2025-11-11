<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- Panggil file CSS -->
  <link rel="stylesheet" href="css/index.css">

</head>
<body>

<div class="container section" style="max-width:500px;">
  <div class="card insta-card">
    <div class="card-content" style="display:flex; align-items:center;">
      <img src="https://i.pravatar.cc/100?img=12" class="avatar">
      <span class="username">afnan</span>
    </div>

    <div class="card-image">
      <img src="https://picsum.photos/800/600?random=1" 
           class="feed-img" 
           style="cursor:pointer;">
    </div>

    <div class="card-content">
      <div class="action-icons">
        <i class="material-icons like-btn">favorite_border</i>
        <i class="material-icons">chat_bubble_outline</i>
        <i class="material-icons">send</i>
      </div>
      <p><b>124 likes</b></p>
      <p class="caption"><b>afnan</b> Pemandangan pagi yang indah 🌄</p>
    </div>
  </div>
</div>

<!-- Modal Galeri Fullscreen -->
<div id="galleryModal" class="custom-modal">
  <div class="modal-body">

    <!-- Gambar Utama -->
    <div class="main-image">
      <img id="mainPreview" src="https://picsum.photos/800/600?random=1">
    </div>

    <!-- Thumbnail Galeri -->
    <div class="thumb-row">
      <img src="https://picsum.photos/200/200?random=1" class="thumb active">
      <img src="https://picsum.photos/200/200?random=2" class="thumb">
      <img src="https://picsum.photos/200/200?random=3" class="thumb">
      <img src="https://picsum.photos/200/200?random=4" class="thumb">
    </div>

    <!-- Caption -->
    <div class="caption">
      <p><b>afnan</b> Pemandangan pagi yang indah 🌄</p>
    </div>

    <!-- Tombol Tutup -->
    <div class="btn-area">
      <button class="btn-flat red-text modal-close-btn">TUTUP</button>
    </div>
  </div>
</div>

<!-- Panggil file JS -->
<script src="js/index.js"></script>

<?php include 'includes/footer.php'; ?>