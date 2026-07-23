<?php
echo Page::title(["title"=>"Create TourPackage"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"tourpackage", "text"=>"Manage TourPackage"]);
echo Page::context_open();
echo Form::open(["route"=>"tourpackage/save"]);
	echo Form::input(["label"=>"Name","type"=>"text","name"=>"name"]);
	echo Form::input(["label"=>"Country","type"=>"text","name"=>"country"]);
	echo Form::input(["label"=>"Duration","type"=>"text","name"=>"duration"]);
	echo Form::input(["label"=>"Hotel","name"=>"hotel_id","table"=>"hotels"]);
	echo Form::input(["label"=>"Flight","name"=>"flight_id", "display_column" =>"airline"  ,"table"=>"flights"]);
	echo Form::input(["label"=>"Transport","name"=>"transport_id","table"=>"transport"]);
	echo Form::input(["label"=>"Price","type"=>"text","name"=>"price"]);

echo Form::input(["name"=>"create","class"=>"btn btn-primary offset-2", "value"=>"Save", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
