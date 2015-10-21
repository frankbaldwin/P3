// Js Random Word generator


window.onload = function(){
	
//Get document elements
	var no_words = document.getElementById("no_words");
	var generate = document.getElementById("generate");
	var min = 1;
	var max = 9;

//Begin onclick function:	
generate.onclick = function(){

//Get number checkbox value if checked, set default value as null
	var numberChecked = null; 
	var inputElements = document.getElementsByClassName('number');
	for(var i=0; inputElements[i]; ++i){
      if(inputElements[i].checked){
           numberChecked = inputElements[i].value;
           break;
      }
	}
	
//Get symbol checkbox value if checked, set default value as null
	var symbolChecked = null; 
	var inputElements = document.getElementsByClassName('symbol');
	for(var i=0; inputElements[i]; ++i){
      if(inputElements[i].checked){
           symbolChecked = inputElements[i].value;
           break;
      }
	}

//Begin randomSymbol function to create a random symbol:
	function randomSymbol() {
		var chars = "[~!@$%^&*(){}[]|:;,<>?";
		var string_length = 1;
		var randomstring = '';
		for (var i=0; i<string_length; i++) {
			var rnum = Math.floor(Math.random() * 9);
			randomstring += chars.substring(rnum,rnum+1);
		}
		var S = randomstring;
	//If Else: Used to determine if user wants to include a random symbol. 	
		if (symbolChecked == null){
		var S ="";
		return S;}else{
			return S;
		} //End If Else
	}//End randomSymbol function.	

//Begin randomNumber function to create a random number:
	function randomNumber() {
		var chars = "0123456789";
		var string_length = 1;
		var randomstring = '';
		for (var i=0; i<string_length; i++) {
			var rnum = (Math.floor(Math.random() *10));
			randomstring += chars.substring(rnum,rnum+1);
		}
		var N = randomstring;
	//If Else: Used to determine if user wants to include a random number.
		if (numberChecked == null){
			var N ="";
			return N;}else{
			return N;
		}//End If Else
	}//End randomNumber function.	

//Begin randomWord function to create a random word:
	function randomWords(){
		 var words =['aligator','bee','cobra','dog','elephant','flamingo','gopher','hippo','ibis','jackal','kangaroo','lynx','mouse','nutria','opossum','penguin','quail','rabbit','serpent','tapir','uakari','vole','wombat','xerus','yak','zebra'];
		 var W =(words[Math.floor(Math.random() * words.length)]);
		 return W;
	}//End randomWord function.
	
//Call Functions and assign Variables
	var W = randomWords();
	var N = randomNumber();
	var S = randomSymbol();

//Create Password	
	
	if ( min > no_words || no_words > max || no_words == ""){
		document.getElementById("message").innerHTML = "Please enter a number between 1 and 9";
		} else {
//Output Password to HTML
		document.getElementById("message").innerHTML = "";
		var password = N+W+S;
		document.getElementById("password").innerHTML = password;
		}
	
}//End onlick function
}//End window.onload