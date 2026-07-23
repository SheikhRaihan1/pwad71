<?php
echo Page::title(["title"=>"Show Visa"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"visa", "text"=>"Manage Visa"]);
echo Page::context_open();
echo Form::open(["route"=>"visa/delete/$id"]);
echo "Are you sure?";
echo Visa::html_row_details($id);
echo Form::input(["name"=>"id", "type"=>"hidden", "value"=>$id]);
echo Form::input(["name"=>"delete", "class"=>"btn btn-danger", "value"=>"Delete", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
