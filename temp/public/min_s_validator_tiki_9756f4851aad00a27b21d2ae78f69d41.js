jQuery.validator.setDefaults({onkeyup:!1,errorClass:'invalid-feedback',errorPlacement:function(error,element){if($(element).parents('.input-group').length>0){error.insertAfter($(element).parents('.input-group').first())}else{error.appendTo($(element).parent())}},highlight:function(element){$(element).addClass('is-invalid');$("#"+element.getAttribute("id")+"_chosen").addClass("is-invalid")},unhighlight:function(element){$(element).removeClass("is-invalid");$("#"+element.getAttribute("id")+"_chosen").removeClass("is-invalid")},ignore:'.ignore'});jQuery.validator.addMethod("required_in_group",function(value,element,options){var numberRequired=options[0],excluded;var selector=options[1];if(typeof options[2]!='undefined'){excluded=options[2]}else{excluded=''}
var validOrNot=$(selector,element.form).filter(function(){if($(this).data('tiki_never_visited'))return'dummy-value-for-validation';return($(this).val()&&$(this).val().toLowerCase()!=excluded)}).length>=numberRequired;var validator=this;if(!$(element).data('being_validated')){var fields=$(selector,element.form);fields.data('being_validated',!0);validator.valid();fields.data('being_validated',!1)}
return validOrNot},jQuery.validator.format(tr("Please fill out {0} of these fields.")));jQuery.validator.addMethod("required_tracker_file",function(value,element,options){var numberRequired=options[0];var selector=options[1];var validOrNot=$(selector,element.form).filter(function(){return $(this).val()}).length>=numberRequired;if(!$(element).data('being_validated')){var fields=$(selector,element.form);fields.data('being_validated',!0);fields.valid();fields.data('being_validated',!1)}
return validOrNot},jQuery.validator.format("File required"));jQuery.validator.addMethod("email_multi",function(value,element,options){var separator=options[0]||",";var emails=$(element).val().split(separator);for(var i=0;i<emails.length;i++){if(!$.validator.methods.email.call(this,$.trim(emails[i]),element)){return!1}}
return!0},jQuery.validator.format("Please enter valid email addresses separated by commas"));jQuery.validator.addClassRules("email_multi",{email_multi:!0});function process_submit(form,event){var $form=$(form);if(!$form.attr("is_validating")){$form.attr("is_validating",!0);$form.validate()}
if($form.validate().pendingRequest>0){$(form).data("resubmit",!0);setTimeout(function(){process_submit(form,event)},500);return!1}
$form.attr("is_validating",!1);if(!$form.valid()){return!1}
if($form.data("ajax")){$form.find("input[type=submit]").css("opacity",0.3);$form.parents(".modal").find(".auto-btn").css("opacity",0.3)}else{$form.find("input[type=submit]").off("click").css("opacity",0.3);$form.parents(".modal").find(".auto-btn").off("click").css("opacity",0.3)}
if($(form).hasClass("confirm-action")){$form.tikiModal(tr("Saving..."))}
if(!$form.data('submitted')){$form.data('submitted',!0)}else{return!1}
if(typeof event!=='undefined'&&event.target){var btn=$(event.target);if(btn.is('form')){var btnform=btn;var btn=btnform.find("input[type=submit]:focus");if(btn.length==0){btn=btnform.find("input[type=submit]:first")}}
$("<input type='hidden'/>").attr("name",btn.attr('name')).val(btn.val()).appendTo($form)}
if($form.data("resubmit")){$form.data("resubmit",!1);$form.submit()}
if($form.data("ajax")){if($form.data("ajax_action")=="update"){$form.tracker_update_item({trackerId:$form.data('tracker_id'),itemId:$form.data('item_id'),ajax:!0},function(trackerInfo){$form.data('submitted',!1);$form.find("input[type=submit]").off("click").css("opacity",1);$form.parents(".modal").find(".auto-btn").off("click").css("opacity",1)})}else{$form.tracker_insert_item({trackerId:$form.data('tracker_id'),ajax:!0},function(trackerInfo){$form.data("ajax_action","update");$form.data('item_id',trackerInfo.itemId);$form.data('submitted',!1);$form.find("input[type=submit]").off("click").css("opacity",1);$form.parents(".modal").find(".auto-btn").off("click").css("opacity",1)})}
return!1}
return!0}
jQuery.validator.addMethod("validate_cron_runtime",function(value,element,options){var cronTime=value.trim();var regex="^(\\*|((\\*\\/)?[1-5]?[0-9])|[1-5]?[0-9]-[1-5]?[0-9]|[1-5]?[0-9](,[1-5]?[0-9])*) (\\*|((\\*\\/)?(1?[0-9]|2[0-3]))|(1?[0-9]|2[0-3])-(1?[0-9]|2[0-3])|(1?[0-9]|2[0-3])(,(1?[0-9]|2[0-3]))*) (\\*|((\\*\\/)?([1-9]|[12][0-9]|3[0-1]))|([1-9]|[12][0-9]|3[0-1])-([1-9]|[12][0-9]|3[0-1])|([1-9]|[12][0-9]|3[0-1])(,([1-9]|[12][0-9]|3[0-1]))*) (\\*|((\\*\\/)?([1-9]|1[0-2])|([1-9]|1[0-2])-([1-9]|1[0-2])|([1-9]|1[0-2])(,([1-9]|1[0-2]))*)) (\\*|((\\*\\/)?[0-6])|[0-6](,[0-6])*|[0-6]-[0-6])$";if(cronTime.match(regex)===null){$(element).addClass('is-invalid');return!1}
$(element).parents('.form-group').first().removeClass('is-invalid');return!0},jQuery.validator.format(tr("Cron run time is not valid")))