<?php
echo Page::title(["title"=>"Edit Booking"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"booking", "text"=>"Manage Booking"]);
echo Page::context_open();
echo Form::open(["route"=>"booking/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$booking->id"]);
	echo Form::input(["label"=>"Customer","name"=>"customer_id","table"=>"customers","value"=>"$booking->customer_id"]);
	echo Form::input(["label"=>"Package","name"=>"package_id","table"=>"packages","value"=>"$booking->package_id"]);
	echo Form::input(["label"=>"Employee","name"=>"employee_id","table"=>"employees","value"=>"$booking->employee_id"]);
	echo Form::input(["label"=>"Booking Date","type"=>"text","name"=>"booking_date","value"=>"$booking->booking_date"]);
	echo Form::input(["label"=>"Travel Date","type"=>"text","name"=>"travel_date","value"=>"$booking->travel_date"]);
	echo Form::input(["label"=>"Travelers","type"=>"text","name"=>"travelers","value"=>"$booking->travelers"]);
	echo Form::input(["label"=>"Status","type"=>"text","name"=>"status","value"=>"$booking->status"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-2" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
