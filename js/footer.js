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