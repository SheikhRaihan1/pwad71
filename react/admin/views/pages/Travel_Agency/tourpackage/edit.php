<?php
echo Page::title(["title"=>"Edit TourPackage"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"tourpackage", "text"=>"Manage TourPackage"]);
echo Page::context_open();
echo Form::open(["route"=>"tourpackage/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$tourpackage->id"]);
	echo Form::input(["label"=>"Name","type"=>"text","name"=>"name","value"=>"$tourpackage->name"]);
	echo Form::input(["label"=>"Country","type"=>"text","name"=>"country","value"=>"$tourpackage->country"]);
	echo Form::input(["label"=>"Duration","type"=>"text","name"=>"duration","value"=>"$tourpackage->duration"]);
	echo Form::input(["label"=>"Hotel","name"=>"hotel_id","table"=>"hotels","value"=>"$tourpackage->hotel_id"]);
	echo Form::input(["label"=>"Flight","name"=>"flight_id","table"=>"flights","value"=>"$tourpackage->flight_id"]);
	echo Form::input(["label"=>"Transport","name"=>"transport_id","table"=>"transports","value"=>"$tourpackage->transport_id"]);
	echo Form::input(["label"=>"Price","type"=>"text","name"=>"price","value"=>"$tourpackage->price"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-2" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
