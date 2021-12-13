<?php

//Only snug admin will see this link 4,12,16
$access = array("4", "12", "16","0");
if(in_array($app_user['group_id'], $access))
{
  $app_plugin_menu['menu'][] = array('title'=>'Snugpod Raffle','url'=>url_for('raffle/snugRaffleEngine/index'),'class'=>'fa-ticket');
}
