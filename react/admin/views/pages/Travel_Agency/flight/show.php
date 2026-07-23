<?php
echo Page::title(["title"=>"Show Flight"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"flight", "text"=>"Manage Flight"]);
echo Page::context_open();
echo Flight::html_row_details($id);
echo Page::context_close();
echo Page::body_close();
