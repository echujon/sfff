<p>If you have any questions about the film festival, let us know.</p>		 
<!-- Form Code Start -->
<form autocomplete="off" class="form-horizontal" id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
	<fieldset >
		<input type='hidden' name='submitted' id='submitted' value='1'/>
		<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
		<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />

		<div class='form-group short_explanation'>* required fields</div>

		<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
		<div class='form-group'>
			<label for='name' >Name*: </label><br/>
			<input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
			<span id='contactus_name_errorloc' class='error'></span>
		</div>
		<div class='form-group custom-select'>
			<label for='subject' >Subject: </label><br/>
			<select id='subject' name='subject'>
				<option value="film-festival">film festival question</option>
				<option value="sponsor"<?php if ($_GET["subject"]=='sponsor') echo 'selected="selected"';?>>sponsor query</option>
			</select>
		</div>

		<div class='form-group'>
			<label for='email' >Email Address*:</label><br/>
			<input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
			<span id='contactus_email_errorloc' class='error'></span>
		</div>

		<div class='form-group'>
			<label for='message' >Message*:</label><br/>
			<textarea rows="10" cols="50" name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
			<span id='contactus_message_errorloc' class='error'></span>
		</div>


		<div class='form-grou'>
			<input type='submit' name='Submit' value='Submit' />
		</div>

	</fieldset>
</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");
	frmvalidator.addValidation("email","req","Please provide your email address");
    frmvalidator.addValidation("email","req","Please provide your email address");
    frmvalidator.addValidation("email","email","Please provide a valid email address");
    frmvalidator.addValidation("subject","dontselect=none", "Please select a subject");
    frmvalidator.addValidation("message","req","Please provide the message you want to send");
    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");

// ]]>
</script>