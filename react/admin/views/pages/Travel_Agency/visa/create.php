<?php
echo Page::title(["title"=>"Create Visa"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"visa", "text"=>"Manage Visa"]);
echo Page::context_open();
echo Form::open(["route"=>"visa/save"]);
	echo Form::input(["label"=>"Customer","name"=>"customer_id","table"=>"customers"]);
	echo Form::input(["label"=>"Country","type"=>"text","name"=>"country"]);
	echo Form::input(["label"=>"Visa Type","type"=>"text","name"=>"visa_type"]);
	echo Form::input(["label"=>"Status","type"=>"text","name"=>"status"]);

echo Form::input(["name"=>"create","class"=>"btn btn-primary offset-2", "value"=>"Save", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
