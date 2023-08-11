<?php
 require './lang.php';
 $baslik = __('Twin Baby Spa - Randevu');
 require './headers/side-type.php';
?>
   <section id="date">
     <div class="container m-auto mt-40 mb-40 flex items-center space-between flex-wrap-reverse py-24 px-3 md:px-0">
       <div class="mt-10 md:mt-0 md:w-1/2 md:space-x-6">
         <img src="./public/img/bg-2-rb.png" class="rounded-full" alt="">
       </div>
       <div class="md:w-1/2">
         <h2 class="text-4xl font-bold pl-5">Hoş Geldiniz</h2>
         <input type="date" id="tarih" name="tarih" required>
       </div>
     </div>
   </section>
<?php
 require './footer/footer.php';
?>