<option value="">---Select City---</option>
<?php foreach($city as $city){?>
<option value="<?php echo $city['ci_id']?>"><?php echo $city['name']?></option>
<?php }?>