<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Faker\Factory;

class userController extends Controller
{
     public function getUser()
    {
	   return view('user');
    }

	 public function postUser(Request $request)
    {	
		$this->validate($request, [
		'num_users' => 'required|numeric'
		]);

		
		$faker = \Faker\Factory::create();
			if(isset($_POST['num_users'])){
				$numberofusers = $_POST['num_users'];
				
				for ($i=0; $i<$numberofusers; $i++){
					echo "Name: ".$faker->name,"</br>";
					echo "Company: " .$faker->company, "</br>";
					echo "Company Address: " .$faker->address, "</br>";
					echo "Contact Phone: " .$faker->phoneNumber, "</br>";
					echo "</br>";
				}
			}
			return view('user');
    }
}
