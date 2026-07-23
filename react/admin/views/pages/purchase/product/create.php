<?php
echo Page::title(["title"=>"Create Product"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"product", "text"=>"Manage Product"]);
echo Page::context_open();
echo Form::open(["route"=>"product/save"]);
	echo Form::input(["label"=>"Name","type"=>"text","name"=>"name"]);
	echo Form::input(["label"=>"Price","type"=>"text","name"=>"price"]);
	echo Form::input(["label"=>"Purchase Price","type"=>"text","name"=>"purchase_price"]);
	echo Form::input(["label"=>"Description","type"=>"textarea","name"=>"description"]);
	echo Form::input(["label"=>"Photo","type"=>"file","name"=>"photo"]);
	echo Form::input(["label"=>"Star","type"=>"text","name"=>"star"]);
	echo Form::input(["label"=>"Is Brand","type"=>"checkbox","name"=>"is_brand","value"=>"1"]);
	echo Form::input(["label"=>"Offer Discount","type"=>"text","name"=>"offer_discount"]);
	echo Form::input(["label"=>"Uom","name"=>"uom_id","table"=>"uoms"]);
	echo Form::input(["label"=>"Barcode","type"=>"text","name"=>"barcode"]);
	echo Form::input(["label"=>"Category","name"=>"category_id","table"=>"categories"]);

echo Form::input(["name"=>"create","class"=>"btn btn-primary offset-2", "value"=>"Save", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
