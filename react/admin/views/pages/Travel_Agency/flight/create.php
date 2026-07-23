<?php
echo Page::title(["title"=>"Create Flight"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"flight", "text"=>"Manage Flight"]);
echo Page::context_open();
echo Form::open(["route"=>"flight/save"]);
	echo Form::input(["label"=>"Airline","type"=>"text","name"=>"airline"]);
	echo Form::input(["label"=>"Flight No","type"=>"text","name"=>"flight_no"]);
	echo Form::input(["label"=>"Source","type"=>"text","name"=>"source"]);
	echo Form::input(["label"=>"Destination","type"=>"text","name"=>"destination"]);
	echo Form::input(["label"=>"Price","type"=>"text","name"=>"price"]);

echo Form::input(["name"=>"create","class"=>"btn btn-primary offset-2", "value"=>"Save", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
