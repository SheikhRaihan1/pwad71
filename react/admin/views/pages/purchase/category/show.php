<?php
echo Page::title(["title"=>"Show Category"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"category", "text"=>"Manage Category"]);
echo Page::context_open();
echo Category::html_row_details($id);
echo Page::context_close();
echo Page::body_close();
