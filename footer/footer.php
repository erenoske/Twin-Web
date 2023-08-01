          <!-- Footer -->
          <footer class="bg-veryDarkBlue">
            <!-- Flex Container -->
            <div
              class="container flex flex-col-reverse justify-between px-6 py-10 mx-auto space-y-8 md:flex-row md:space-y-0"
            >
              <!-- Logo and social links container -->
              <div
                class="flex flex-col-reverse items-center justify-between space-y-12 md:flex-col md:space-y-0 md:items-start"
              >
                <div class="mx-auto my-6 text-center text-white md:hidden">
                  Copyright &copy; 2022, All Rights Reserved
                </div>
                <!-- Logo -->
                <div>
                  <img src="./public/img/logo-white.svg" class="h-8" alt="" />
                </div>
                <!-- Social Links Container -->
                <div class="flex justify-center space-x-4">
                  <!-- Link 1 -->
                  <a href="#">
                    <img src="./public/img/icon-facebook.svg" alt="" class="h-8" />
                  </a>
                  <!-- Link 2 -->
                  <a href="#">
                    <img src="./public/img/icon-youtube.svg" alt="" class="h-8" />
                  </a>
                  <!-- Link 3 -->
                  <a href="#">
                    <img src="./public/img/icon-twitter.svg" alt="" class="h-8" />
                  </a>
                  <!-- Link 4 -->
                  <a href="#">
                    <img src="./public/img/icon-pinterest.svg" alt="" class="h-8" />
                  </a>
                  <!-- Link 5 -->
                  <a href="#">
                    <img src="./public/img/icon-instagram.svg" alt="" class="h-8" />
                  </a>
                </div>
              </div>
              <!-- List Container -->
              <div class="flex justify-around space-x-32">
                <div class="flex flex-col space-y-3 text-white">
                  <a href="#" class="hover:text-brightRed">Home</a>
                  <a href="#" class="hover:text-brightRed">Pricing</a>
                  <a href="#" class="hover:text-brightRed">Products</a>
                  <a href="#" class="hover:text-brightRed">About</a>
                </div>
                <div class="flex flex-col space-y-3 text-white">
                  <a href="#" class="hover:text-brightRed">Careers</a>
                  <a href="#" class="hover:text-brightRed">Community</a>
                  <a href="#" class="hover:text-brightRed">Privacy Policy</a>
                </div>
              </div>
      
              <!-- Input Container -->
              <div class="flex flex-col justify-between">
                <form>
                  <div class="flex space-x-3">
                    <input
                      type="text"
                      class="flex-1 px-4 rounded-full focus:outline-none"
                      placeholder="Updated in your inbox"
                    />
                    <button
                      class="px-6 py-2 text-white rounded-full bg-brightRed hover:bg-brightRedLight focus:outline-none"
                    >
                      Go
                    </button>
                  </div>
                </form>
                <div class="hidden text-white md:block">
                  Copyright &copy; 2022, All Rights Reserved
                </div>
              </div>
            </div>
          </footer>
          <script src="./public/js/header.js"></script>
          <script src="./public/js/script.js"></script>
          <!-- Swiper JS -->
          <script src="./public/js/swiper-bundle.min.js"></script>
          <script>
            var swiper = new Swiper(".slide-content", {
            slidesPerView: 3,
            spaceBetween: 25,
            loop: true,
            centerSlide: 'true',
            fade: 'true',
            grabCursor: 'true',
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
              dynamicBullets: true,
            },
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
        
            breakpoints:{
                0: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 2,
                },
                950: {
                    slidesPerView: 3,
                },
            },
  }        );
          </script>
          <script>
            function toggleDropdown() {
            const dropdownMenu = document.getElementById("dropdown-menu");
            dropdownMenu.classList.toggle("active-dropdown");
          }
          
          function toggleDropdownMobile() {
            const dropdownMenu = document.getElementById("dropdown-menu-mobile");
            dropdownMenu.classList.toggle("active-dropdown");
          }
                    </script>
                        <script>
                const titles = [
            "<?= __('Sağlıklı ve Huzurlu')?>",
            "<?= __('Daha Rahat Uyku')?>",
            "<?= __('Duygusal Uyarım')?>"
          ];
          const titleElement = document.getElementById("title");
          const changeButton = document.getElementById("changeButton");
          const whatsappButton = document.getElementById("whatsapp");
          
          let currentIndex = 0;
          
          function changeTitle() {
            titleElement.classList.remove("active");
            whatsappButton.classList.remove("active");
            setTimeout(function() {
              titleElement.textContent = titles[currentIndex];
              currentIndex = (currentIndex + 1) % titles.length;
              titleElement.classList.add("active");
              whatsappButton.classList.add("active");
            }, 300);
          }
          
          changeTitle();
          
          setInterval(changeTitle, 10000);
          
          const paragraph = [
            "<?= __('Bebeğinizin güvenli ve temiz bir ortamda bebek masajının ve yüzmenin keyfini çıkarabileceği bir ortam')?>",
            "<?= __('Bebeğinize daha rahat bir uyku sağlayın')?>",
            "<?= __('Daha fazla duyusal uyarım, daha sağlıklı gelişim için bebek spa')?>"
          ];
          const paragraphElement = document.getElementById("paragraph");
          
          let currentIndexs = 0;
          
          function changeParagraph() {
            paragraphElement.classList.remove("active");
            setTimeout(function() {
              paragraphElement.textContent = paragraph[currentIndexs];
              currentIndexs = (currentIndexs + 1) % paragraph.length;
              paragraphElement.classList.add("active");
            }, 300);
          }
          
          changeParagraph();
          
          setInterval(changeParagraph, 10000);
          
          //prev
          function changeTitleNegatif() {
            titleElement.classList.remove("active");
            whatsappButton.classList.remove("active");
            setTimeout(function() {
              titleElement.textContent = titles[currentIndex];
              currentIndex = (currentIndex + 2) % titles.length;
              titleElement.classList.add("active");
              whatsappButton.classList.add("active");
            }, 300);
          }
          
          function changeParagraphNegatif() {
            paragraphElement.classList.remove("active");
            setTimeout(function() {
              paragraphElement.textContent = paragraph[currentIndexs];
              currentIndexs = (currentIndexs + 2) % paragraph.length;
              paragraphElement.classList.add("active");
            }, 300);
          }

         // const nextButton = document.getElementById("nextButton");
         // const prevButton = document.getElementById("prevButton");
         // 
         // nextButton.addEventListener("click", function() {
         //   changeTitle();
         //   changeParagraph();
         // });
         // 
         // prevButton.addEventListener("click", function() {
         //   changeTitleNegatif();
         //   changeParagraphNegatif()
         // });
    </script>
    </body>
</html>