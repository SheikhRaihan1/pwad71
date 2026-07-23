<?php
echo Page::title(["title"=>"Edit Category"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"category", "text"=>"Manage Category"]);
echo Page::context_open();
echo Form::open(["route"=>"category/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$category->id"]);
	echo Form::input(["label"=>"Name","type"=>"text","name"=>"name","value"=>"$category->name"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-2" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
