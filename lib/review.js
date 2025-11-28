class projectZomboid {
  kop = "Project Zomboid"
  descriptie = "Project Zomboid is een intense en meedogenloze open-world survival-horror game die draait om één simpele, maar verwoestende vraag: Hoe ga je dood? De game speelt zich af in de fictieve, door zombievirussen geteisterde provincie Knox Country, en onderscheidt zich door zijn diepgaande en realistische benadering van het survival-genre."
  rating = "Rating: 9.2"
  genre = "Genre: Adventure, Indie, RPG, Simulation"
  PEGI = "PEGI: 16+"
  foto = "img/games/projectZomboid.png"
}

class discoElysium {
  kop = "Disco Elysium"
  descriptie = "Disco Elysium is een baanbrekende en genre-overstijgende Role-Playing Game (RPG) ontwikkeld door ZA/UM. Het is beroemd om zijn uitzonderlijk geschreven verhaal, unieke mechanieken en de diepgaande exploratie van thema's als politiek, geheugen en de menselijke ziel.<br><br>De game speelt zich af in de fictieve, verwoeste en politiek instabiele stad Revachol, meer specifiek in het district Martinaise. Je wordt wakker als een detective met volledige amnesie (geheugenverlies), op de plek van een brute lynchpartij. Je missie is om deze moordzaak op te lossen, maar eerst moet je uitzoeken wie jij bent."
  rating = "Rating: 9.0"
  genre = "Genre: RPG (role playing game)"
  PEGI = "PEGI: 18+"
  foto = "img/games/discoElysiummReview.png"
}

const gamePZ = new projectZomboid();
const gameDE = new discoElysium();

let keuze = prompt("Project Zomboid / Disco Elysium")

switch(keuze) {
  case "Project Zomboid":
    document.getElementById("reviewHeader").innerHTML = gamePZ.kop
    document.getElementById("reviewDescriptie").innerHTML = gamePZ.descriptie
    document.getElementById("reviewRating").innerHTML = gamePZ.rating
    document.getElementById("reviewGenre").innerHTML = gamePZ.genre
    document.getElementById("reviewPEGI").innerHTML = gamePZ.PEGI
    document.getElementById("reviewFoto").src = gamePZ.foto
    console.log("Gekozen game: " + document.getElementById("reviewHeader").innerHTML)
    break;
  case "Disco Elysium":
    document.getElementById("reviewHeader").innerHTML = gameDE.kop
    document.getElementById("reviewDescriptie").innerHTML = gameDE.descriptie
    document.getElementById("reviewRating").innerHTML = gameDE.rating
    document.getElementById("reviewGenre").innerHTML = gameDE.genre
    document.getElementById("reviewPEGI").innerHTML = gameDE.PEGI
    document.getElementById("reviewFoto").src = gameDE.foto
    console.log("Gekozen game: " + document.getElementById("reviewHeader").innerHTML)
    break;
  default:
    document.getElementById("reviewHeader").innerHTML = "Error: Kies een game"
    document.getElementById("reviewDescriptie").innerHTML = ""
    document.getElementById("reviewRating").innerHTML = ""
    document.getElementById("reviewFoto").src = ""
    console.log("er is geen game gekozen")
}