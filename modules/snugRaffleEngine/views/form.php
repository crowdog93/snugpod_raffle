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
      <label for="total_enteries">Entries</label>
      <input type="number" class="form-control" id="total_enteries" placeholder="Entries">
    </div>
    <button type="button" id='submit_entry' class="btn btn-primary">Submit</button>

   </div>
</div>
<div class="raffle_enteries"
  <table id="entry_table" class="table table-striped table-bordered table-hover">
    <thead>
      <tr id="raffle_header_row">
        <th scope="col">Gamer Tag</th>
        <th scope="col">Enteries</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td id="gamerTagTable"></td>
        <td id="enteriesTable"></td>
      </tr>
    </tbody>
  </table>
</div>
<?php echo ajax_modal_template_footer(TEXT_SEND) ?>

</form>


<script type="text/javascript">

document.getElementById("submit_entry").onclick=function()
{
    document.getElementById("entry_table").style.display="block";

    var table = document.getElementById("entry_table");
    var row = table.insertRow(-1);
    var gamerTag = row.insertCell(0);
    var enteries = row.insertCell(1);
    gamerTag.innerHTML = document.getElementById("gamerTag").value;
    total_enteries.innerHTML = document.getElementById("total_enteries").value;

    return false;
}

</script>
