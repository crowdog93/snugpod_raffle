<h1 class="page-title"><?php echo TEXT_PLUGIN_SNUG_RAFFLE ?> </h1>

<?php

echo '<a class="btn btn-primary" href="javascript: open_dialog(\'' . url_for('raffle/snugRaffleEngine/form') . '\')">' . TEXT_PLUGIN_SNUG_FORM_HEADER. '</a>';

echo '<hr>';

echo  snugpod_core_raffle_class::active_raffle_data();
