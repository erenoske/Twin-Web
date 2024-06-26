<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./public/css/main.css" />
    <script src="./public/js/main.js"></script>
    <script src="./public/js/config.js"></script>
    <title><?php echo $baslik ?></title>
    <script src='./public/js/jquery.min.js'></script>
    <script src='./public/js/jquery-ui.min.js'></script>
    <script src="./public/js/navbar-second.js"></script>
    <style>
      .none {
       display: none !important;
      }
      .active-dropdown {
        display: block !important;
      }
    </style>
  </head>

    <body>
    <div class="whatsapp">
      <a href="https://api.whatsapp.com/send?phone=+905435679470&amp;text=Selam hizmetleriniz ile ilgili almak istiyorum." target="_blank">
      <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="45px" width="45px" xmlns="http://www.w3.org/2000/svg"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path></svg>
      </a>
    </div>
    <header id="main-nav">
            <!-- Navigation section with centered content -->
            <nav class="fixed top-0 left-0 right-0 transition duration-300 text-black z-40">
              <!-- Flex container with items aligned in a row -->
              <div class="container mx-auto p-3">
                <div class="flex items-center justify-between">
                  <!-- Two images side by side with fixed width -->
                  <a href="./">
                   <div class="w-32 flex">
                     <!-- First image -->
                     <img class="" src="./public/img/v1.png" alt="">
                     <!-- Second image with padding top and bottom -->
                     <img class="py-4" src="./public/img/v2.png" alt="">
                   </div>
                  </a>
                  <!-- Menu Items -->
                  <div class="hidden md:flex space-x-6">
                  <a href="./randevu" class="hover:text-darkGrayishBlue"><?= __('Rendavu Al')?></a>
                    <a href="" class="hover:text-darkGrayishBlue"><?= __('Hakkımızda')?></a>
                    <a href="./#services" class="hover:text-darkGrayishBlue"><?= __('Hizmetlerimiz')?></a>
                    <a href="./#gallery" class="hover:text-darkGrayishBlue"><?= __('Galeri')?></a>
                    <a href="./#faq" class="hover:text-darkGrayishBlue"><?= __('S.S.S')?></a>
                    <a href="./#contact" class="hover:text-darkGrayishBlue"><?= __('İletişim')?></a>
                    <a class="hover:text-darkGrayishBlue flex dropdown-heading cursor-pointer" onclick="toggleDropdown()">
                    <img src="./public/icon/<?= __('TR')?>.svg" class="w-4 h-4 rounded-full object-cover mt-1 mr-1" alt="<?= __('TR')?>"><?= __('TR')?>
                    <div id="dropdown-menu" class="absolute flex-col rounded-full items-center text-black self-end py-8 space-y-6 font-bold bg-white sm:w-auto sm:self-center drop-shadow-md md:w-28 flex none" style="bottom: -200px; right: 3%;">
                        <a href="?lang=tr" class="link flex items-center" style="margin-top: 5px;"><img src="./public/icon/tr.svg" class="w-10 h-10 ml-5 mr-1 rounded-full object-cover" alt="Türkçe" onclick="toggleDropdown()">TR</a>
                        <a href="?lang=en" class="link flex items-center"><img src="./public/icon/en.svg" class="w-10 h-10 ml-5 mr-1 rounded-full object-cover mt-1" alt="English">ENG</a>
                        <a href="?lang=ru" class="link flex items-center"><img src="./public/icon/ru.svg" class="w-10 h-10 ml-5 mr-1 rounded-full object-cover mt-1 mb-1" style="border: 1px solid black;" alt="Türkçe">RU</a>
                    </div>
                    </a>
                  </div>
                  <!-- Hamburger Icon -->
                  <button id="menu-btn" class="block hamburger md:hidden focus:outline-none float-right">
                   <span id="h-top" class="hamburger-top transition duration-300 bg-black"></span>
                   <span id="h-middle" class="hamburger-middle transition duration-300 bg-black"></span>
                   <span id="h-bottom" class="hamburger-bottom transition duration-300 bg-black"></span>
                  </button>
                </div>
              </div>
              <!-- Mobile Menu -->
              <div class="md:hidden">
              <div id="menu" class="absolute flex-col items-center hidden text-black self-end py-8 mt-10 space-y-6 font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md" style="z-index: 9999; border-radius: 10px;">
               <a href="./hakkimizda" class="hover:text-darkGrayishBlue"><?= __('Hakkımızda')?></a>
               <a href="#services" class="hover:text-darkGrayishBlue"><?= __('Hizmetlerimiz')?></a>
               <a href="#gallery" class="hover:text-darkGrayishBlue"><?= __('Galeri')?></a>
               <a href="#faq" class="hover:text-darkGrayishBlue"><?= __('S.S.S')?></a>
               <a href="#contact" class="hover:text-darkGrayishBlue"><?= __('İletişim')?></a>
               <a class="hover:text-darkGrayishBlue flex dropdown-heading cursor-pointer" onclick="toggleDropdownMobile()">
               <img src="./public/icon/<?= __('TR')?>.svg" class="w-4 h-4 rounded-full object-cover mt-1 mr-1" alt="<?= __('TR')?>"><?= __('TR')?>
                    <div id="dropdown-menu-mobile" class="absolute flex-col rounded-full items-center text-black self-end py-8 space-y-6 font-bold bg-white sm:w-auto sm:self-center drop-shadow-md md:w-28 flex none" style="bottom: -200px; right: 3%;">
                        <a href="?lang=tr" class="link flex items-center mr-4" style="margin-top: 5px;"><img src="./public/icon/tr.svg" class="w-10 h-10 ml-5 mr-1 rounded-full object-cover" alt="Türkçe" onclick="toggleDropdownMobile()">TR</a>
                        <a href="?lang=en" class="link flex items-center mr-4"><img src="./public/icon/en.svg" class="w-10 h-10 ml-5 mr-1 rounded-full object-cover mt-1" alt="English">ENG</a>
                        <a href="?lang=ru" class="link flex items-center mr-4"><img src="./public/icon/ru.svg" class="w-10 h-10 ml-5 mr-1 rounded-full object-cover mt-1 mb-1" style="border: 1px solid black;" alt="Türkçe">RU</a>
                    </div>
               </a>
             </div>
              </div>
            </nav>
          </header>