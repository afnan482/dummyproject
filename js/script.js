// footer.php
document.addEventListener("DOMContentLoaded", function () {
  // Modal init
  var modals = document.querySelectorAll(".modal");
  M.Modal.init(modals, { endingTop: "5%" });

  // Swiper init
  new Swiper(".mySwiper", {
    loop: true,
    pagination: { el: ".swiper-pagination", clickable: true },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  // Like button toggle
  document.querySelectorAll(".like-btn").forEach((btn) => {
    btn.addEventListener("click", () => {
      if (btn.textContent.trim() === "favorite_border") {
        btn.textContent = "favorite";
        btn.style.color = "red";
      } else {
        btn.textContent = "favorite_border";
        btn.style.color = "black";
      }
    });
  });
});

// index.php
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
