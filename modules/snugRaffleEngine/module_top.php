<?php

//check access
$access = array("6", "15", "5");
if(in_array($app_user['group_id'], $access))
{
  redirect_to('dashboard/access_forbidden');
}
