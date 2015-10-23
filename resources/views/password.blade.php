<!-- Password Page -->

@extends('layouts.master')

@section('title')
    Random Password Generator
@stop


@section('title')
    Random Password Generator
@stop

@section('content')
   <h1>Random Password Generator</h1>
 	<p>This simple program will generate a passcode between 4 to 8 of random words or animals in this case.</p>
	<p>The combination of words is hard to crack yet easy to remember.</p>
	<p>Make it even more secure by adding a random number and/or random symbol.</p>
	</br>
	<p>
		<form name="input" action="/password" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<p>Step 1. How many words (1 - 9): 
				<input type="number" id="no_words" name="no_words" min="1" max="9"required />
				<span class="message" id="message" name="message"></span> 
			</p>
			</br>
			<p>Step 2. Include a number? Check box for "yes": 
				<input type="checkbox" id="number" name="number" class="number" value="true" />
				<label for='include_number'>Yes</label>
			</p>
			</br>
			<p>Step 3. Include a symbol? Check box for "yes": 
				<input type="checkbox" id="symbol" name="symbol" class="symbol"value="true" />
				<label for= "include_symbol">Yes</label>
			</p>
			<br/>
			<p>Step 4. Click "Generate": 
				<input id="generate" class="button" type="submit "value="generate"/>
			</p>
		</form>
	</p>
	 	
	</br>
	<div class="password" id="password"></div>
		
	<script type="text/javascript" src="js/random.js"></script>
@stop

	