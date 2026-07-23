<?php
echo Page::title(["title"=>"Show Status"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"status", "text"=>"Manage Status"]);
echo Page::context_open();
echo Status::html_row_details($id);
echo Page::context_close();
echo Page::body_close();
