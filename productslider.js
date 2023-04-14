let slideIndex = 0;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 1; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

// track 

const trackOrderForm = document.querySelector('#track-order-form');
const resultBox = document.querySelector('#result-box');

trackOrderForm.addEventListener('submit', function(event) {
  event.preventDefault(); // prevent form submission

  const orderId = document.querySelector('#order-id').value;
  const email = document.querySelector('#email').value;

  // make a request to the server-side script to process the order tracking
  // and get the result
  const result = getOrderTrackingResult(orderId, email);

  // update the result box with the result message
  resultBox.textContent = result;
  resultBox.style.display = 'block';
});

function getOrderTrackingResult(orderId, email) {
  // make a request to the server-side script to process the order tracking
  // and get the result message
  // replace this with your own code to communicate with the server-side script
  const resultMessage = `Your order with ID ${orderId} and email ${email} is on its way.`;
  return resultMessage;
}
