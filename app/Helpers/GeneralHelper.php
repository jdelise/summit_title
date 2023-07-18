<?php
function setActive($route, $class = 'active')
{
    $request = \Illuminate\Support\Facades\Request::segment(1);
    return ($request == $route) ? $class : '';
}
function setActiveSub($route1,$route2, $class = 'active')
{
    $request_1 = \Illuminate\Support\Facades\Request::segment(2);
    $request_2 = \Illuminate\Support\Facades\Request::segment(3);
    return ($request_1 == $route1&& $request_2 == $route2) ? $class : '';
}
