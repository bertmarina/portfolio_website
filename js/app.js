let interests = document.getElementById("interests");

const list = ["programming", "travelling", "crocheting", "postcrossing"];
let currentIndex = 0;

setInterval(() => {
  interests.innerHTML = list[currentIndex];
  currentIndex++;
  if(currentIndex === 4) {
    currentIndex = 0;
  }
}, 700);
