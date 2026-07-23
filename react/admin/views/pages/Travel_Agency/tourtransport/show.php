<?php
echo Page::title(["title"=>"Show TourTransport"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"tourtransport", "text"=>"Manage TourTransport"]);
echo Page::context_open();
echo TourTransport::html_row_details($id);
echo Page::context_close();
echo Page::body_close();
