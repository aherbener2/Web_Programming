var target=0;
var maxAttempts=8;
var counter=0;
function guessingGame() {
	target=(Math.floor(Math.random()*100))+1;
	document.getElementById("temp").innerHTML="You have "+(8-counter)+" guesses remaining.";
}
function checkGuess() {
	var guess=document.getElementById("guessNumber").value;
	if(counter>maxAttempts-1)
	{
		alert("You lose. The number was "+target);
		counter=0;
		guessingGame();
	}
	else if(guess==target)
	{
		alert("You win!!");
		counter=0;
		guessingGame();
	}
	else if(guess>target)
	{
		alert("Pick a lower number.");
		counter++;
		document.getElementById("temp").innerHTML="You have "+(8-counter)+" guesses remaining.";
	}
	else
	{
		alert("Pick a higher number.");
		counter++;
		document.getElementById("temp").innerHTML="You have "+(8-counter)+" guesses remaining.";
	}
}