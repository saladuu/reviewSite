let aan = true

function transitie() {
  let comRating = document.getElementsByClassName("comRating");
  let ranking = document.getElementsByClassName("rating");
  if (aan == true) {
    // transitie naar dark mode
    aan = false
    document.body.style.backgroundColor = "rgb(44, 44, 43)";
    document.body.style.color = "white"
    document.getElementById("bulb").src = "./img/algemeen/bulb_uit.png"
    for (let i = 0; i < comRating.length; i++) {
          comRating[i].style.color = "black";
        }
    for (let i = 0; i < ranking.length; i++) {
          ranking[i].style.color = "black";
        }
  } else if (aan == false) {
    // transitie naar light mode
    aan = true
    document.body.style.backgroundColor = "white";
    document.body.style.color = "black"
    document.getElementById("bulb").src = "./img/algemeen/bulb.png"
  } else {
    alert("dark mode gaat mis")
  }
}