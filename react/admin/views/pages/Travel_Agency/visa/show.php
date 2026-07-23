<?php
echo Page::title(["title"=>"Show Visa"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"visa", "text"=>"Manage Visa"]);
echo Page::context_open();
echo Visa::html_row_details($id);
echo Page::context_close();
echo Page::body_close();
