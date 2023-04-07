const checkbox = document.querySelector('.hum');
const carousel2 = document.querySelector('.carousel');
// to do chane carousel by navbar and margintop by bottom
checkbox.addEventListener('change', function() {
  if (this.checked) {
    carousel2.style.marginTop = '340px';
  } else {
    carousel2.style.marginTop = '30px';
  }
});