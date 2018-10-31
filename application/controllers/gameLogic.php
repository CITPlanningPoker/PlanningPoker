<?php
	$numberOfPlayers = 10;
	$currentPlayer = 1;
	$selectedPlayer = "player" + currentPlayer;
	$playerArray = new SplFixedArray(numberOfPlayers);

	function setCard(x){
		if (playerArray.length < numberOfPlayers){
			playerArray[currentPlayer - 1] = x;
			document.getElementById(selectedPlayer).innerHTML = "✔";
		}
		if (playerArray.length == numberOfPlayers){
			reveal();
		} 
		document.getElementById("arrayList").innerHTML = playerArray;
	}
	function reveal() {
		for (var i = 0; i < playerArray.length; i++){
			showCard = "player" + (i+1);
			if (playerArray[i] == 1){
				document.getElementById(showCard).innerHTML = "1";
			}
			else if (playerArray[i] == 2){
				document.getElementById(showCard).innerHTML = "2";
			}
			else if (playerArray[i] == 3){
				document.getElementById(showCard).innerHTML = "3";
			}
			else if (playerArray[i] == 4){
				document.getElementById(showCard).innerHTML = "5";
			}
			else if (playerArray[i] == 5){
				document.getElementById(showCard).innerHTML = "8";
			}
			else if (playerArray[i] == 6){
				document.getElementById(showCard).innerHTML = "13";
			}
			else if (playerArray[i] == 7){
				document.getElementById(showCard).innerHTML = "∞";
			}
			else if (playerArray[i] == 8){
				document.getElementById(showCard).innerHTML = "?";
			}
		}
	}
	function openNav() {
		document.getElementById("mySidebar").style.width = "150px";
	}

	function closeNav() {
		document.getElementById("mySidebar").style.width = "0";
	}
?>