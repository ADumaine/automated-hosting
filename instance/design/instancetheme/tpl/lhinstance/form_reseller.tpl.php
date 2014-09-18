<?php if ($instance->id !== null) : ?>
<h4><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('instance/edit','Reseller ID');?> - <?php echo htmlspecialchars($instance->id);?></h4>
<?php endif;?>

<label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('instance/edit','Is reseller');?> <input type="checkbox" name="Reseller" value="on" <?php echo $instance->is_reseller ? 'checked="checked"' : '';?> /></label>

<label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('instance/edit','Reseller title');?></label>
<input type="text" name="ResellerTitle"  value="<?php echo htmlspecialchars($instance->reseller_tite);?>" />

<label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('instance/edit','Max number of request per instance');?></label>
<input type="text" name="ResellerMaxRequest"  value="<?php echo htmlspecialchars($instance->reseller_max_instance_request);?>" />

<label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('instance/edit','Max number of instances reseller can have');?></label>
<input type="text" name="ResellerMaxInstance"  value="<?php echo htmlspecialchars($instance->reseller_max_instances);?>" />

<label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('instance/edit','How many request reseller has to sell');?></label>
<input type="text" name="ResellerRequest"  value="<?php echo htmlspecialchars($instance->reseller_request);?>" />

<label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('instance/edit','Reseller secret hash. Used by API dedicated to reseller');?></label>
<input type="text" name="ResellerSecretHash"  value="<?php echo htmlspecialchars($instance->reseller_secret_hash);?>" />