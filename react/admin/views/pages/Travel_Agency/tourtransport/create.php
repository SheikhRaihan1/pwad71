<?php
echo Page::title(["title"=>"Create TourTransport"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"tourtransport", "text"=>"Manage TourTransport"]);
echo Page::context_open();
echo Form::open(["route"=>"tourtransport/save"]);

echo Form::input(["name"=>"create","class"=>"btn btn-primary offset-2", "value"=>"Save", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
