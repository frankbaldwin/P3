<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Badcow\LoremIpsum\Generator;

class loremController extends Controller
{
    public function getLorem()
    {
	   return view('lorem');
    }

	 public function postLorem(Request $request)
    {	
		$this->validate($request, [
		'paragraphs' => 'required|numeric'
		]);
		$generator = new \Badcow\LoremIpsum\Generator();
		$paragraphs = $generator->getParagraphs($_POST['paragraphs']);
		echo ('<div classs="paragraph">');
		echo implode('<p></br>', $paragraphs);
        return view('lorem');
    }

}

 