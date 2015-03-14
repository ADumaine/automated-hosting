<?php if (isset($errors)) : ?>
	<?php include(erLhcoreClassDesign::designtpl('lhkernel/validation_error.tpl.php'));?>
<?php endif; ?>

<?php if (isset($request_send)) : $msg = erTranslationClassLhTranslation::getInstance()->getTranslation('instance/edit','Request was send'); ?>
	<?php include(erLhcoreClassDesign::designtpl('lhkernel/alert_success.tpl.php'));?>
<?php endif; ?>

<form action="<?php echo erLhcoreClassDesign::baseurl('instance/billing')?>" method="post">
    <div class="row">
        <div class="form-group col-xs-6">											 
        	<label><input <?php echo $instance->files_supported == 1 ? 'disabled checked="checked"' : ''?> type="checkbox" value="on" name="files_supported" > <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('instance/edit','Files supported')?></label>
        </div>
        
        <div class="form-group col-xs-6">											 
        	<label><input <?php echo $instance->atranslations_supported == 1 ? 'disabled checked="checked"' : ''?> type="checkbox" value="on" name="atranslations_supported" > <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('instance/edit','Automatic translations supported')?></label>
        </div>
        
        <div class="form-group col-xs-6">											 
        	<label><input <?php echo $instance->cobrowse_supported == 1 ? 'disabled checked="checked"' : ''?> type="checkbox" value="on" name="cobrowse_supported" > <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('instance/edit','Co-Browse supported')?> </label>
        </div>
        
        <div class="form-group col-xs-6">											 
        	<label><input <?php echo $instance->forms_supported == 1 ? 'disabled checked="checked"' : ''?> type="checkbox" value="on" name="forms_supported" > <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('instance/edit','Forms supported')?></label>
        </div>
        
        <div class="form-group col-xs-6">											 
        	<label><input <?php echo $instance->cannedmsg_supported == 1 ? 'disabled checked="checked"' : ''?> type="checkbox" value="on" name="cannedmsg_supported" > <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('instance/edit','Canned messages supported')?></label>
        </div>
        
        <div class="form-group col-xs-6">											 
        	<label><input <?php echo $instance->faq_supported == 1 ? 'disabled checked="checked"' : ''?> type="checkbox" value="on" name="faq_supported" > <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('instance/edit','FAQ supported')?></label>
        </div>
        
        <div class="form-group col-xs-6">											 
        	<label><input <?php echo $instance->reporting_supported == 1 ? 'disabled checked="checked"' : ''?> type="checkbox" value="on" name="reporting_supported" > <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('instance/edit','Reporting supported')?></label>
        </div>
        
        <div class="form-group col-xs-6">											 
        	<label><input <?php echo $instance->chatbox_supported == 1 ? 'disabled checked="checked"' : ''?> type="checkbox" value="on" name="chatbox_supported" > <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('instance/edit','Chatbox supported')?></label>
        </div>
        
        <div class="form-group col-xs-6">											 
        	<label><input <?php echo $instance->browseoffers_supported == 1 ? 'disabled checked="checked"' : ''?> type="checkbox" value="on" name="browseoffers_supported" > <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('instance/edit','Browse offers supported')?></label>
        </div>
        
        <div class="form-group col-xs-6">											 
        	<label><input <?php echo $instance->questionnaire_supported == 1 ? 'disabled checked="checked"' : ''?> type="checkbox" value="on" name="questionnaire_supported" > <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('instance/edit','Questionnaire supported')?></label>
        </div>
        
        <div class="form-group col-xs-6">											 
        	<label><input <?php echo $instance->proactive_supported == 1 ? 'disabled checked="checked"' : ''?> type="checkbox" value="on" name="proactive_supported" > <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('instance/edit','Proactive supported')?></label>
        </div>
        
        <div class="form-group col-xs-6">											 
        	<label><input <?php echo $instance->screenshot_supported == 1 ? 'disabled checked="checked"' : ''?> type="checkbox" value="on" name="screenshot_supported" > <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('instance/edit','Screenshot supported')?></label>
        </div>
        
        <div class="form-group col-xs-6">											 
        	<label><input <?php echo $instance->blocked_supported == 1 ? 'disabled checked="checked"' : ''?> type="checkbox" value="on" name="blocked_supported" > <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('instance/edit','User blocking supported')?></label>
        </div>
		
        <div class="form-group col-xs-6">											 
        	<label><input <?php echo $instance->sms_supported == 1 ? 'disabled checked="checked"' : ''?> type="checkbox" value="on" name="sms_supported" > <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('instance/edit','SMS supported')?></label>
        </div>
        
        <div class="form-group col-xs-6">											 
        	<label><input <?php echo $instance->footprint_supported == 1 ? 'disabled checked="checked"' : ''?> type="checkbox" value="on" name="footprint_supported" > <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('instance/edit','Footprint supported')?></label>
        </div>
        
        <div class="form-group col-xs-6">											 
        	<label><input <?php echo $instance->previouschats_supported == 1 ? 'disabled checked="checked"' : ''?> type="checkbox" value="on" name="previouschats_supported" > <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('instance/edit','Previous chats supported')?></label>
        </div>
        
        <div class="form-group col-xs-6">											 
        	<label><input <?php echo $instance->autoresponder_supported == 1 ? 'disabled checked="checked"' : ''?> type="checkbox" value="on" name="autoresponder_supported" > <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('instance/edit','Autoresponder supported')?></label>
        </div>
        
        <div class="form-group col-xs-6">											 
        	<label><input <?php echo $instance->chatremarks_supported == 1 ? 'disabled checked="checked"' : ''?> type="checkbox" value="on" name="chatremarks_supported" > <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('instance/edit','Chat notes supported')?></label>
        </div>
        
        <div class="form-group col-xs-6">											 
        	<label><input <?php echo $instance->geoadjustment_supported == 1 ? 'disabled checked="checked"' : ''?> type="checkbox" value="on" name="geoadjustment_supported" > <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('instance/edit','GEO adjustment supported')?></label>
        </div>
        
        <div class="form-group col-xs-6">
        	<label><input <?php echo $instance->onlinevisitortrck_supported == 1 ? 'disabled checked="checked"' : ''?> type="checkbox" value="on" name="onlinevisitortrck_supported" > <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('instance/edit','Online visitors list supported')?></label>
        </div>
        
        <?php include(erLhcoreClassDesign::designtpl('lhinstance/features_multiinclude.tpl.php'));?>
        
    </div>
    <input class="btn btn-default" type="submit" value="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('instance/edit','Request features')?>" name="RequestAction" />
</form>