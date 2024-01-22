const tooltipTriggerList = document.querySelectorAll(
  '[data-bs-toggle="tooltip"]'
);
const tooltipList = [...tooltipTriggerList].map(
  (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
);

document.onscroll = () => {
  const navbar = document.querySelector('.navbar');
  const btnScrollToTop = document.querySelector('.scroll-to-top');

  if (window.scrollY >= navbar.offsetTop) {
    btnScrollToTop.style.right = '5px';
  } else {
    btnScrollToTop.style.right = '-100%';
  }
};

const gambarPosts = document.querySelectorAll('.gambar-post');

gambarPosts.forEach((gambarPost) => {
  gambarPost.addEventListener('click', () => {
    const gambarPostCarousel = document.querySelector(
      `#gambarPostModal .carousel-item img#${gambarPost.id}`
    );
    gambarPostCarousel.parentNode.classList.add('active');
  });
});
