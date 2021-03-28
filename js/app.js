// Animated writing on the index page
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

// Collapsible gallery in travel pages
const coll = document.getElementsByClassName("collapsible");
let i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    let content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
