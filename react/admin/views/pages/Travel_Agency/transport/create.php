<?php
echo Page::title(["title"=>"Create Transport"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"transport", "text"=>"Manage Transport"]);
echo Page::context_open();
echo Form::open(["route"=>"transport/save"]);
	echo Form::input(["label"=>"Vehicle Type","type"=>"text","name"=>"vehicle_type"]);
	echo Form::input(["label"=>"Company","type"=>"text","name"=>"company"]);
	echo Form::input(["label"=>"Price","type"=>"text","name"=>"price"]);

echo Form::input(["name"=>"create","class"=>"btn btn-primary offset-2", "value"=>"Save", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
