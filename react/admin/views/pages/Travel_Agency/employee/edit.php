<?php
echo Page::title(["title"=>"Edit Employee"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"employee", "text"=>"Manage Employee"]);
echo Page::context_open();
echo Form::open(["route"=>"employee/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$employee->id"]);
	echo Form::input(["label"=>"Name","type"=>"text","name"=>"name","value"=>"$employee->name"]);
	echo Form::input(["label"=>"Phone","type"=>"text","name"=>"phone","value"=>"$employee->phone"]);
	echo Form::input(["label"=>"Designation","type"=>"text","name"=>"designation","value"=>"$employee->designation"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-2" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
