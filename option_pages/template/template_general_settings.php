<?php

?>

<div id="flexi_general_settings_page" class="make_me_invisible">
<form class="form-horizontal flexi_general_styling" id="flexi_general_settings_from">
  <div class="control-group">
    <label class="control-label" for="flexi_tracking_code">Tracking Code</label>
    <div class="controls">
       <textarea rows="6" id="flexi_tracking_code" name="flexi_tracking_code"><?php echo get_option('flexi_tracking_code'); ?></textarea>
    </div>
  </div>
  <input type="hidden" id="txttype" name="txttype" value="general_settings">
  <input type="hidden" id="action" name="action" value="flexi_settings">
  <div class="control-group">
    <div class="controls">
      <input type="submit" class="btn" id="flexi_general_settings_save" value="Save" />
    </div>
  </div>
</form>
</div>