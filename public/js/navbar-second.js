window.addEventListener("scroll", function() {
    var nav = document.querySelector("nav");
    var htop = document.getElementById("h-top");
    var hmiddle = document.getElementById("h-middle");
    var hbottom = document.getElementById("h-bottom");
    if (window.scrollY > 0) {
      nav.classList.add("shadow-lg");
      nav.classList.add("bg-white");
      nav.classList.add("z-40");
      nav.classList.remove("text-white");

      htop.classList.remove("bg-white");
      hmiddle.classList.remove("bg-white");
      hbottom.classList.remove("bg-white");

      htop.classList.add("bg-black");
      hmiddle.classList.add("bg-black");
      hbottom.classList.add("bg-black");
    } else {
      nav.classList.remove("shadow-lg");
      nav.classList.remove("bg-white");

      htop.classList.remove("bg-black");
      hmiddle.classList.remove("bg-black");
      hbottom.classList.remove("bg-black");

      htop.classList.add("bg-white");
      hmiddle.classList.add("bg-white");
      hbottom.classList.add("bg-white");
    }
  });