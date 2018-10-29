// This is used primarly to test the game environment

  function reset(){ // FOR TESTING, REMOVE LATER
    //Resets cards to blank status
    for (var i = 0; i < playerArray.length; i++){
      var resetPlayer = "player" + (i+1);
      document.getElementById(resetPlayer).innerHTML = "";
    }

    //Resets variables
    selectedPlayer = "player1";
    currentPlayer = 1;
    playerArray = [];

    //Displaying results to screen
    document.getElementById("textBox").innerHTML = "Game Reset ";

    document.getElementById("arrayList").innerHTML = playerArray;
  }


//TESTING FUNCTIONALITY, REMOVE LATER
  function playerSelect(x){ // FOR TESTING, REMOVE LATER
    //Used to cycle through players
    if (x == 0) {
      if (currentPlayer == 1){
        currentPlayer = numberOfPlayers;
        selectedPlayer = "player" + currentPlayer;        
      }
      else {
        currentPlayer--;
        selectedPlayer = "player" + currentPlayer;
      }
    }
    else if (x == 1){
      if (currentPlayer == numberOfPlayers){
        currentPlayer = 1;
        selectedPlayer = "player" + currentPlayer;        
      }
      else {
        currentPlayer++;
        selectedPlayer = "player" + currentPlayer;
      }
    }
  }  