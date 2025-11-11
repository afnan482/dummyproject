const modal = document.getElementById("galleryModal");
const feedImg = document.querySelector(".feed-img");
const closeModal = document.querySelector(".close-modal");
const closeBtn = document.querySelector(".modal-close-btn");
const thumbs = document.querySelectorAll(".thumb");
const mainPreview = document.getElementById("mainPreview");

// Buka modal
feedImg.addEventListener("click", () => {
  modal.style.display = "flex";
  document.body.style.overflow = "hidden";
});

// Tutup modal
function closeGallery() {
  modal.style.display = "none";
  document.body.style.overflow = "auto";
}

// Pastikan tombol tutup bekerja
if (closeModal) closeModal.addEventListener("click", closeGallery);
if (closeBtn) closeBtn.addEventListener("click", closeGallery);

window.addEventListener("click", (e) => {
  if (e.target === modal) closeGallery();
});

// Ganti gambar utama
thumbs.forEach((t) => {
  t.addEventListener("click", () => {
    thumbs.forEach((i) => i.classList.remove("active"));
    t.classList.add("active");
    mainPreview.src = t.src.replace("200/200", "800/600");
  });
});