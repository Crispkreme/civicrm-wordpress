<?php /* Smarty version 2.6.31, created on 2022-12-02 15:51:51
         compiled from CRM/Price/Form/Calculate.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Price/Form/Calculate.tpl', 1, false),array('block', 'ts', 'CRM/Price/Form/Calculate.tpl', 16, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php $this->assign('hideTotal', $this->_tpl_vars['quickConfig']+$this->_tpl_vars['noCalcValueDisplay']); ?>

<div id="pricesetTotal" class="crm-section section-pricesetTotal">
  <div id="pricelabel" class="label <?php if ($this->_tpl_vars['hideTotal']): ?>hiddenElement<?php endif; ?>">
    <?php if (( $this->_tpl_vars['extends'] == 'Contribution' ) || ( $this->_tpl_vars['extends'] == 'Membership' )): ?>
      <span id='amount_sum_label'><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
    <?php else: ?>
      <?php if ($this->_tpl_vars['isAdditionalParticipants']): ?>
        <span id='amount_sum_label'><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total for this participant<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
      <?php else: ?>
        <span id='amount_sum_label'><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
      <?php endif; ?>
    <?php endif; ?>
  </div>
  <div class="content calc-value" <?php if ($this->_tpl_vars['hideTotal']): ?>style="display:none;"<?php endif; ?> id="pricevalue"></div>
</div>

<script type="text/javascript">
<?php echo '

var thousandMarker = \''; ?>
<?php echo $this->_tpl_vars['config']->monetaryThousandSeparator; ?>
<?php echo '\';
var separator      = \''; ?>
<?php echo $this->_tpl_vars['config']->monetaryDecimalPoint; ?>
<?php echo '\';
var symbol         = \''; ?>
<?php echo $this->_tpl_vars['currencySymbol']; ?>
<?php echo '\';
// moneyFormat is part of a temporary fix. it should
// not be expected to be present in future versions
// see https://github.com/civicrm/civicrm-core/pull/19151

var moneyFormat    = \''; ?>
<?php echo $this->_tpl_vars['moneyFormat']; ?>
<?php echo '\';
var optionSep      = \'|\';

// Recalculate the total fees based on user selection
cj("#priceset [price]").each(function () {
  var elementType = cj(this).attr(\'type\');
  if (this.tagName == \'SELECT\') {
    elementType = \'select-one\';
  }

  switch(elementType) {
    case \'checkbox\':
      cj(this).click(function(){
        calculateCheckboxLineItemValue(this);
        display(calculateTotalFee());
      });
      calculateCheckboxLineItemValue(this);
      break;

    case \'radio\':
      cj(this).click( function(){
        calculateRadioLineItemValue(this);
        display(calculateTotalFee());
      });
      calculateRadioLineItemValue(this);
      break;

    case \'text\':
      cj(this).bind( \'keyup\', function() {
        calculateText(this);
      }).bind( \'blur\' , function() {
        calculateText(this);
      });
      //default calculation of element.
      calculateText(this);
      break;

    case \'select-one\':
      calculateSelectLineItemValue(this);

      cj(this).change(function() {
        calculateSelectLineItemValue(this);
        display(calculateTotalFee());
      });
      break;
  }

  display(calculateTotalFee());
});

/**
 * Calculate the value of the line item for a radio value.
 */
function calculateCheckboxLineItemValue(priceElement) {
  eval( \'var option = \' + cj(priceElement).attr(\'price\') ) ;
  optionPart = option[1].split(optionSep);
  price = parseFloat(0);
  if (cj(priceElement).prop(\'checked\')) {
    price = parseFloat(optionPart[0]);
  }
  cj(priceElement).data(\'line_raw_total\', price);
}

/**
 * Calculate the value of the line item for a radio value.
 */
function calculateRadioLineItemValue(priceElement) {
  eval( \'var option = \' + cj(priceElement).attr(\'price\') );
  optionPart = option[1].split(optionSep);
  var lineTotal = parseFloat(optionPart[0]);
  cj(priceElement).data(\'line_raw_total\', lineTotal);
  var radionGroupName = cj(priceElement).attr("name");
  // Reset all unchecked options to having a data value of 0.
  cj(\'input[name=\' + radionGroupName + \']:radio:unchecked\').each(
    function () {
      cj(this).data(\'line_raw_total\', 0);
    }
  );
}

/**
 * Calculate the value of the line item for a select value.
 */
function calculateSelectLineItemValue(priceElement) {
  eval( \'var selectedText = \' + cj(priceElement).attr(\'price\') );
  var price = parseFloat(\'0\');
  var option = cj(priceElement).val();
  if (option) {
    optionPart = selectedText[option].split(optionSep);
    price   = parseFloat(optionPart[0]);
  }
  cj(priceElement).data(\'line_raw_total\', price);
}

/**
 * Calculate the value of the line item for a text box.
 */
function calculateText(priceElement) {
  //CRM-16034 - comma acts as decimal in price set text pricing
  //CRM-19937 - dollar sign easy mistake to make by users.
  var textval = parseFloat(cj(priceElement).val().replace(thousandMarker, \'\').replace(symbol, \'\'));

  if (isNaN(textval)) {
    textval = parseFloat(0);
  }
  eval(\'var option = \'+ cj(priceElement).attr(\'price\'));
  optionPart = option[1].split(optionSep);
  addprice = parseFloat(optionPart[0]);
  var curval  = textval * addprice;
  cj(priceElement).data(\'line_raw_total\', curval);
  display(calculateTotalFee());
}

/**
 * Calculate the total fee for the visible priceset.
 */
function calculateTotalFee() {
  var totalFee = 0;
  cj("#priceset [price]").each(function () {
    totalFee = totalFee + cj(this).data(\'line_raw_total\');
  });
  return totalFee;
}

/**
 * Display calculated amount.
 */
function display(totalfee) {
  // totalfee is monetary, round it to 2 decimal points so it can
  // go as a float - CRM-13491
  totalfee = Math.round(totalfee*100)/100;
  // dev/core#1019 Use the moneyFormat assigned to the template as an interim fix
  // to support forms using a currency other that the site default. Also make sure to
  // support various currency formatting options,
  // temporary measure - pending
  // our preferred fix.
  // see https://github.com/civicrm/civicrm-core/pull/19151
  var totalFormattedFee = CRM.formatMoney(totalfee, false, moneyFormat);
  cj(\'#pricevalue\').html(totalFormattedFee);

  cj(\'#total_amount\').val( totalfee );
  cj(\'#pricevalue\').data(\'raw-total\', totalfee).trigger(\'change\');

  if (totalfee < 0) {
    cj(\'table#pricelabel\').addClass(\'disabled\');
  }
  else {
    cj(\'table#pricelabel\').removeClass(\'disabled\');
  }

  if (typeof skipPaymentMethod == \'function\') {
    // Advice to anyone who, like me, feels hatred towards this if construct ... if you remove the if you
    // get an error on participant 2 of a event that requires approval & permits multiple registrants.
    skipPaymentMethod();
  }
}

'; ?>

</script>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>