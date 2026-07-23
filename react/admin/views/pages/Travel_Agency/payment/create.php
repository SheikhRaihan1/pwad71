<?php
echo Page::title(["title"=>"Create Payment"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"payment", "text"=>"Manage Payment"]);
echo Page::context_open();
echo Form::open(["route"=>"payment/save"]);
	echo Form::input(["label"=>"Booking","name"=>"booking_id","table"=>"bookings"]);
	echo Form::input(["label"=>"Payment Date","type"=>"text","name"=>"payment_date"]);
	echo Form::input(["label"=>"Amount","type"=>"text","name"=>"amount"]);
	echo Form::input(["label"=>"Payment Method","type"=>"text","name"=>"payment_method"]);
	echo Form::input(["label"=>"Status","type"=>"text","name"=>"status"]);

echo Form::input(["name"=>"create","class"=>"btn btn-primary offset-2", "value"=>"Save", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
