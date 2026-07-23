<?php
echo Page::title(["title"=>"Edit Visa"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"visa", "text"=>"Manage Visa"]);
echo Page::context_open();
echo Form::open(["route"=>"visa/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$visa->id"]);
	echo Form::input(["label"=>"Customer","name"=>"customer_id","table"=>"customers","value"=>"$visa->customer_id"]);
	echo Form::input(["label"=>"Country","type"=>"text","name"=>"country","value"=>"$visa->country"]);
	echo Form::input(["label"=>"Visa Type","type"=>"text","name"=>"visa_type","value"=>"$visa->visa_type"]);
	echo Form::input(["label"=>"Status","type"=>"text","name"=>"status","value"=>"$visa->status"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-2" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
