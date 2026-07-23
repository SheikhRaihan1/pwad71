<?php
echo Page::title(["title"=>"Edit Transport"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"transport", "text"=>"Manage Transport"]);
echo Page::context_open();
echo Form::open(["route"=>"transport/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$transport->id"]);
	echo Form::input(["label"=>"Vehicle Type","type"=>"text","name"=>"vehicle_type","value"=>"$transport->vehicle_type"]);
	echo Form::input(["label"=>"Company","type"=>"text","name"=>"company","value"=>"$transport->company"]);
	echo Form::input(["label"=>"Price","type"=>"text","name"=>"price","value"=>"$transport->price"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-2" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
