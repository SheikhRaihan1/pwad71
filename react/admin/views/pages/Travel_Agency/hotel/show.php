<?php
echo Page::title(["title"=>"Show Hotel"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"hotel", "text"=>"Manage Hotel"]);
echo Page::context_open();
echo Hotel::html_row_details($id);
echo Page::context_close();
echo Page::body_close();
