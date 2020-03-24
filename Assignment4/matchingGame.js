var difficulty=0;
var blockNum=0;
var arr=[];
var arr1=[0,0];
var arr2=[];
var maxTime=0;
var diff1="Choose a difficulty and start the game:<br> (seconds to memorize the tiles in parentheses) <br><button type=\"button\" onclick=\"easy()\" style=\"margin-right:0.2cm\">Easy (8)</button><button type=\"button\" onclick=\"medium()\" style=\"margin-right:0.2cm\">Medium (5)</button><button type=\"button\" onclick=\"hard()\">Hard (3)</button><br><br><br>";
function game8() {
	blockNum=8;
	maxTime=120;
	arr=[1,1,2,2,3,3,4,4];
	arr2=[0,0,0,0,0,0,0,0];
	document.getElementById("diff").innerHTML=diff1;
	shuffle(arr);
}
function game10() {
	blockNum=10;
	maxTime=150;
	arr=[1,1,2,2,3,3,4,4,5,5];
	arr2=[0,0,0,0,0,0,0,0,0,0];
	document.getElementById("diff").innerHTML=diff1;
	shuffle(arr);
}
function game12() {
	blockNum=12;
	maxTime=180;
	arr=[1,1,2,2,3,3,4,4,5,5,6,6];
	arr2=[0,0,0,0,0,0,0,0,0,0,0,0];
	document.getElementById("diff").innerHTML=diff1;
	shuffle(arr);
}
function easy() {
	difficulty=1;
	drawBlocks();
	setTimeout(function() {black();},8000);
	setTimeout(function() {lose();},(maxTime*1000));
}
function medium() {
	difficulty=2;
	drawBlocks();
	setTimeout(function() {black();},5000);
	setTimeout(function() {lose();},(maxTime*1000));
}
function hard() {
	difficulty=3;
	drawBlocks();
	setTimeout(function() {black();},3000);
	setTimeout(function() {lose();},(maxTime*1000));
}
function shuffle(x) {
	var n=x.length;
	for(i=0;i<n;i++)
	{
		var temp=Math.floor(Math.random()*n);
		var temp1=x[i];
		x[i]=x[temp];
		x[temp]=temp1;
	}
}
function drawBlocks() {
	for(i=0;i<arr.length;i++)
	{
		var temp="block"+(i+1);
		switch(arr[i]) {
			case 1:
			document.getElementById(temp).src="redsquare.png";
			document.getElementById(temp).className="block";
			break;
			case 2:
			document.getElementById(temp).src="orangesquare.png";
			document.getElementById(temp).className="block";
			break;
			case 3:
			document.getElementById(temp).src="yellowsquare.png";
			document.getElementById(temp).className="block";
			break;
			case 4:
			document.getElementById(temp).src="greensquare.png";
			document.getElementById(temp).className="block";
			break;
			case 5:
			document.getElementById(temp).src="bluesquare.png";
			document.getElementById(temp).className="block";
			break;
			case 6:
			document.getElementById(temp).src="purplesquare.png";
			document.getElementById(temp).className="block";
			break;
		}
	}
}
function colorBlock(x) {
	var temp="block"+(x+1);
	switch(arr[x]) {
			case 1:
			document.getElementById(temp).src="redsquare.png";
			document.getElementById(temp).className="block";
			break;
			case 2:
			document.getElementById(temp).src="orangesquare.png";
			document.getElementById(temp).className="block";
			break;
			case 3:
			document.getElementById(temp).src="yellowsquare.png";
			document.getElementById(temp).className="block";
			break;
			case 4:
			document.getElementById(temp).src="greensquare.png";
			document.getElementById(temp).className="block";
			break;
			case 5:
			document.getElementById(temp).src="bluesquare.png";
			document.getElementById(temp).className="block";
			break;
			case 6:
			document.getElementById(temp).src="purplesquare.png";
			document.getElementById(temp).className="block";
			break;
		}
}
function black() {
	for(i=0;i<arr.length;i++)
	{
		var temp="block"+(i+1);
		document.getElementById(temp).src="blacksquare.png";
	}
}
var test1=0;
var test2=0;
var test3=0;
var test4=0;
var counter=0;
function b(x) {
	console.log("Counter="+counter);
	if(counter%2==0)
	{
		colorBlock(x);
		test1=arr[x];
		test3=x;
		counter++;
	}
	else
	{
		colorBlock(x);
		test2=arr[x];
		test4=x;
		console.log("Test1="+test1);
		console.log("Test2="+test2);
		var temp1="block"+(test3+1);
		var temp2="block"+(test4+1);
		if(test1!=test2)
		{
			console.log("temp1="+temp1);
			console.log("temp2="+temp2);
			setTimeout(function() {c(temp1,temp2);},500);
		}
		else
		{
			arr2[test3]=1;
			arr2[test4]=1;
			document.getElementById(temp1).onclick="";
			document.getElementById(temp2).onclick="";
			console.log("arr2="+arr2);
			var flag=0;
			for(i=0;i<arr2.length;i++)
			{
				if(arr2[i]!=1)
				{
					flag=1;
				}
			}
			if(flag==0)
			{
				alert("You win!");
				endGame();
			}
		}
		test1=0;
		test2=0;
		counter++;
	}
}
function c(temp1,temp2) {
	document.getElementById(temp1).src="blacksquare.png";
	document.getElementById(temp2).src="blacksquare.png";
}
function endGame() {
	document.getElementById("newgame").innerHTML="<a href=\"partC.html\">New Game</a>";
	for(i=1;i<=16;i++)
	{
		var temp="block"+i;
		document.getElementById(temp).onclick="";
	}
}
function lose() {
	alert("You ran out of time. You lose.");
	endGame();
}