<?php
echo Page::title(["title"=>"Edit Flight"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"flight", "text"=>"Manage Flight"]);
echo Page::context_open();
echo Form::open(["route"=>"flight/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$flight->id"]);
	echo Form::input(["label"=>"Airline","type"=>"text","name"=>"airline","value"=>"$flight->airline"]);
	echo Form::input(["label"=>"Flight No","type"=>"text","name"=>"flight_no","value"=>"$flight->flight_no"]);
	echo Form::input(["label"=>"Source","type"=>"text","name"=>"source","value"=>"$flight->source"]);
	echo Form::input(["label"=>"Destination","type"=>"text","name"=>"destination","value"=>"$flight->destination"]);
	echo Form::input(["label"=>"Price","type"=>"text","name"=>"price","value"=>"$flight->price"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-2" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
