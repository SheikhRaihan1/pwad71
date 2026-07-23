<?php
echo Page::title(["title"=>"Edit Invoice"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"invoice", "text"=>"Manage Invoice"]);
echo Page::context_open();
echo Form::open(["route"=>"invoice/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$invoice->id"]);
	echo Form::input(["label"=>"Booking","name"=>"booking_id","table"=>"bookings","value"=>"$invoice->booking_id"]);
	echo Form::input(["label"=>"Invoice No","type"=>"text","name"=>"invoice_no","value"=>"$invoice->invoice_no"]);
	echo Form::input(["label"=>"Total","type"=>"text","name"=>"total","value"=>"$invoice->total"]);
	echo Form::input(["label"=>"Discount","type"=>"text","name"=>"discount","value"=>"$invoice->discount"]);
	echo Form::input(["label"=>"Vat","type"=>"text","name"=>"vat","value"=>"$invoice->vat"]);
	echo Form::input(["label"=>"Grand Total","type"=>"text","name"=>"grand_total","value"=>"$invoice->grand_total"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-2" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
