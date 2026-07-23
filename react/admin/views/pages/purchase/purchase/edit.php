<?php
echo Page::title(["title"=>"Edit Purchase"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"purchase", "text"=>"Manage Purchase"]);
echo Page::context_open();
echo Form::open(["route"=>"purchase/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$purchase->id"]);
	echo Form::input(["label"=>"Supplier","name"=>"supplier_id","table"=>"suppliers","value"=>"$purchase->supplier_id"]);
	echo Form::input(["label"=>"Purchase Date","type"=>"date","name"=>"purchase_date","value"=>"$purchase->purchase_date"]);
	echo Form::input(["label"=>"Delivery Date","type"=>"date","name"=>"delivery_date","value"=>"$purchase->delivery_date"]);
	echo Form::input(["label"=>"Shipping Address","type"=>"textarea","name"=>"shipping_address","value"=>"$purchase->shipping_address"]);
	echo Form::input(["label"=>"Purchase Total","type"=>"text","name"=>"purchase_total","value"=>"$purchase->purchase_total"]);
	echo Form::input(["label"=>"Paid Amount","type"=>"text","name"=>"paid_amount","value"=>"$purchase->paid_amount"]);
	echo Form::input(["label"=>"Remark","type"=>"textarea","name"=>"remark","value"=>"$purchase->remark"]);
	echo Form::input(["label"=>"Status","name"=>"status_id","table"=>"status","value"=>"$purchase->status_id"]);
	echo Form::input(["label"=>"Discount","type"=>"text","name"=>"discount","value"=>"$purchase->discount"]);
	echo Form::input(["label"=>"Vat","type"=>"text","name"=>"vat","value"=>"$purchase->vat"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-2" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
