<!-- Random User Page -->

@extends('layouts.master')

@section('title')
    Random Business Contact Generator
@stop

@section('content')
    <h1>Random Business Contact Generator</h1>
	<p>Need to create random contact profiles for testing purposes? You've come to the right place!  <br/>
		This program will allow you to create up to 10 profile. Information for each user includes:</br>
		First name, last name, Company they work for, Company address & Contact number.</p>
	</br></br>
	<strong>Step 1:</strong> Select or enter the number of Contacts you wish to create.
		</br></br><strong>Step 2:</strong> Click "Submit"</br></br>
		<form name="input" action="user" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
				Number of users (1 - 10):
			<input type="number" name="num_users" min="1" max="10" required/>
			<input id="generate" type="submit" value="submit">
			
		</form>
	
	
	<p>
	
	</p>
@stop