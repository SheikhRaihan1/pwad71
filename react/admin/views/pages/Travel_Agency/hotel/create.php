<?php
echo Page::title(["title"=>"Create Hotel"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"hotel", "text"=>"Manage Hotel"]);
echo Page::context_open();
echo Form::open(["route"=>"hotel/save"]);
	echo Form::input(["label"=>"Name","type"=>"text","name"=>"name"]);
	echo Form::input(["label"=>"City","type"=>"text","name"=>"city"]);
	echo Form::input(["label"=>"Rating","type"=>"text","name"=>"rating"]);
	echo Form::input(["label"=>"Price Per Night","type"=>"text","name"=>"price_per_night"]);

echo Form::input(["name"=>"create","class"=>"btn btn-primary offset-2", "value"=>"Save", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
