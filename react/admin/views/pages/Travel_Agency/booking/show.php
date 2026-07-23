<?php
echo Page::title(["title"=>"Show Booking"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"booking", "text"=>"Manage Booking"]);
echo Page::context_open();
echo Booking::html_row_details($id);
echo Page::context_close();
echo Page::body_close();
