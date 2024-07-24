document.addEventListener('DOMContentLoaded', () => {
  const menuToggle = document.getElementById('menu-toggle');
  const navLinks = document.querySelector('.nav-links');

  menuToggle.addEventListener('click', () => {
    navLinks.classList.toggle('active');
    menuToggle.classList.toggle('open');
  });

  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');
  const testimonialsCarousel = document.querySelector('.testimonials-carousel');
  let index = 0;

  const showTestimonial = (newIndex) => {
    const testimonials = document.querySelectorAll('.testimonial');
    const total = testimonials.length;

    if (newIndex >= total) index = 0;
    else if (newIndex < 0) index = total - 1;
    else index = newIndex;

    const offset = -index * 100;
    testimonialsCarousel.style.transform = `translateX(${offset}%)`;
  };

  prevBtn.addEventListener('click', () => showTestimonial(index - 1));
  nextBtn.addEventListener('click', () => showTestimonial(index + 1));

  // Auto slide every 5 seconds
  setInterval(() => showTestimonial(index + 1), 5000);
});
window.onload = function() {
      const successMessage = document.querySelector('.success-message');
      if (successMessage) {
        setTimeout(() => {
          successMessage.style.display = 'none';
        }, 10000); // Adjust the timeout as needed
      }
}