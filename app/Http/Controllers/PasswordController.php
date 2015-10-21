<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PasswordController extends Controller
{
  
    public function getPassword()
    {
       // return 'Show the Password';
	   return view('password');
    }
	
	/*
	 public function createPassword()
    {	
		$no_words = user_input($_POST["no_words"]);
	$numCheck = '';
	$charCheck = '';
	//Create an error msg
	$msg = "Please enter a number 4 - 8.";

	// Converts characters for HTML
	function user_input($no_words) {
	$no_words = htmlspecialchars($no_words);
	return $no_words;
	}
	
	//Create arrays of words, numbers & symbols to be used
		$words =['al','bee','cobra','dog','elephant','flamingo','gopher','hippo','ibis','jackal','kangaroo','lynx','mouse','nutria','opossum','penguin','quail','rabbit','serpent','tapir','uakari','vole','wombat','xerus','yak','zebra'];
		$numbers =['0','1','2','3','4','5','6','7','8','9'];
		$symbols =['~','!','@','$','%','^','&','*','(',')','+','=','{','}','[',']','|',':',';','<','>','?'];
	// Conditional variables for "", min and max words
	$NotNumber = "";
	$min = 4;
	$max = 8;

//If conditional statements

//Create random Words

		echo '<pre>';
		echo htmlentities(print_r($msg, true));
		echo '</pre>'; 
	
			
//Else to definne $pwd variable using rand() with arguments $words & $no_words
		$wrd = array_rand($words, $no_words);
//Iterate using foreach()
		foreach ($wrd as $key => $value) {
		$myWords = "$words[$value]";	
		
//Random Numbers	
	
	if (isset($_POST['number'])) {
      $number = '';
      for ($i = 0; $i < $numbers; $i++) { 
        $number = (string)rand(0,9) . $number;
      }
      $myWords = $myWords.$number;
      $numCheck = 'checked';
		
//Random Characters
	if (isset($_POST['symbol'])) {

      $char = '';
      for ($i = 0; $i < $symbols; $i++) { 
        $char = $randomChars[rand(0,count($randomChars)-1)] . $char;
      }
      $myWords = $myWords . $char;
      $charCheck = 'checked';
    }
	
		
//Echo Password into html
		echo '<pre>';
		echo htmlentities(print_r($myWords, true));
		echo '</pre>';
		}
		}
    }
	*/
	 public function postPassword(Request $request)
    {	
		$this->validate($request, [
		'no_words' => 'required|numeric'
		]);
	    return view('password');
    }

}
