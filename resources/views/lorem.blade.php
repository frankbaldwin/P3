<!-- Lorem Ipsum Page -->

@extends('layouts.master')

@section('title')
    Lorem Ipsum Generator
@stop

@section('content')
    <h1>Lorem Ipsum Generator</h1>
		<p>This simple generator program will create paragraphs of random Latin text. Useful for programmers while testing.</p>
		<p><strong>Step 1:</strong> Select or enter the number of paragraphs you wish to generate.</p>
		</br>
		<p><strong>Step 2:</strong> Click "Submit"</p>
		</br>
		<p>
		<form name="input" action="lorem" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<p>Paragraphs (1 - 10): <input type="number" name="paragraphs" min="1" max="10" required /></p>
			<input id="generate" type="submit" value="Submit">
		</form>
		</p>
@stop