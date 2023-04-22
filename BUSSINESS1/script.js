const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if (bar){
    bar.addEventListener('click', () => {
        nav.classList.add('active'); 
    })
}
if(close){
    close.addEventListener('click', () => {
        nav.classList.remove('active'); 
    })
}
// shop.html queries
const sliderImages = document.querySelector(".slider-images");
const prevBtn = document.querySelector(".prev-btn");
const nextBtn = document.querySelector(".next-btn");

let counter = 0;

nextBtn.addEventListener("click", () => {
  if (counter < 3) {
    counter++;
  } else {
    counter = 0;
  }
  sliderImages.style.transform = `translateX(-${counter * 25}%)`;
});

prevBtn.addEventListener("click", () => {
  if (counter > 0) {
    counter--;
  } else {
    counter = 3;
  }
  sliderImages.style.transform = `translateX(-${counter * 25}%)`;
});

// sproduct slider responsive
// var MainImg = document.getElementById("MainImg");
// var smallimg = document.getElementsByClassName("small-img");

// smallimg[0].onclick = function() {
//     MainImg.src = smallimg[0].src;
// }
// smallimg[1].onclick = function() {
//     MainImg.src = smallimg[1].src;
// }
// smallimg[2].onclick = function() {
//     MainImg.src = smallimg[2].src;
// }
// smallimg[3].onclick = function() {
//     MainImg.src = smallimg[3].src;
// }

// login signup script

// // get elements
// const loginBtn = document.querySelector('.lgn-bt');
// const popupContainer = document.querySelector('.popup-container');
// const popup = document.querySelector('.popup');
// const tabs = document.querySelectorAll('.tab');
// const tabContents = document.querySelectorAll('.tab-content');
// const closePopupBtn = document.querySelector('#close-popup-button');
// const loginForm = document.querySelector('#login-form');
// const signupForm = document.querySelector('#signup-form');

// // show login/signup popup
// loginBtn.addEventListener('click', () => {
//   popupContainer.style.display = 'block';
//   popup.classList.add('active');
//   tabs[0].classList.add('active');
//   tabContents[0].classList.add('active');
// });

// // close login/signup popup
// closePopupBtn.addEventListener('click', () => {
//   popupContainer.style.display = 'none';
// });

// // switch between login and signup tabs
// tabs.forEach((tab, index) => {
//   tab.addEventListener('click', () => {
//     tabs.forEach(tab => tab.classList.remove('active'));
//     tab.classList.add('active');
//     tabContents.forEach(content => content.classList.remove('active'));
//     tabContents[index].classList.add('active');
//   });
// });

// // handle login form submission
// loginForm.addEventListener('submit', e => {
//   e.preventDefault();
//   // perform login validation here
//   // if login is successful, redirect to index.html
//   window.location.href = 'index.html';
// });

// // handle signup form submission
// signupForm.addEventListener('submit', e => {
//   e.preventDefault();
//   // perform signup validation here
//   // if signup is successful, show success message and clear form
//   alert('Signup successful!');
//   signupForm.reset();
// });
