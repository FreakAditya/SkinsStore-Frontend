const laptopSkinsLinkFooter = document.querySelector('.footer-container .left a:nth-child(3)');
const message = 'Stay Tuned for Laptop Skins';

laptopSkinsLinkFooter.addEventListener('click', (event) => {
  event.preventDefault();
  alert(message);
});

document.addEventListener('DOMContentLoaded', function() {
  const hamburgerMenu = document.querySelector('.hamburger-menu');
  const mobileLinks = document.querySelectorAll('.mobile-link');

  hamburgerMenu.addEventListener('click', function() {
    mobileLinks.forEach(link => {
      link.style.display = link.style.display === 'block' ? 'none' : 'block';
    });
  });
});

