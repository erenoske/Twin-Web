const btn = document.getElementById('menu-btn')
const nav = document.getElementById('menu')

btn.addEventListener('click', () => {
  btn.classList.toggle('open')
  nav.classList.toggle('flex')
  nav.classList.toggle('hidden')
});


function toggleAnswer(questionNumber) {
  const answer = document.getElementById(`answer${questionNumber}`);
  const icon = document.getElementById(`icon${questionNumber}`);
  answer.classList.toggle('hidden');
  icon.classList.toggle('rotate-180');
}

document.querySelectorAll('.image-container img').forEach(image => {
  image.onclick = () => {
      document.querySelector('.popup-image').style.display = 'block';
      document.querySelector('.popup-image img').src = image.getAttribute('src');
  }		
});
document.querySelector('.popup-image span').onclick = () => {
  document.querySelector('.popup-image').style.display = 'none';
}
document.querySelector('.popup-image').onclick = () => {
  document.querySelector('.popup-image').style.display = 'none';
}

$(document).ready(function(){
  $(".wraper").slice(0, 4).show();
  $("#loadmore").on("click", function(e){
    e.preventDefault();
    $(".wraper:hidden").slice(0, 4).slideDown();
    if($(".wraper:hidden").length == 0) {
      $("#loadmore").text("No Content").addClass("hidden");
    }
  });
})
