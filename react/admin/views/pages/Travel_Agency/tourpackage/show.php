<?php
echo Page::title(["title"=>"Show TourPackage"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"tourpackage", "text"=>"Manage TourPackage"]);
echo Page::context_open();
echo TourPackage::html_row_details($id);
echo Page::context_close();
echo Page::body_close();
