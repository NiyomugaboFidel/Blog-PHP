

  // JavaScript logic
  let slideIndex = 0;
  const slides = document.getElementsByClassName('slide');

  function showSlides() {
    for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = 'none';
      
    }
    slideIndex++;
    if (slideIndex > slides.length) {
      slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = 'block';
    setTimeout(showSlides,20000); // Change image every 2 seconds (2000 milliseconds)
  }

  showSlides(); // Start the slides



  var  prev = document.getElementById("prev");
  var  next = document.getElementById("next");
  var thumbnail = document . getElementsByClassName("thumbnail");
  var hero = document.getElementById("hero");

  var backgroundImg = new Array(
    "image/img1.jpg",
    "image/img2.jpg",
    "image/img3.jpg",
    "image/img4.jpg",
    "image/img5.jpg",
    "image/img6.jpg",
  );
  let i = 0;
  next.onclick = function(){
    if(i < 5){
      hero.style.backgroundImage = 'url("'+backgroundImg[i+1]+'")';
      thumbnail[i+1].classList.add("active");
      thumbnail[i].classList.remove("active");
      i++;
    }
  };
  prev.onclick = function(){
    if(i > 0){
     
      hero.style.backgroundImage = 'url("'+backgroundImg[i-1]+'")';
      thumbnail[i-1].classList.add("active");
      thumbnail[i].classList.remove("active");
      i--;
    }
  };
