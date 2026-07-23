<?php
echo Page::title(["title"=>"Edit Hotel"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"hotel", "text"=>"Manage Hotel"]);
echo Page::context_open();
echo Form::open(["route"=>"hotel/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$hotel->id"]);
	echo Form::input(["label"=>"Name","type"=>"text","name"=>"name","value"=>"$hotel->name"]);
	echo Form::input(["label"=>"City","type"=>"text","name"=>"city","value"=>"$hotel->city"]);
	echo Form::input(["label"=>"Rating","type"=>"text","name"=>"rating","value"=>"$hotel->rating"]);
	echo Form::input(["label"=>"Price Per Night","type"=>"text","name"=>"price_per_night","value"=>"$hotel->price_per_night"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-2" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
