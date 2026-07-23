<?php
echo Page::title(["title"=>"Edit TourTransport"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"tourtransport", "text"=>"Manage TourTransport"]);
echo Page::context_open();
echo Form::open(["route"=>"tourtransport/update"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-2" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
