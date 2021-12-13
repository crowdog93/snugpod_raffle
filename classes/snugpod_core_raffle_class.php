<?php

class snugpod_core_raffle_class
{
  static function active_raffle_data()
  {
    global $app_user;

    $active_raffle_query = db_query("select * from app_entity_22 where field_342='327'");
    if($active_raffle = db_fetch_array($active_raffle_query))
    {
      $raffle_output = '<div>Raffle:<b>' . $active_raffle['field_168'] . '</b></div>';
    }

    return $raffle_output;
  }
}
