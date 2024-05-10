<?php
namespace PHPMaker2020\project_lopc_admn_panel;

// Autoload
include_once "autoload.php";

// Session
if (session_status() !== PHP_SESSION_ACTIVE)
	\Delight\Cookie\Session::start(Config("COOKIE_SAMESITE")); // Init session data

// Output buffering
ob_start();
?>
<?php

// Write header
WriteHeader(FALSE);

// Create page object
$help_add = new help_add();

// Run the page
$help_add->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$help_add->Page_Render();
?>
<?php include_once "header.php"; ?>
<script>
var fhelpadd, currentPageID;
loadjs.ready("head", function() {

	// Form object
	currentPageID = ew.PAGE_ID = "add";
	fhelpadd = currentForm = new ew.Form("fhelpadd", "add");

	// Validate form
	fhelpadd.validate = function() {
		if (!this.validateRequired)
			return true; // Ignore validation
		var $ = jQuery, fobj = this.getForm(), $fobj = $(fobj);
		if ($fobj.find("#confirm").val() == "confirm")
			return true;
		var elm, felm, uelm, addcnt = 0;
		var $k = $fobj.find("#" + this.formKeyCountName); // Get key_count
		var rowcnt = ($k[0]) ? parseInt($k.val(), 10) : 1;
		var startcnt = (rowcnt == 0) ? 0 : 1; // Check rowcnt == 0 => Inline-Add
		var gridinsert = ["insert", "gridinsert"].includes($fobj.find("#action").val()) && $k[0];
		for (var i = startcnt; i <= rowcnt; i++) {
			var infix = ($k[0]) ? String(i) : "";
			$fobj.data("rowindex", infix);
			<?php if ($help_add->ACTID_help->Required) { ?>
				elm = this.getElements("x" + infix + "_ACTID_help");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $help_add->ACTID_help->caption(), $help_add->ACTID_help->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_ACTID_help");
				if (elm && !ew.checkInteger(elm.value))
					return this.onError(elm, "<?php echo JsEncode($help_add->ACTID_help->errorMessage()) ?>");
			<?php if ($help_add->title_act_help->Required) { ?>
				elm = this.getElements("x" + infix + "_title_act_help");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $help_add->title_act_help->caption(), $help_add->title_act_help->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($help_add->title_act_help_u->Required) { ?>
				elm = this.getElements("x" + infix + "_title_act_help_u");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $help_add->title_act_help_u->caption(), $help_add->title_act_help_u->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($help_add->act_roman_help->Required) { ?>
				elm = this.getElements("x" + infix + "_act_roman_help");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $help_add->act_roman_help->caption(), $help_add->act_roman_help->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($help_add->act_roman_help_u->Required) { ?>
				elm = this.getElements("x" + infix + "_act_roman_help_u");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $help_add->act_roman_help_u->caption(), $help_add->act_roman_help_u->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($help_add->a1_volume_help->Required) { ?>
				elm = this.getElements("x" + infix + "_a1_volume_help");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $help_add->a1_volume_help->caption(), $help_add->a1_volume_help->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($help_add->Year_help->Required) { ?>
				elm = this.getElements("x" + infix + "_Year_help");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $help_add->Year_help->caption(), $help_add->Year_help->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_Year_help");
				if (elm && !ew.checkInteger(elm.value))
					return this.onError(elm, "<?php echo JsEncode($help_add->Year_help->errorMessage()) ?>");
			<?php if ($help_add->Year_help_u->Required) { ?>
				elm = this.getElements("x" + infix + "_Year_help_u");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $help_add->Year_help_u->caption(), $help_add->Year_help_u->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($help_add->law_type->Required) { ?>
				elm = this.getElements("x" + infix + "_law_type");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $help_add->law_type->caption(), $help_add->law_type->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($help_add->law_type_u->Required) { ?>
				elm = this.getElements("x" + infix + "_law_type_u");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $help_add->law_type_u->caption(), $help_add->law_type_u->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($help_add->law_content->Required) { ?>
				elm = this.getElements("x" + infix + "_law_content");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $help_add->law_content->caption(), $help_add->law_content->RequiredErrorMessage)) ?>");
			<?php } ?>
			
			
						 

			<?php if ($help_add->promulgate_dt->Required) { ?>
				elm = this.getElements("x" + infix + "_promulgate_dt");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $help_add->promulgate_dt->caption(), $help_add->promulgate_dt->RequiredErrorMessage)) ?>");
			<?php } ?>

					 


			<?php if ($help_add->promulgates_dt->Required) { ?>
				elm = this.getElements("x" + infix + "_promulgates_dt");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $help_add->promulgates_dt->caption(), $help_add->promulgates_dt->RequiredErrorMessage)) ?>");
			<?php } ?>

 
 

					
					 




			
			<?php if ($help_add->update_dt->Required) { ?>
				elm = this.getElements("x" + infix + "_update_dt");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $help_add->update_dt->caption(), $help_add->update_dt->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($help_add->review_1_download->Required) { ?>
				elm = this.getElements("x" + infix + "_review_1_download");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $help_add->review_1_download->caption(), $help_add->review_1_download->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_review_1_download");
				if (elm && !ew.checkInteger(elm.value))
					return this.onError(elm, "<?php echo JsEncode($help_add->review_1_download->errorMessage()) ?>");
			<?php if ($help_add->review_1->Required) { ?>
				elm = this.getElements("x" + infix + "_review_1");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $help_add->review_1->caption(), $help_add->review_1->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_review_1");
				if (elm && !ew.checkInteger(elm.value))
					return this.onError(elm, "<?php echo JsEncode($help_add->review_1->errorMessage()) ?>");
			<?php if ($help_add->review_2_download->Required) { ?>
				elm = this.getElements("x" + infix + "_review_2_download");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $help_add->review_2_download->caption(), $help_add->review_2_download->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_review_2_download");
				if (elm && !ew.checkInteger(elm.value))
					return this.onError(elm, "<?php echo JsEncode($help_add->review_2_download->errorMessage()) ?>");
			<?php if ($help_add->review_2->Required) { ?>
				elm = this.getElements("x" + infix + "_review_2");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $help_add->review_2->caption(), $help_add->review_2->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_review_2");
				if (elm && !ew.checkInteger(elm.value))
					return this.onError(elm, "<?php echo JsEncode($help_add->review_2->errorMessage()) ?>");
			<?php if ($help_add->estatus->Required) { ?>
				elm = this.getElements("x" + infix + "_estatus");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $help_add->estatus->caption(), $help_add->estatus->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($help_add->eusr->Required) { ?>
				elm = this.getElements("x" + infix + "_eusr");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $help_add->eusr->caption(), $help_add->eusr->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($help_add->edate->Required) { ?>
				elm = this.getElements("x" + infix + "_edate");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $help_add->edate->caption(), $help_add->edate->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_edate");
				if (elm && !ew.checkInteger(elm.value))
					return this.onError(elm, "<?php echo JsEncode($help_add->edate->errorMessage()) ?>");
			<?php if ($help_add->msgbox->Required) { ?>
				elm = this.getElements("x" + infix + "_msgbox");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $help_add->msgbox->caption(), $help_add->msgbox->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($help_add->sstatus->Required) { ?>
				elm = this.getElements("x" + infix + "_sstatus");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $help_add->sstatus->caption(), $help_add->sstatus->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($help_add->loocked->Required) { ?>
				elm = this.getElements("x" + infix + "_loocked");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $help_add->loocked->caption(), $help_add->loocked->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($help_add->archiv_actid->Required) { ?>
				elm = this.getElements("x" + infix + "_archiv_actid");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $help_add->archiv_actid->caption(), $help_add->archiv_actid->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($help_add->archiv_serial->Required) { ?>
				elm = this.getElements("x" + infix + "_archiv_serial");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $help_add->archiv_serial->caption(), $help_add->archiv_serial->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_archiv_serial");
				if (elm && !ew.checkInteger(elm.value))
					return this.onError(elm, "<?php echo JsEncode($help_add->archiv_serial->errorMessage()) ?>");
			<?php if ($help_add->versioon->Required) { ?>
				elm = this.getElements("x" + infix + "_versioon");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $help_add->versioon->caption(), $help_add->versioon->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($help_add->urdu_avlble->Required) { ?>
				elm = this.getElements("x" + infix + "_urdu_avlble");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $help_add->urdu_avlble->caption(), $help_add->urdu_avlble->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($help_add->serial_no->Required) { ?>
				elm = this.getElements("x" + infix + "_serial_no");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $help_add->serial_no->caption(), $help_add->serial_no->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_serial_no");
				if (elm && !ew.checkInteger(elm.value))
					return this.onError(elm, "<?php echo JsEncode($help_add->serial_no->errorMessage()) ?>");

				// Call Form_CustomValidate event
				if (!this.Form_CustomValidate(fobj))
					return false;
		}

		// Process detail forms
		var dfs = $fobj.find("input[name='detailpage']").get();
		for (var i = 0; i < dfs.length; i++) {
			var df = dfs[i], val = df.value;
			if (val && ew.forms[val])
				if (!ew.forms[val].validate())
					return false;
		}
		return true;
	}

	// Form_CustomValidate
	fhelpadd.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

		// Your custom validation code here, return false if invalid.
		return true;
	}

	// Use JavaScript validation or not
	fhelpadd.validateRequired = <?php echo Config("CLIENT_VALIDATE") ? "true" : "false" ?>;

	// Multi-Page
	fhelpadd.multiPage = new ew.MultiPage("fhelpadd");

	// Dynamic selection lists
	fhelpadd.lists["x_law_type"] = <?php echo $help_add->law_type->Lookup->toClientList($help_add) ?>;
	fhelpadd.lists["x_law_type"].options = <?php echo JsonEncode($help_add->law_type->options(FALSE, TRUE)) ?>;
	fhelpadd.lists["x_law_type_u"] = <?php echo $help_add->law_type_u->Lookup->toClientList($help_add) ?>;
	fhelpadd.lists["x_law_type_u"].options = <?php echo JsonEncode($help_add->law_type_u->options(FALSE, TRUE)) ?>;
	fhelpadd.lists["x_estatus"] = <?php echo $help_add->estatus->Lookup->toClientList($help_add) ?>;
	fhelpadd.lists["x_estatus"].options = <?php echo JsonEncode($help_add->estatus->options(FALSE, TRUE)) ?>;
	fhelpadd.lists["x_sstatus"] = <?php echo $help_add->sstatus->Lookup->toClientList($help_add) ?>;
	fhelpadd.lists["x_sstatus"].options = <?php echo JsonEncode($help_add->sstatus->options(FALSE, TRUE)) ?>;
	fhelpadd.lists["x_loocked"] = <?php echo $help_add->loocked->Lookup->toClientList($help_add) ?>;
	fhelpadd.lists["x_loocked"].options = <?php echo JsonEncode($help_add->loocked->options(FALSE, TRUE)) ?>;
	fhelpadd.lists["x_archiv_actid"] = <?php echo $help_add->archiv_actid->Lookup->toClientList($help_add) ?>;
	fhelpadd.lists["x_archiv_actid"].options = <?php echo JsonEncode($help_add->archiv_actid->lookupOptions()) ?>;
	fhelpadd.lists["x_urdu_avlble"] = <?php echo $help_add->urdu_avlble->Lookup->toClientList($help_add) ?>;
	fhelpadd.lists["x_urdu_avlble"].options = <?php echo JsonEncode($help_add->urdu_avlble->options(FALSE, TRUE)) ?>;
	loadjs.done("fhelpadd");
});
</script>
<script>
loadjs.ready("head", function() {

	// Client script
	// Write your client script here, no need to add script tags.

});
</script>
<?php $help_add->showPageHeader(); ?>
<?php
$help_add->showMessage();
?>
<form name="fhelpadd" id="fhelpadd" class="<?php echo $help_add->FormClassName ?>" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($Page->CheckToken) { ?>
<input type="hidden" name="<?php echo Config("TOKEN_NAME") ?>" value="<?php echo $Page->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="help">
<input type="hidden" name="action" id="action" value="insert">
<input type="hidden" name="modal" value="<?php echo (int)$help_add->IsModal ?>">
<div class="ew-multi-page"><!-- multi-page -->
<div class="ew-nav-tabs" id="help_add"><!-- multi-page tabs -->
	<ul class="<?php echo $help_add->MultiPages->navStyle() ?>">
		<li class="nav-item"><a class="nav-link<?php echo $help_add->MultiPages->pageStyle(1) ?>" href="#tab_help1" data-toggle="tab"><?php echo $help->pageCaption(1) ?></a></li>
		<li class="nav-item"><a class="nav-link<?php echo $help_add->MultiPages->pageStyle(2) ?>" href="#tab_help2" data-toggle="tab"><?php echo $help->pageCaption(2) ?></a></li>
	</ul>
	<div class="tab-content"><!-- multi-page tabs .tab-content -->
		<div class="tab-pane<?php echo $help_add->MultiPages->pageStyle(1) ?>" id="tab_help1"><!-- multi-page .tab-pane -->
<div class="ew-add-div"><!-- page* -->
<?php if ($help_add->ACTID_help->Visible) { // ACTID_help ?>
	<div id="r_ACTID_help" class="form-group row">
		<label id="elh_help_ACTID_help" for="x_ACTID_help" class="<?php echo $help_add->LeftColumnClass ?>"><?php echo $help_add->ACTID_help->caption() ?><?php echo $help_add->ACTID_help->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $help_add->RightColumnClass ?>"><div <?php echo $help_add->ACTID_help->cellAttributes() ?>>
<span id="el_help_ACTID_help">
<input type="text" data-table="help" data-field="x_ACTID_help" data-page="1" name="x_ACTID_help" id="x_ACTID_help" size="30" maxlength="11" placeholder="<?php echo HtmlEncode($help_add->ACTID_help->getPlaceHolder()) ?>" value="<?php echo $help_add->ACTID_help->EditValue ?>"<?php echo $help_add->ACTID_help->editAttributes() ?>>
</span>
<?php echo $help_add->ACTID_help->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($help_add->title_act_help->Visible) { // title_act_help ?>
	<div id="r_title_act_help" class="form-group row">
		<label id="elh_help_title_act_help" for="x_title_act_help" class="<?php echo $help_add->LeftColumnClass ?>"><?php echo $help_add->title_act_help->caption() ?><?php echo $help_add->title_act_help->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $help_add->RightColumnClass ?>"><div <?php echo $help_add->title_act_help->cellAttributes() ?>>
<span id="el_help_title_act_help">
<input type="text" data-table="help" data-field="x_title_act_help" data-page="1" name="x_title_act_help" id="x_title_act_help" size="30" maxlength="200" placeholder="<?php echo HtmlEncode($help_add->title_act_help->getPlaceHolder()) ?>" value="<?php echo $help_add->title_act_help->EditValue ?>"<?php echo $help_add->title_act_help->editAttributes() ?>>
</span>
<?php echo $help_add->title_act_help->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($help_add->title_act_help_u->Visible) { // title_act_help_u ?>
	<div id="r_title_act_help_u" class="form-group row">
		<label id="elh_help_title_act_help_u" for="x_title_act_help_u" class="<?php echo $help_add->LeftColumnClass ?>"><?php echo $help_add->title_act_help_u->caption() ?><?php echo $help_add->title_act_help_u->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $help_add->RightColumnClass ?>"><div <?php echo $help_add->title_act_help_u->cellAttributes() ?>>
<span id="el_help_title_act_help_u">
<textarea data-table="help" data-field="x_title_act_help_u" data-page="1" name="x_title_act_help_u" id="x_title_act_help_u" cols="35" rows="4" placeholder="<?php echo HtmlEncode($help_add->title_act_help_u->getPlaceHolder()) ?>"<?php echo $help_add->title_act_help_u->editAttributes() ?>><?php echo $help_add->title_act_help_u->EditValue ?></textarea>
</span>
<?php echo $help_add->title_act_help_u->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($help_add->act_roman_help->Visible) { // act_roman_help ?>
	<div id="r_act_roman_help" class="form-group row">
		<label id="elh_help_act_roman_help" for="x_act_roman_help" class="<?php echo $help_add->LeftColumnClass ?>"><?php echo $help_add->act_roman_help->caption() ?><?php echo $help_add->act_roman_help->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $help_add->RightColumnClass ?>"><div <?php echo $help_add->act_roman_help->cellAttributes() ?>>
<span id="el_help_act_roman_help">
<input type="text" data-table="help" data-field="x_act_roman_help" data-page="1" name="x_act_roman_help" id="x_act_roman_help" size="30" maxlength="200" placeholder="<?php echo HtmlEncode($help_add->act_roman_help->getPlaceHolder()) ?>" value="<?php echo $help_add->act_roman_help->EditValue ?>"<?php echo $help_add->act_roman_help->editAttributes() ?>>
</span>
<?php echo $help_add->act_roman_help->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($help_add->act_roman_help_u->Visible) { // act_roman_help_u ?>
	<div id="r_act_roman_help_u" class="form-group row">
		<label id="elh_help_act_roman_help_u" for="x_act_roman_help_u" class="<?php echo $help_add->LeftColumnClass ?>"><?php echo $help_add->act_roman_help_u->caption() ?><?php echo $help_add->act_roman_help_u->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $help_add->RightColumnClass ?>"><div <?php echo $help_add->act_roman_help_u->cellAttributes() ?>>
<span id="el_help_act_roman_help_u">
<input type="text" data-table="help" data-field="x_act_roman_help_u" data-page="1" name="x_act_roman_help_u" id="x_act_roman_help_u" placeholder="<?php echo HtmlEncode($help_add->act_roman_help_u->getPlaceHolder()) ?>" value="<?php echo $help_add->act_roman_help_u->EditValue ?>"<?php echo $help_add->act_roman_help_u->editAttributes() ?>>
</span>
<?php echo $help_add->act_roman_help_u->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($help_add->a1_volume_help->Visible) { // a1_volume_help ?>
	<div id="r_a1_volume_help" class="form-group row">
		<label id="elh_help_a1_volume_help" for="x_a1_volume_help" class="<?php echo $help_add->LeftColumnClass ?>"><?php echo $help_add->a1_volume_help->caption() ?><?php echo $help_add->a1_volume_help->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $help_add->RightColumnClass ?>"><div <?php echo $help_add->a1_volume_help->cellAttributes() ?>>
<span id="el_help_a1_volume_help">
<input type="text" data-table="help" data-field="x_a1_volume_help" data-page="1" name="x_a1_volume_help" id="x_a1_volume_help" size="30" maxlength="200" placeholder="<?php echo HtmlEncode($help_add->a1_volume_help->getPlaceHolder()) ?>" value="<?php echo $help_add->a1_volume_help->EditValue ?>"<?php echo $help_add->a1_volume_help->editAttributes() ?>>
</span>
<?php echo $help_add->a1_volume_help->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($help_add->Year_help->Visible) { // Year_help ?>
	<div id="r_Year_help" class="form-group row">
		<label id="elh_help_Year_help" for="x_Year_help" class="<?php echo $help_add->LeftColumnClass ?>"><?php echo $help_add->Year_help->caption() ?><?php echo $help_add->Year_help->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $help_add->RightColumnClass ?>"><div <?php echo $help_add->Year_help->cellAttributes() ?>>
<span id="el_help_Year_help">
<input type="text" data-table="help" data-field="x_Year_help" data-page="1" name="x_Year_help" id="x_Year_help" size="30" maxlength="11" placeholder="<?php echo HtmlEncode($help_add->Year_help->getPlaceHolder()) ?>" value="<?php echo $help_add->Year_help->EditValue ?>"<?php echo $help_add->Year_help->editAttributes() ?>>
</span>
<?php echo $help_add->Year_help->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($help_add->Year_help_u->Visible) { // Year_help_u ?>
	<div id="r_Year_help_u" class="form-group row">
		<label id="elh_help_Year_help_u" for="x_Year_help_u" class="<?php echo $help_add->LeftColumnClass ?>"><?php echo $help_add->Year_help_u->caption() ?><?php echo $help_add->Year_help_u->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $help_add->RightColumnClass ?>"><div <?php echo $help_add->Year_help_u->cellAttributes() ?>>
<span id="el_help_Year_help_u">
<input type="text" data-table="help" data-field="x_Year_help_u" data-page="1" name="x_Year_help_u" id="x_Year_help_u" placeholder="<?php echo HtmlEncode($help_add->Year_help_u->getPlaceHolder()) ?>" value="<?php echo $help_add->Year_help_u->EditValue ?>"<?php echo $help_add->Year_help_u->editAttributes() ?>>
</span>
<?php echo $help_add->Year_help_u->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($help_add->law_type->Visible) { // law_type ?>
	<div id="r_law_type" class="form-group row">
		<label id="elh_help_law_type" for="x_law_type" class="<?php echo $help_add->LeftColumnClass ?>"><?php echo $help_add->law_type->caption() ?><?php echo $help_add->law_type->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $help_add->RightColumnClass ?>"><div <?php echo $help_add->law_type->cellAttributes() ?>>
<span id="el_help_law_type">
<div class="input-group">
	<select class="custom-select ew-custom-select" data-table="help" data-field="x_law_type" data-page="1" data-value-separator="<?php echo $help_add->law_type->displayValueSeparatorAttribute() ?>" id="x_law_type" name="x_law_type"<?php echo $help_add->law_type->editAttributes() ?>>
			<?php echo $help_add->law_type->selectOptionListHtml("x_law_type") ?>
		</select>
</div>
</span>
<?php echo $help_add->law_type->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($help_add->law_type_u->Visible) { // law_type_u ?>
	<div id="r_law_type_u" class="form-group row">
		<label id="elh_help_law_type_u" for="x_law_type_u" class="<?php echo $help_add->LeftColumnClass ?>"><?php echo $help_add->law_type_u->caption() ?><?php echo $help_add->law_type_u->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $help_add->RightColumnClass ?>"><div <?php echo $help_add->law_type_u->cellAttributes() ?>>
<span id="el_help_law_type_u">
<div class="input-group">
	<select class="custom-select ew-custom-select" data-table="help" data-field="x_law_type_u" data-page="1" data-value-separator="<?php echo $help_add->law_type_u->displayValueSeparatorAttribute() ?>" id="x_law_type_u" name="x_law_type_u"<?php echo $help_add->law_type_u->editAttributes() ?>>
			<?php echo $help_add->law_type_u->selectOptionListHtml("x_law_type_u") ?>
		</select>
</div>
</span>
<?php echo $help_add->law_type_u->CustomMsg ?></div></div>
	</div>
<?php } ?>


				 


<?php if ($help_add->promulgate_dt->Visible) { // promulgate_dt ?>
	<div id="r_promulgate_dt" class="form-group row">
		<label id="elh_help_promulgate_dt" for="x_promulgate_dt" class="<?php echo $help_add->LeftColumnClass ?>"><?php echo $help_add->promulgate_dt->caption() ?><?php echo $help_add->promulgate_dt->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $help_add->RightColumnClass ?>"><div <?php echo $help_add->promulgate_dt->cellAttributes() ?>>
<span id="el_help_promulgate_dt">
<input type="text" data-table="help" data-field="x_promulgate_dt" data-page="1" name="x_promulgate_dt" id="x_promulgate_dt" size="30" maxlength="200" placeholder="<?php echo HtmlEncode($help_add->promulgate_dt->getPlaceHolder()) ?>" value="<?php echo $help_add->promulgate_dt->EditValue ?>"<?php echo $help_add->promulgate_dt->editAttributes() ?>>
</span>
<?php echo $help_add->promulgate_dt->CustomMsg ?></div></div>
	</div>
<?php } ?>

 


<?php if (@$help_add->promulgates_dt->Visible) { // promulgate_dt ?>
	<div id="r_promulgates_dt" class="form-group row">
		<label id="elh_help_promulgates_dt" for="x_promulgates_dt" class="<?php echo $help_add->LeftColumnClass ?>">Lapse Date: </label>
		<div class="<?php echo $help_add->RightColumnClass ?>"><div <?php echo $help_add->promulgates_dt->cellAttributes() ?>>
<span id="el_help_promulgates_dt">
<input type="text" data-table="help" data-field="x_promulgates_dt" data-page="1" name="x_promulgates_dt" id="x_promulgates_dt" size="30" maxlength="200" >
</span>
<?php echo $help_add->promulgates_dt->CustomMsg ?></div></div>
	</div>
<?php } ?>
				 


 


			 










<?php if ($help_add->update_dt->Visible) { // update_dt ?>
	<div id="r_update_dt" class="form-group row">
		<label id="elh_help_update_dt" for="x_update_dt" class="<?php echo $help_add->LeftColumnClass ?>"><?php echo $help_add->update_dt->caption() ?><?php echo $help_add->update_dt->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $help_add->RightColumnClass ?>"><div <?php echo $help_add->update_dt->cellAttributes() ?>>
<span id="el_help_update_dt">
<input type="text" data-table="help" data-field="x_update_dt" data-page="1" name="x_update_dt" id="x_update_dt" size="30" maxlength="200" placeholder="<?php echo HtmlEncode($help_add->update_dt->getPlaceHolder()) ?>" value="<?php echo $help_add->update_dt->EditValue ?>"<?php echo $help_add->update_dt->editAttributes() ?>>
</span>
<?php echo $help_add->update_dt->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($help_add->estatus->Visible) { // estatus ?>
	<div id="r_estatus" class="form-group row">
		<label id="elh_help_estatus" for="x_estatus" class="<?php echo $help_add->LeftColumnClass ?>"><?php echo $help_add->estatus->caption() ?><?php echo $help_add->estatus->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $help_add->RightColumnClass ?>"><div <?php echo $help_add->estatus->cellAttributes() ?>>
<span id="el_help_estatus">
<div class="input-group">
	<select class="custom-select ew-custom-select" data-table="help" data-field="x_estatus" data-page="1" data-value-separator="<?php echo $help_add->estatus->displayValueSeparatorAttribute() ?>" id="x_estatus" name="x_estatus"<?php echo $help_add->estatus->editAttributes() ?>>
			<?php echo $help_add->estatus->selectOptionListHtml("x_estatus") ?>
		</select>
</div>
</span>
<?php echo $help_add->estatus->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($help_add->sstatus->Visible) { // sstatus ?>
	<div id="r_sstatus" class="form-group row">
		<label id="elh_help_sstatus" for="x_sstatus" class="<?php echo $help_add->LeftColumnClass ?>"><?php echo $help_add->sstatus->caption() ?><?php echo $help_add->sstatus->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $help_add->RightColumnClass ?>"><div <?php echo $help_add->sstatus->cellAttributes() ?>>
<span id="el_help_sstatus">
<div class="input-group">
	<select class="custom-select ew-custom-select" data-table="help" data-field="x_sstatus" data-page="1" data-value-separator="<?php echo $help_add->sstatus->displayValueSeparatorAttribute() ?>" id="x_sstatus" name="x_sstatus"<?php echo $help_add->sstatus->editAttributes() ?>>
			<?php echo $help_add->sstatus->selectOptionListHtml("x_sstatus") ?>
		</select>
</div>
</span>
<?php echo $help_add->sstatus->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($help_add->loocked->Visible) { // loocked ?>
	<div id="r_loocked" class="form-group row">
		<label id="elh_help_loocked" class="<?php echo $help_add->LeftColumnClass ?>"><?php echo $help_add->loocked->caption() ?><?php echo $help_add->loocked->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $help_add->RightColumnClass ?>"><div <?php echo $help_add->loocked->cellAttributes() ?>>
<span id="el_help_loocked">
<div id="tp_x_loocked" class="ew-template"><input type="radio" class="custom-control-input" data-table="help" data-field="x_loocked" data-page="1" data-value-separator="<?php echo $help_add->loocked->displayValueSeparatorAttribute() ?>" name="x_loocked" id="x_loocked" value="{value}"<?php echo $help_add->loocked->editAttributes() ?>></div>
<div id="dsl_x_loocked" data-repeatcolumn="5" class="ew-item-list d-none"><div>
<?php echo $help_add->loocked->radioButtonListHtml(FALSE, "x_loocked", 1) ?>
</div></div>
</span>
<?php echo $help_add->loocked->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($help_add->archiv_actid->Visible) { // archiv_actid ?>
	<div id="r_archiv_actid" class="form-group row">
		<label id="elh_help_archiv_actid" for="x_archiv_actid" class="<?php echo $help_add->LeftColumnClass ?>"><?php echo $help_add->archiv_actid->caption() ?><?php echo $help_add->archiv_actid->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $help_add->RightColumnClass ?>"><div <?php echo $help_add->archiv_actid->cellAttributes() ?>>
<span id="el_help_archiv_actid">
<div class="input-group">
	<select class="custom-select ew-custom-select" data-table="help" data-field="x_archiv_actid" data-page="1" data-value-separator="<?php echo $help_add->archiv_actid->displayValueSeparatorAttribute() ?>" id="x_archiv_actid" name="x_archiv_actid"<?php echo $help_add->archiv_actid->editAttributes() ?>>
			<?php echo $help_add->archiv_actid->selectOptionListHtml("x_archiv_actid") ?>
		</select>
</div>
<?php echo $help_add->archiv_actid->Lookup->getParamTag($help_add, "p_x_archiv_actid") ?>
</span>
<?php echo $help_add->archiv_actid->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($help_add->versioon->Visible) { // versioon ?>
	<div id="r_versioon" class="form-group row">
		<label id="elh_help_versioon" for="x_versioon" class="<?php echo $help_add->LeftColumnClass ?>"><?php echo $help_add->versioon->caption() ?><?php echo $help_add->versioon->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $help_add->RightColumnClass ?>"><div <?php echo $help_add->versioon->cellAttributes() ?>>
<span id="el_help_versioon">
<input type="text" data-table="help" data-field="x_versioon" data-page="1" name="x_versioon" id="x_versioon" size="30" maxlength="200" placeholder="<?php echo HtmlEncode($help_add->versioon->getPlaceHolder()) ?>" value="<?php echo $help_add->versioon->EditValue ?>"<?php echo $help_add->versioon->editAttributes() ?>>
</span>
<?php echo $help_add->versioon->CustomMsg ?></div></div>
	</div>
<?php } ?>
</div><!-- /page* -->
		</div><!-- /multi-page .tab-pane -->
		<div class="tab-pane<?php echo $help_add->MultiPages->pageStyle(2) ?>" id="tab_help2"><!-- multi-page .tab-pane -->
<div class="ew-add-div"><!-- page* -->
<?php if ($help_add->law_content->Visible) { // law_content ?>
	<div id="r_law_content" class="form-group row">
		<label id="elh_help_law_content" class="<?php echo $help_add->LeftColumnClass ?>"><?php echo $help_add->law_content->caption() ?><?php echo $help_add->law_content->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $help_add->RightColumnClass ?>"><div <?php echo $help_add->law_content->cellAttributes() ?>>
<span id="el_help_law_content">
<?php $help_add->law_content->EditAttrs->appendClass("editor"); ?>
<textarea data-table="help" data-field="x_law_content" data-page="2" name="x_law_content" id="x_law_content" cols="35" rows="4" placeholder="<?php echo HtmlEncode($help_add->law_content->getPlaceHolder()) ?>"<?php echo $help_add->law_content->editAttributes() ?>><?php echo $help_add->law_content->EditValue ?></textarea>
<script>
loadjs.ready(["fhelpadd", "editor"], function() {
	ew.createEditor("fhelpadd", "x_law_content", 35, 4, <?php echo $help_add->law_content->ReadOnly || FALSE ? "true" : "false" ?>);
});
</script>
</span>
<?php echo $help_add->law_content->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($help_add->review_1_download->Visible) { // review_1_download ?>
	<div id="r_review_1_download" class="form-group row">
		<label id="elh_help_review_1_download" for="x_review_1_download" class="<?php echo $help_add->LeftColumnClass ?>"><?php echo $help_add->review_1_download->caption() ?><?php echo $help_add->review_1_download->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $help_add->RightColumnClass ?>"><div <?php echo $help_add->review_1_download->cellAttributes() ?>>
<span id="el_help_review_1_download">
<input type="text" data-table="help" data-field="x_review_1_download" data-page="2" name="x_review_1_download" id="x_review_1_download" size="30" maxlength="11" placeholder="<?php echo HtmlEncode($help_add->review_1_download->getPlaceHolder()) ?>" value="<?php echo $help_add->review_1_download->EditValue ?>"<?php echo $help_add->review_1_download->editAttributes() ?>>
</span>
<?php echo $help_add->review_1_download->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($help_add->review_1->Visible) { // review_1 ?>
	<div id="r_review_1" class="form-group row">
		<label id="elh_help_review_1" for="x_review_1" class="<?php echo $help_add->LeftColumnClass ?>"><?php echo $help_add->review_1->caption() ?><?php echo $help_add->review_1->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $help_add->RightColumnClass ?>"><div <?php echo $help_add->review_1->cellAttributes() ?>>
<span id="el_help_review_1">
<input type="text" data-table="help" data-field="x_review_1" data-page="2" name="x_review_1" id="x_review_1" size="30" maxlength="11" placeholder="<?php echo HtmlEncode($help_add->review_1->getPlaceHolder()) ?>" value="<?php echo $help_add->review_1->EditValue ?>"<?php echo $help_add->review_1->editAttributes() ?>>
</span>
<?php echo $help_add->review_1->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($help_add->review_2_download->Visible) { // review_2_download ?>
	<div id="r_review_2_download" class="form-group row">
		<label id="elh_help_review_2_download" for="x_review_2_download" class="<?php echo $help_add->LeftColumnClass ?>"><?php echo $help_add->review_2_download->caption() ?><?php echo $help_add->review_2_download->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $help_add->RightColumnClass ?>"><div <?php echo $help_add->review_2_download->cellAttributes() ?>>
<span id="el_help_review_2_download">
<input type="text" data-table="help" data-field="x_review_2_download" data-page="2" name="x_review_2_download" id="x_review_2_download" size="30" maxlength="11" placeholder="<?php echo HtmlEncode($help_add->review_2_download->getPlaceHolder()) ?>" value="<?php echo $help_add->review_2_download->EditValue ?>"<?php echo $help_add->review_2_download->editAttributes() ?>>
</span>
<?php echo $help_add->review_2_download->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($help_add->review_2->Visible) { // review_2 ?>
	<div id="r_review_2" class="form-group row">
		<label id="elh_help_review_2" for="x_review_2" class="<?php echo $help_add->LeftColumnClass ?>"><?php echo $help_add->review_2->caption() ?><?php echo $help_add->review_2->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $help_add->RightColumnClass ?>"><div <?php echo $help_add->review_2->cellAttributes() ?>>
<span id="el_help_review_2">
<input type="text" data-table="help" data-field="x_review_2" data-page="2" name="x_review_2" id="x_review_2" size="30" maxlength="11" placeholder="<?php echo HtmlEncode($help_add->review_2->getPlaceHolder()) ?>" value="<?php echo $help_add->review_2->EditValue ?>"<?php echo $help_add->review_2->editAttributes() ?>>
</span>
<?php echo $help_add->review_2->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($help_add->eusr->Visible) { // eusr ?>
	<div id="r_eusr" class="form-group row">
		<label id="elh_help_eusr" for="x_eusr" class="<?php echo $help_add->LeftColumnClass ?>"><?php echo $help_add->eusr->caption() ?><?php echo $help_add->eusr->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $help_add->RightColumnClass ?>"><div <?php echo $help_add->eusr->cellAttributes() ?>>
<span id="el_help_eusr">
<input type="text" data-table="help" data-field="x_eusr" data-page="2" name="x_eusr" id="x_eusr" size="30" maxlength="200" placeholder="<?php echo HtmlEncode($help_add->eusr->getPlaceHolder()) ?>" value="<?php echo $help_add->eusr->EditValue ?>"<?php echo $help_add->eusr->editAttributes() ?>>
</span>
<?php echo $help_add->eusr->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($help_add->edate->Visible) { // edate ?>
	<div id="r_edate" class="form-group row">
		<label id="elh_help_edate" for="x_edate" class="<?php echo $help_add->LeftColumnClass ?>"><?php echo $help_add->edate->caption() ?><?php echo $help_add->edate->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $help_add->RightColumnClass ?>"><div <?php echo $help_add->edate->cellAttributes() ?>>
<span id="el_help_edate">
<input type="text" data-table="help" data-field="x_edate" data-page="2" name="x_edate" id="x_edate" size="30" maxlength="11" placeholder="<?php echo HtmlEncode($help_add->edate->getPlaceHolder()) ?>" value="<?php echo $help_add->edate->EditValue ?>"<?php echo $help_add->edate->editAttributes() ?>>
</span>
<?php echo $help_add->edate->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($help_add->msgbox->Visible) { // msgbox ?>
	<div id="r_msgbox" class="form-group row">
		<label id="elh_help_msgbox" for="x_msgbox" class="<?php echo $help_add->LeftColumnClass ?>"><?php echo $help_add->msgbox->caption() ?><?php echo $help_add->msgbox->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $help_add->RightColumnClass ?>"><div <?php echo $help_add->msgbox->cellAttributes() ?>>
<span id="el_help_msgbox">
<textarea data-table="help" data-field="x_msgbox" data-page="2" name="x_msgbox" id="x_msgbox" cols="35" rows="4" placeholder="<?php echo HtmlEncode($help_add->msgbox->getPlaceHolder()) ?>"<?php echo $help_add->msgbox->editAttributes() ?>><?php echo $help_add->msgbox->EditValue ?></textarea>
</span>
<?php echo $help_add->msgbox->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($help_add->archiv_serial->Visible) { // archiv_serial ?>
	<div id="r_archiv_serial" class="form-group row">
		<label id="elh_help_archiv_serial" for="x_archiv_serial" class="<?php echo $help_add->LeftColumnClass ?>"><?php echo $help_add->archiv_serial->caption() ?><?php echo $help_add->archiv_serial->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $help_add->RightColumnClass ?>"><div <?php echo $help_add->archiv_serial->cellAttributes() ?>>
<span id="el_help_archiv_serial">
<input type="text" data-table="help" data-field="x_archiv_serial" data-page="2" name="x_archiv_serial" id="x_archiv_serial" size="30" maxlength="11" placeholder="<?php echo HtmlEncode($help_add->archiv_serial->getPlaceHolder()) ?>" value="<?php echo $help_add->archiv_serial->EditValue ?>"<?php echo $help_add->archiv_serial->editAttributes() ?>>
</span>
<?php echo $help_add->archiv_serial->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($help_add->urdu_avlble->Visible) { // urdu_avlble ?>
	<div id="r_urdu_avlble" class="form-group row">
		<label id="elh_help_urdu_avlble" class="<?php echo $help_add->LeftColumnClass ?>"><?php echo $help_add->urdu_avlble->caption() ?><?php echo $help_add->urdu_avlble->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $help_add->RightColumnClass ?>"><div <?php echo $help_add->urdu_avlble->cellAttributes() ?>>
<span id="el_help_urdu_avlble">
<div id="tp_x_urdu_avlble" class="ew-template"><input type="radio" class="custom-control-input" data-table="help" data-field="x_urdu_avlble" data-page="2" data-value-separator="<?php echo $help_add->urdu_avlble->displayValueSeparatorAttribute() ?>" name="x_urdu_avlble" id="x_urdu_avlble" value="{value}"<?php echo $help_add->urdu_avlble->editAttributes() ?>></div>
<div id="dsl_x_urdu_avlble" data-repeatcolumn="5" class="ew-item-list d-none"><div>
<?php echo $help_add->urdu_avlble->radioButtonListHtml(FALSE, "x_urdu_avlble", 2) ?>
</div></div>
</span>
<?php echo $help_add->urdu_avlble->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($help_add->serial_no->Visible) { // serial_no ?>
	<div id="r_serial_no" class="form-group row">
		<label id="elh_help_serial_no" for="x_serial_no" class="<?php echo $help_add->LeftColumnClass ?>"><?php echo $help_add->serial_no->caption() ?><?php echo $help_add->serial_no->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $help_add->RightColumnClass ?>"><div <?php echo $help_add->serial_no->cellAttributes() ?>>
<span id="el_help_serial_no">
<input type="text" data-table="help" data-field="x_serial_no" data-page="2" name="x_serial_no" id="x_serial_no" size="30" maxlength="11" placeholder="<?php echo HtmlEncode($help_add->serial_no->getPlaceHolder()) ?>" value="<?php echo $help_add->serial_no->EditValue ?>"<?php echo $help_add->serial_no->editAttributes() ?>>
</span>
<?php echo $help_add->serial_no->CustomMsg ?></div></div>
	</div>
<?php } ?>
</div><!-- /page* -->
		</div><!-- /multi-page .tab-pane -->
	</div><!-- /multi-page tabs .tab-content -->
</div><!-- /multi-page tabs -->
</div><!-- /multi-page -->
<?php if (!$help_add->IsModal) { ?>
<div class="form-group row"><!-- buttons .form-group -->
	<div class="<?php echo $help_add->OffsetColumnClass ?>"><!-- buttons offset -->
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?php echo $Language->phrase("AddBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?php echo $help_add->getReturnUrl() ?>"><?php echo $Language->phrase("CancelBtn") ?></button>
	</div><!-- /buttons offset -->
</div><!-- /buttons .form-group -->
<?php } ?>
</form>
<?php
$help_add->showPageFooter();
if (Config("DEBUG"))
	echo GetDebugMessage();
?>
<script>
loadjs.ready("load", function() {

	// Startup script
	// Write your table-specific startup script here
	// console.log("page loaded");

});
</script>
<?php include_once "footer.php"; ?>
<?php
$help_add->terminate();
?>