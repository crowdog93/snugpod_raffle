<?php echo ajax_modal_template_header(TEXT_PLUGIN_SNUG_FORM_HEADER) ?>

<?php echo form_tag('raffle_add_snugs', url_for('raffle/snugRaffleEngine/index','action=send'),array('class'=>'form-horizontal')) ?>
<div class="modal-body">
  <div class="form-body">

    <div class="form-group">
      <label for="gamerTag">Gamer Tag</label>
      <input type="text" class="form-control raffle_main" id="gamerTag" aria-describedby="gamerTag" placeholder="Enter gamer tag">
      <small id="gamerTagHelp" class="form-text text-muted">Ensure you enter it correctly so they can be located.</small>
    </div>
    <div class="form-group">
      <label for="raffle_id">Raffle</label>
      <input type="text" class="form-control raffle_main" id="raffle_id" aria-describedby="raffle" placeholder="Raffle">
    </div>
    <div class="form-group">
      <label for="total_enteries">Entries</label>
      <input type="number" class="form-control" id="total_enteries" placeholder="Entries">
    </div>
    <button type="button" id='submit_entry' class="btn btn-primary">Submit</button>

   </div>
</div>
<div class="raffle_enteries">
  <table id="entry_table" class="table table-striped table-bordered table-hover">
    <thead>
      <tr id="raffle_header_row">
        <th scope="col">Gamer Tag</th>
        <th scope="col">Raffle</th>
        <th scope="col">Enteries</th>
      </tr>
    </thead>
    <tbody>

    </tbody>
  </table>
</div>

</form>


<script type="text/javascript">

document.getElementById("submit_entry").onclick=function()
{
    var table = document.getElementById("entry_table");
    console.log(table)
    var row = table.insertRow(-1);
    var gamerTag = row.insertCell(0);
    var total_enteries = row.insertCell(1);
    var raffle = row.insertCell(2);
    gamerTag.innerHTML = document.getElementById("gamerTag").value;
    total_enteries.innerHTML = document.getElementById("total_enteries").value;
    raffle.innerHTML = document.getElementById("raffle_id").value;

    return console.log('Added Raffle');
}

</script>
