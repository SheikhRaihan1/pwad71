<?php
echo Page::title(["title"=>"Edit Product"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"product", "text"=>"Manage Product"]);
echo Page::context_open();
echo Form::open(["route"=>"product/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$product->id"]);
	echo Form::input(["label"=>"Name","type"=>"text","name"=>"name","value"=>"$product->name"]);
	echo Form::input(["label"=>"Price","type"=>"text","name"=>"price","value"=>"$product->price"]);
	echo Form::input(["label"=>"Purchase Price","type"=>"text","name"=>"purchase_price","value"=>"$product->purchase_price"]);
	echo Form::input(["label"=>"Description","type"=>"textarea","name"=>"description","value"=>"$product->description"]);
	echo Form::input(["label"=>"Photo","type"=>"file","name"=>"photo","value"=>$product->photo]);
	echo Form::input(["label"=>"Star","type"=>"text","name"=>"star","value"=>"$product->star"]);
	echo Form::input(["label"=>"Is Brand","type"=>"checkbox","name"=>"is_brand","value"=>"$product->is_brand","checked"=>$product->is_brand?"checked":""]);
	echo Form::input(["label"=>"Offer Discount","type"=>"text","name"=>"offer_discount","value"=>"$product->offer_discount"]);
	echo Form::input(["label"=>"Uom","name"=>"uom_id","table"=>"uoms","value"=>"$product->uom_id"]);
	echo Form::input(["label"=>"Barcode","type"=>"text","name"=>"barcode","value"=>"$product->barcode"]);
	echo Form::input(["label"=>"Category","name"=>"category_id","table"=>"categories","value"=>"$product->category_id"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-2" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
