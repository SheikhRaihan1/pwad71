<?php
echo Page::title(["title"=>"Create Invoice"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"invoice", "text"=>"Manage Invoice"]);
echo Page::context_open();
echo Form::open(["route"=>"invoice/save"]);
	echo Form::input(["label"=>"Booking","name"=>"booking_id","table"=>"bookings"]);
	echo Form::input(["label"=>"Invoice No","type"=>"text","name"=>"invoice_no"]);
	echo Form::input(["label"=>"Total","type"=>"text","name"=>"total"]);
	echo Form::input(["label"=>"Discount","type"=>"text","name"=>"discount"]);
	echo Form::input(["label"=>"Vat","type"=>"text","name"=>"vat"]);
	echo Form::input(["label"=>"Grand Total","type"=>"text","name"=>"grand_total"]);

echo Form::input(["name"=>"create","class"=>"btn btn-primary offset-2", "value"=>"Save", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
