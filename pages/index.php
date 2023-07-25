<?php
$baslik = 'Twin Baby Spa';
include_once ("./headers/main-type.php");   ?>
        <!-- Hero Section -->
          <section id="hero">
            <!-- Flex Container -->
            <div class="container mx-auto">
              <!-- Left item -->
              <div class="flex flex-col gap-5 mx-w-full">
                <h1 id="title" class="text-4xl pl-5 pr-5 font-bold text-white md:pl-0 md:pr-0 md:text-6xl"></h1>
                <p id="paragraph" class="max-w-md pl-5 pr-5 text-slate-200 md:pl-0 md:pr-0"></p>
                <div id="whatsapp" class="flex justify-center md:justify-start">
                  <a rel="noreferrer" href="https://api.whatsapp.com/send?phone=+905435679470&amp;text=Selam hizmetleriniz ile ilgili almak istiyorum." target="_blank"><button type="button" class="text-white bg-brightRed hover:bg-brightRedLight focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 flex justify-center items-center gap-2"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path></svg> İletişim</button></a>
                </div>
                <!-- buttons 
                 <div class="max-w-md">
                  <button class="inline-block px-6 py-2 text-white rounded-full bg-brightRed hover:bg-brightRedLight focus:outline-none" id="prevButton">←</button>
                  <button class="inline-block float-right px-6 py-2 text-white rounded-full bg-brightRed hover:bg-brightRedLight focus:outline-none" id="nextButton">→</button>
                </div>
                -->
              </div> 
            </div>
          </section>
          <img src="./public/img/bottom_white_wave_01.png" class="absolute" style="bottom: -3px;" alt="">
        </div>    
          <!-- items -->
          <section id="testimonials">
            <!-- Container to heading and testm blocks -->
            <div class="container px-5 mx-auto mt-32">
            <img width="130" height="20" src="./public/img/line-02.png" class="mx-auto mb-10" alt="">
              <!-- Heading -->
              <h2 class="text-4xl font-bold text-center">
                Hizmetlerimiz
              </h2>
              <!-- items Container -->
              <div class="flex flex-col mt-24 md:flex-row md:space-x-6">
                <!-- item 1 -->
                <div
                  class="flex flex-col p-6 space-y-6 rounded-lg bg-white md:w-1/3 mt-5 border box-item"
                >
                  <h5 class="text-lg font-bold">Bebek SPA &amp; Hidroterapi</h5>
                  <p class="text-sm text-darkGrayishBlue">
                  Kas ve motor gelişimini destekleyen özel terapilerimiz, bebeğinizin rahatlamasına ve sağlıklı gelişimine katkıda bulunur. Kolik ve gaz sancısı gibi problemlerin azalmasına yardımcı olan terapilerimiz, sevgi dolu uzmanlarımız eşliğinde sunulur.
                  </p>
                  <a href="#">
                    <p class="text-sm font-bold hover:text-brightRedLight">Daha Fazla Göster -></p>
                  </a>
                  <div class="box-img-r">
                   <img src="https://bambino.bold-themes-cdn.com/demo-02/wp-content/uploads/sites/3/2022/06/inner_team_04.jpg" class="inner-image" alt="" />
                  </div>
                </div>
      
                <!-- item 2 -->
                <div
                  class="flex flex-col p-6 space-y-6 rounded-lg bg-white md:w-1/3 mt-5 border box-item"
                >
                  <h5 class="text-lg font-bold">Bebek Masajı</h5>
                  <p class="text-sm text-darkGrayishBlue">
                  Bilişsel performansın gelişmesine ve dikkatin artmasına yardımcı olur.
                  </p>
                  <a href="#">
                    <p class="text-sm font-bold hover:text-brightRedLight">Daha Fazla Göster -></p>
                  </a>
                  <div class="box-img-r">
                   <img src="https://bambino.bold-themes-cdn.com/demo-02/wp-content/uploads/sites/3/2022/06/inner_team_04.jpg" class="inner-image" alt="" />
                  </div>
                </div>
      
                <!-- item 3 -->
                <div
                  class="flex flex-col  p-6 space-y-6 rounded-lg bg-white md:w-1/3 mt-5 border box-item"
                >
                  <h5 class="text-lg font-bold">Hamile Yogası</h5>
                  <p class="text-sm text-darkGrayishBlue">
                  Fiziksel ve zihinsel olarak güçlenmenizi sağlar, solunum kapasitesini artarır.
                  </p>
                  <a href="#">
                    <p class="text-sm font-bold hover:text-brightRedLight">Daha Fazla Göster -></p>
                  </a>
                  <div class="box-img-r">
                   <img src="https://bambino.bold-themes-cdn.com/demo-02/wp-content/uploads/sites/3/2022/06/inner_team_04.jpg" class="inner-image" alt="" />
                  </div>
                </div>
              </div>
              <div class="flex flex-col md:flex-row md:space-x-6">
                <!-- item 1 -->
                <div
                  class="flex flex-col p-6 space-y-6 rounded-lg bg-white md:w-1/3 mt-5 border box-item"
                >
                  <h5 class="text-lg font-bold">Anne Bebek Yogası</h5>
                  <p class="text-sm text-darkGrayishBlue">
                  Kas gelişimlerini destekleyerek anne bebek arasındaki bağı güçlendirir.
                  </p>
                  <a href="#">
                    <p class="text-sm font-bold hover:text-brightRedLight">Daha Fazla Göster -></p>
                  </a>
                  <div class="box-img-r">
                   <img src="https://bambino.bold-themes-cdn.com/demo-02/wp-content/uploads/sites/3/2022/06/inner_team_04.jpg" class="inner-image" alt="" />
                  </div>
                </div>
      
                <!-- item 2 -->
                <div
                  class="flex flex-col p-6 space-y-6 rounded-lg bg-white md:w-1/3 mt-5 border box-item"
                >
                  <h5 class="text-lg font-bold">Oyun Atölyeleri</h5>
                  <p class="text-sm text-darkGrayishBlue">
                  Özgüven ve ifade yeteneği gibi birçok gelişimine uygun becerileri kazanır.
                  </p>
                  <a href="#">
                    <p class="text-sm font-bold hover:text-brightRedLight">Daha Fazla Göster -></p>
                  </a>
                  <div class="box-img-r">
                   <img src="https://bambino.bold-themes-cdn.com/demo-02/wp-content/uploads/sites/3/2022/06/inner_team_04.jpg" class="inner-image" alt="" />
                  </div>
                </div>
      
                <!-- item 3 -->
                <div
                  class="flex flex-col  p-6 space-y-6 rounded-lg bg-white md:w-1/3 mt-5 border box-item"
                >
                  <h5 class="text-lg font-bold">Oyun Terapisi</h5>
                  <p class="text-sm text-darkGrayishBlue">
                  Çocukların duygularını ve yaşadıkları sorunları dışa vurmalarına yardımcı olur.
                  </p>
                  <a href="#">
                    <p class="text-sm font-bold hover:text-brightRedLight">Daha Fazla Göster -></p>
                  </a>
                  <div class="box-img-r">
                   <img src="https://bambino.bold-themes-cdn.com/demo-02/wp-content/uploads/sites/3/2022/06/inner_team_04.jpg" class="inner-image" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Service -->
          <section id="service">
            <div class="container m-auto">
              <h2 class="text-4xl font-bold pt-10 text-center">Hizmetlerimiz</h2>
              <div class="flex flex-col mt-10 md:flex-row md:space-x-6">
                <div class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-white md:w-1/3 mt-5">
                  <img src="./public/img/safe.png" class="w-16" alt="">
                  <h3 class="text-2xl font-bold p-5">Bebek Hidroterapi & Floating</h3>
                  <p class="text-sm text-darkGrayishBlue">Sudaki direnç ile kas ve iskelet sistemi geliştirir</p>
                </div>
      
                <div class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-white md:w-1/3 mt-5">
                  <img src="./public/img/safe.png" class="w-16" alt="">
                  <h3 class="text-2xl font-bold p-5">Bebek Hidroterapi & Floating</h3>
                  <p class="text-sm text-darkGrayishBlue">Sudaki direnç ile kas ve iskelet sistemi geliştirir</p>
                </div>
      
                <div class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-white md:w-1/3 mt-5">
                  <img src="./public/img/safe.png" class="w-16" alt="">
                  <h3 class="text-2xl font-bold p-5">Bebek Hidroterapi & Floating</h3>
                  <p class="text-sm text-darkGrayishBlue">Sudaki direnç ile kas ve iskelet sistemi geliştirir</p>
                </div>
              </div>
              <div class="flex flex-col mt-10 md:flex-row md:space-x-6">
                <div class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-white md:w-1/3 mt-5">
                  <img src="./public/img/safe.png" class="w-16" alt="">
                  <h3 class="text-2xl font-bold p-5">Bebek Hidroterapi & Floating</h3>
                  <p class="text-sm text-darkGrayishBlue">Sudaki direnç ile kas ve iskelet sistemi geliştirir</p>
                </div>
      
                <div class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-white md:w-1/3 mt-5">
                  <img src="./public/img/safe.png" class="w-16" alt="">
                  <h3 class="text-2xl font-bold p-5">Bebek Hidroterapi & Floating</h3>
                  <p class="text-sm text-darkGrayishBlue">Sudaki direnç ile kas ve iskelet sistemi geliştirir</p>
                </div>
      
                <div class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-white md:w-1/3 mt-5">
                  <img src="./public/img/safe.png" class="w-16" alt="">
                  <h3 class="text-2xl font-bold p-5">Bebek Hidroterapi & Floating</h3>
                  <p class="text-sm text-darkGrayishBlue">Sudaki direnç ile kas ve iskelet sistemi geliştirir</p>
                </div>
              </div>
            </div>
          </section>
          <!-- Gallery -->
          <section id="gallery">
          <div class="image-container">
           <div class="container m-auto">
              <h2 class="text-center text-4xl font-bold pt-10">Galeri</h2>
            <div class="gallery">
              <figure class="flex m-0">
                <img src="./public/img/g1.jpg" alt="" class="flex max-w-full object-cover rounded-md">
              </figure>
              <figure class="flex m-0">
                <img src="./public/img/g2.jpg" alt="" class="flex max-w-full object-cover rounded-md">
              </figure>
              <figure class="flex m-0">
                <img src="./public/img/g3.jpg" alt="" class="flex max-w-full object-cover rounded-md">
              </figure>
              <figure class="flex m-0">
                <img src="./public/img/g4.jpg" alt="" class="flex max-w-full object-cover rounded-md">
              </figure>
              <figure class="flex m-0">
                <img src="./public/img/g5.jpg" alt="" class="flex max-w-full object-cover rounded-md">
              </figure>
              <figure class="flex m-0">
                <img src="./public/img/g6.jpg" alt="" class="flex max-w-full object-cover rounded-md">
              </figure>
            </div>
           </div>
           </div>
           <div class="popup-image">
            <span>&times;</span>
            <img src="">
           </div>
          </section>
          <!-- FAQ -->
          <section id="faq">
            <div class="container mx-auto mt-8">
              <h1 class="text-center font-bold text-4xl pb-5">Sıkça Sorulan Sorular</h1>
              <div class="space-y-4">
                <!-- Soru 1 -->
                <div class="bg-gray-200 p-4 rounded-md wraper">
                  <button class="w-full flex justify-between items-center focus:outline-none" onclick="toggleAnswer(1)">
                    <span class="text-lg font-medium">Bu bir başlık mıdır?</span>
                    <svg id="icon1" class="w-6 h-6 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </button>
                  <div class="hidden mt-2 text-gray-700" id="answer1">Evet, bu bir başlıktır.</div>
                </div>
          
                <!-- Soru 2 -->
                <div  class="bg-gray-200 p-4 rounded-md wraper">
                  <button class="w-full flex justify-between items-center focus:outline-none" onclick="toggleAnswer(2)">
                    <span class="text-lg font-medium">Başka bir başlık mıdır?</span>
                    <svg id="icon2" class="w-6 h-6 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </button>
                  <div class="hidden mt-2 text-gray-700" id="answer2">Evet, başka bir başlıktır.</div>
                </div>
      
                <!-- Soru 3 -->
                <div  class="bg-gray-200 p-4 rounded-md wraper">
                  <button class="w-full flex justify-between items-center focus:outline-none" onclick="toggleAnswer(3)">
                    <span class="text-lg font-medium">Başka bir başlık mıdır?</span>
                    <svg id="icon3" class="w-6 h-6 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </button>
                  <div class="hidden mt-2 text-gray-700" id="answer3">Evet, başka bir başlıktır.</div>
                </div>
      
                <!-- Soru 4 -->
                <div  class="bg-gray-200 p-4 rounded-md wraper">
                  <button class="w-full flex justify-between items-center focus:outline-none" onclick="toggleAnswer(4)">
                    <span class="text-lg font-medium">Başka bir başlık mıdır?</span>
                    <svg id="icon4" class="w-6 h-6 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </button>
                  <div class="hidden mt-2 text-gray-700" id="answer4">Evet, başka bir başlıktır.</div>
                </div>
      
                <!-- Soru 5 -->
                <div  class="bg-gray-200 p-4 rounded-md wraper">
                  <button class="w-full flex justify-between items-center focus:outline-none" onclick="toggleAnswer(5)">
                    <span class="text-lg font-medium">Başka bir başlık mıdır?</span>
                    <svg id="icon5" class="w-6 h-6 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </button>
                  <div class="hidden mt-2 text-gray-700" id="answer5">Evet, başka bir başlıktır.</div>
                </div>
      
                <!-- Soru 6 -->
                <div  class="bg-gray-200 p-4 rounded-md wraper">
                  <button class="w-full flex justify-between items-center focus:outline-none" onclick="toggleAnswer(6)">
                    <span class="text-lg font-medium">Başka bir başlık mıdır?</span>
                    <svg id="icon6" class="w-6 h-6 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </button>
                  <div class="hidden mt-2 text-gray-700" id="answer6">Evet, başka bir başlıktır.</div>
                </div>
        
                <!-- Soru 7 -->
                <div  class="bg-gray-200 p-4 rounded-md wraper">
                  <button class="w-full flex justify-between items-center focus:outline-none" onclick="toggleAnswer(7)">
                    <span class="text-lg font-medium">Başka bir başlık mıdır?</span>
                    <svg id="icon7" class="w-6 h-6 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </button>
                  <div class="hidden mt-2 text-gray-700" id="answer7">Evet, başka bir başlıktır.</div>
                </div>
      
                <!-- Soru 8 -->
                <div class="bg-gray-200 p-4 rounded-md wraper">
                  <button class="w-full flex justify-between items-center focus:outline-none" onclick="toggleAnswer(8)">
                    <span class="text-lg font-medium">Başka bir başlık mıdır?</span>
                    <svg id="icon8" class="w-6 h-6 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </button>
                  <div class="hidden mt-2 text-gray-700" id="answer8">Evet, başka bir başlıktır.</div>
                </div>
      
                <!-- Soru 9 -->
                <div class="bg-gray-200 p-4 rounded-md wraper">
                  <button class="w-full flex justify-between items-center focus:outline-none" onclick="toggleAnswer(9)">
                    <span class="text-lg font-medium">Başka bir başlık mıdır?</span>
                    <svg id="icon9" class="w-6 h-6 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </button>
                  <div class="hidden mt-2 text-gray-700" id="answer9">Evet, başka bir başlıktır.</div>
                </div>
              </div>
              <div class="flex justify-center">
                <button id="loadmore" class="px-6 py-2 mb-5 mt-5 text-white rounded-full bg-brightRed hover:bg-brightRedLight focus:outline-none">Daha Fazka Yükle</button>
              </div>
            </div>
          </section>
          <!-- CTA Section -->
          <section id="cta" class="bg-brightRed">
            <!-- Flex Container -->
            <div
              class="container flex flex-col items-center justify-between px-6 py-24 mx-auto space-y-12 md:py-12 md:flex-row md:space-y-0"
            >
              <!-- Heading -->
              <h2
                class="text-5xl font-bold text-center text-white md:text-4xl md:max-w-xl md:text-left"
              >
                Simplify how your team works today
              </h2>
              <!-- Button -->
              <div>
                <a
                  href="#"
                  class="p-3 px-6 pt-2 text-brightRed bg-white rounded-full shadow-2xl baseline hover:bg-gray-900"
                  >Get Started</a
                >
              </div>
            </div>
          </section>

