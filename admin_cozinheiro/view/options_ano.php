<?php for (($i = (date("Y") - 100)); ($i <= date("Y")); $i++) : ?>
<option value="<?php print $i; ?>"><?php print $i ?></option>
<?php endfor; ?>
