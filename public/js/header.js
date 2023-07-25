const titles = [
  "Sağlıklı ve Huzurlu",
  "Daha Rahat Uyku",
  "Duygusal Uyarım"
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
  "Bebeğinizin güvenli ve temiz bir ortamda bebek masajının ve yüzmenin keyfini çıkarabileceği bir ortam",
  "Bebeğinize daha rahat bir uyku sağlayın",
  "Daha fazla duyusal uyarım, daha sağlıklı gelişim için bebek spa"
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
