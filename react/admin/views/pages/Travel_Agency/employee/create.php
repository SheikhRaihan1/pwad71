<?php
echo Page::title(["title"=>"Create Employee"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"employee", "text"=>"Manage Employee"]);
echo Page::context_open();
echo Form::open(["route"=>"employee/save"]);
	echo Form::input(["label"=>"Name","type"=>"text","name"=>"name"]);
	echo Form::input(["label"=>"Phone","type"=>"text","name"=>"phone"]);
	echo Form::input(["label"=>"Designation","type"=>"text","name"=>"designation"]);

echo Form::input(["name"=>"create","class"=>"btn btn-primary offset-2", "value"=>"Save", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
