
  var currentPlayer = 1;
  var selectedPlayer = "player" + currentPlayer;
  var cardArray = [];
  var playerArray = ['Justin'];  

//Sets a card into the selected player's slot
  function setCard(x){
    if (cardArray.length < playerArray.length){
        cardArray[currentPlayer - 1] = x;
      document.getElementById(selectedPlayer).innerHTML = "✔";
      //Reveals cards
      if (cardArray.length == playerArray.length){
        reveal();
      }
    }
    //display the array to screen REMOVE LATER
    document.getElementById("arrayList").innerHTML = cardArray;
  }

  function reveal() {
    for (var i = 0; i < cardArray.length; i++){
      showCard = "player" + (i+1);
      if (cardArray[i] == 1){
        document.getElementById(showCard).innerHTML = "1";
      }
      else if (cardArray[i] == 2){
        document.getElementById(showCard).innerHTML = "2";
      }
      else if (cardArray[i] == 3){
        document.getElementById(showCard).innerHTML = "3";
      }
      else if (cardArray[i] == 4){
        document.getElementById(showCard).innerHTML = "5";
      }
      else if (cardArray[i] == 5){
        document.getElementById(showCard).innerHTML = "8";
      }
      else if (cardArray[i] == 6){
        document.getElementById(showCard).innerHTML = "13";
      }
      else if (cardArray[i] == 7){
        document.getElementById(showCard).innerHTML = "∞";
      }
      else if (cardArray[i] == 8){
        document.getElementById(showCard).innerHTML = "?";
      }
    }
  }

  var playerNum = 1;
  playerArray.forEach(function(player){
    var ul = document.createElement('ul');
    document.getElementById("cardDisplay").appendChild(ul);
    var cardli = document.createElement('li');
    var playerli = document.createElement('li');
    cardli.setAttribute("class", "displayCard");
    cardli.setAttribute("id", "player"+playerNum);
    playerli.setAttribute("class", "displayName");
    ul.appendChild(cardli);
    ul.appendChild(playerli);
    playerli.innerHTML += player;
    cardli.innerHTML += "";
    playerNum++;
  });

  //Used to open and close admin buttons
  function openNav() {
    document.getElementById("mySidebar").style.width = "180px";
  }

  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
  }
