<?php

switch($app_module_action)
{
  case 'send':
    $alerts->add(db_prepare_input($_POST['message']));
    redirect_to('hello/snugpod-raffle-prod-1-0-0/index');
  break;
}
