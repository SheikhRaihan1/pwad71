<?php
echo Page::title(["title"=>"Show Transport"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"transport", "text"=>"Manage Transport"]);
echo Page::context_open();
echo Transport::html_row_details($id);
echo Page::context_close();
echo Page::body_close();
