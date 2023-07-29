window.addEventListener("scroll", function() {
    var nav = document.querySelector("nav");
    if (window.scrollY > 0) {
      nav.classList.add("shadow-lg");
      nav.classList.add("bg-white");
      nav.classList.add("z-40");
    } else {
      nav.classList.remove("shadow-lg");
      nav.classList.remove("bg-white");
    }
  });