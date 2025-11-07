<?php include 'includes/header.php'; ?>

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

<style>
/* Modal Fullscreen */
.custom-modal {
  display: none;
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.9);
  justify-content: center;
  align-items: center;
  z-index: 9999;
  overflow-y: auto;
}

/* Body Modal */
.modal-body {
  background: #fff;
  width: 100%;
  height: 100vh;
  max-width: 480px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  animation: fadeIn 0.3s ease;
  position: relative;
}

/* Animasi */
@keyframes fadeIn {
  from { opacity: 0; transform: scale(0.98); }
  to { opacity: 1; transform: scale(1); }
}

/* Gambar utama */
.main-image {
  width: 100%;
  height: 70vh;
  background: #000;
  display: flex;
  justify-content: center;
  align-items: center;
}
.main-image img {
  max-height: 100%;
  max-width: 100%;
  object-fit: contain;
}

/* Thumbnail bar */
.thumb-row {
  display: flex;
  justify-content: center;
  gap: 6px;
  padding: 10px;
  overflow-x: auto;
  background: #fff;
}
.thumb {
  width: 70px;
  height: 70px;
  object-fit: cover;
  border-radius: 6px;
  cursor: pointer;
  opacity: 0.6;
  transition: all 0.2s;
}
.thumb.active, .thumb:hover {
  opacity: 1;
  border: 2px solid #2196f3;
}

/* Caption */
.caption {
  padding: 10px 15px;
  background: #fff;
  text-align: left;
}

/* Tombol Tutup bawah */
.btn-area {
  border-top: 1px solid #eee;
  background: #fff;
  padding: 10px 0;
  text-align: center;
}
.btn-area button {
  width: 90%;
  font-weight: bold;
}
</style>

<script>
const modal = document.getElementById('galleryModal');
const feedImg = document.querySelector('.feed-img');
const closeModal = document.querySelector('.close-modal');
const closeBtn = document.querySelector('.modal-close-btn');
const thumbs = document.querySelectorAll('.thumb');
const mainPreview = document.getElementById('mainPreview');

// Buka modal
feedImg.addEventListener('click', () => {
  modal.style.display = 'flex';
  document.body.style.overflow = 'hidden';
});

// Tutup modal
function closeGallery() {
  modal.style.display = 'none';
  document.body.style.overflow = 'auto';
}

// Pastikan tombol tutup bekerja
if (closeModal) closeModal.addEventListener('click', closeGallery);
if (closeBtn) closeBtn.addEventListener('click', closeGallery);

window.addEventListener('click', (e) => {
  if (e.target === modal) closeGallery();
});

// Ganti gambar utama
thumbs.forEach(t => {
  t.addEventListener('click', () => {
    thumbs.forEach(i => i.classList.remove('active'));
    t.classList.add('active');
    mainPreview.src = t.src.replace('200/200', '800/600');
  });
});
</script>

<?php include 'includes/footer.php'; ?>
