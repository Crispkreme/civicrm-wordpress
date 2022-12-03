<?php /* Smarty version 2.6.31, created on 2022-12-02 15:51:50
         compiled from CRM%5CContribute%5CForm%5CContribution%5CMain.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM\\Contribute\\Form\\Contribution\\Main.tpl', 1, false),array('block', 'ts', 'CRM\\Contribute\\Form\\Contribution\\Main.tpl', 54, false),array('block', 'crmButton', 'CRM\\Contribute\\Form\\Contribution\\Main.tpl', 55, false),array('block', 'crmRegion', 'CRM\\Contribute\\Form\\Contribution\\Main.tpl', 62, false),array('function', 'crmURL', 'CRM\\Contribute\\Form\\Contribution\\Main.tpl', 65, false),array('modifier', 'crmMoney', 'CRM\\Contribute\\Form\\Contribution\\Main.tpl', 93, false),array('modifier', 'crmDate', 'CRM\\Contribute\\Form\\Contribution\\Main.tpl', 130, false),array('modifier', 'count', 'CRM\\Contribute\\Form\\Contribution\\Main.tpl', 195, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['snippet'] && ! empty ( $this->_tpl_vars['isOnBehalfCallback'] ) && ! $this->_tpl_vars['ccid']): ?>
  <div class="crm-public-form-item crm-section">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Form/Contribution/OnBehalfOf.tpl", 'smarty_include_vars' => array('context' => "front-end")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </div>
<?php else: ?>
<?php echo '
  <script type="text/javascript">

    // Putting these functions directly in template so they are available for standalone forms
    function useAmountOther() {
      var priceset = '; ?>
<?php if ($this->_tpl_vars['contriPriceset']): ?>'<?php echo $this->_tpl_vars['contriPriceset']; ?>
'<?php else: ?>0<?php endif; ?><?php echo ';

      for( i=0; i < document.Main.elements.length; i++ ) {
        element = document.Main.elements[i];
        if ( element.type == \'radio\' && element.name == priceset ) {
          if (element.value == \'0\' ) {
            element.click();
          }
          else {
            element.checked = false;
          }
        }
      }
    }

    function clearAmountOther() {
      var priceset = '; ?>
<?php if ($this->_tpl_vars['priceset']): ?>'#<?php echo $this->_tpl_vars['priceset']; ?>
'<?php else: ?>0<?php endif; ?><?php echo '
      if( priceset ){
        cj(priceset).val(\'\');
        cj(priceset).blur();
      }
      if (document.Main.amount_other == null) return; // other_amt field not present; do nothing
      document.Main.amount_other.value = "";
    }

  </script>
'; ?>


  <?php if ($this->_tpl_vars['action'] & 1024): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Form/Contribution/PreviewHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php endif; ?>

  <?php if (call_user_func ( array ( 'CRM_Core_Permission' , 'check' ) , 'administer CiviCRM' )): ?>
    <?php ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Configure Contribution Page<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('buttonTitle', ob_get_contents());ob_end_clean(); ?>
    <?php $this->_tag_stack[] = array('crmButton', array('target' => '_blank','p' => "civicrm/admin/contribute/settings",'q' => "reset=1&action=update&id=".($this->_tpl_vars['contributionPageID']),'fb' => 1,'title' => ($this->_tpl_vars['buttonTitle']),'icon' => "fa-wrench")); $_block_repeat=true;smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Configure<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <div class='clear'></div>
  <?php endif; ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/TrackingFields.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <div class="crm-contribution-page-id-<?php echo $this->_tpl_vars['contributionPageID']; ?>
 crm-block crm-contribution-main-form-block" data-page-id="<?php echo $this->_tpl_vars['contributionPageID']; ?>
" data-page-template="main">

    <?php $this->_tag_stack[] = array('crmRegion', array('name' => 'contribution-main-not-you-block')); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <?php if ($this->_tpl_vars['contact_id'] && ! $this->_tpl_vars['ccid']): ?>
      <div class="messages status no-popup crm-not-you-message">
        <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['display_name'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Welcome %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>. (<a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contribute/transact','q' => "cid=0&reset=1&id=".($this->_tpl_vars['contributionPageID'])), $this);?>
" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click here to do this for a different person.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['display_name'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Not %1, or want to do this for a different person<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>?)
      </div>
    <?php endif; ?>
    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

    <div id="intro_text" class="crm-public-form-item crm-section intro_text-section">
      <?php echo $this->_tpl_vars['intro_text']; ?>

    </div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/cidzero.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <?php if ($this->_tpl_vars['islifetime'] || $this->_tpl_vars['ispricelifetime']): ?>
      <div class="help"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You have a current Lifetime Membership which does not need to be renewed.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
    <?php endif; ?>

    <?php if (! empty ( $this->_tpl_vars['useForMember'] ) && ! $this->_tpl_vars['ccid']): ?>
      <div class="crm-public-form-item crm-section">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Form/Contribution/MembershipBlock.tpl", 'smarty_include_vars' => array('context' => 'makeContribution')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      </div>
    <?php elseif (! empty ( $this->_tpl_vars['ccid'] )): ?>
      <?php if ($this->_tpl_vars['lineItem'] && $this->_tpl_vars['priceSetID'] && ! $this->_tpl_vars['is_quick_config']): ?>
        <div class="header-dark">
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contribution Information<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php if ($this->_tpl_vars['display_name']): ?> &ndash; <?php echo $this->_tpl_vars['display_name']; ?>
<?php endif; ?>
        </div>
        <?php $this->assign('totalAmount', $this->_tpl_vars['pendingAmount']); ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Price/Page/LineItem.tpl", 'smarty_include_vars' => array('context' => 'Contribution')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      <?php else: ?>
        <div class="display-block">
          <td class="label"><?php echo $this->_tpl_vars['form']['total_amount']['label']; ?>
</td>
          <td><span><?php echo $this->_tpl_vars['form']['total_amount']['html']; ?>
&nbsp;&nbsp;<?php if ($this->_tpl_vars['taxAmount']): ?><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['taxTerm'],'2' => ((is_array($_tmp=$this->_tpl_vars['taxAmount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)))); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>(includes %1 of %2)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?></span></td>
        </div>
      <?php endif; ?>
    <?php else: ?>
      <div id="priceset-div">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Price/Form/PriceSet.tpl", 'smarty_include_vars' => array('extends' => 'Contribution')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      </div>
    <?php endif; ?>

    <?php if (! $this->_tpl_vars['ccid']): ?>
      <?php $this->_tag_stack[] = array('crmRegion', array('name' => 'contribution-main-pledge-block')); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
      <?php if ($this->_tpl_vars['pledgeBlock']): ?>
        <?php if ($this->_tpl_vars['is_pledge_payment']): ?>
          <div class="crm-public-form-item crm-section <?php echo $this->_tpl_vars['form']['pledge_amount']['name']; ?>
-section">
            <div class="label"><?php echo $this->_tpl_vars['form']['pledge_amount']['label']; ?>
&nbsp;<span class="crm-marker">*</span></div>
            <div class="content"><?php echo $this->_tpl_vars['form']['pledge_amount']['html']; ?>
</div>
            <div class="clear"></div>
          </div>
        <?php else: ?>
          <div class="crm-public-form-item crm-section <?php echo $this->_tpl_vars['form']['is_pledge']['name']; ?>
-section">
            <div class="label">&nbsp;</div>
            <div class="content">
              <?php echo $this->_tpl_vars['form']['is_pledge']['html']; ?>
&nbsp;
              <?php if ($this->_tpl_vars['is_pledge_interval']): ?>
                <?php echo $this->_tpl_vars['form']['pledge_frequency_interval']['html']; ?>
&nbsp;
              <?php endif; ?>
              <?php echo $this->_tpl_vars['form']['pledge_frequency_unit']['html']; ?>
<span id="pledge_installments_num">&nbsp;<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>for<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>&nbsp;<?php echo $this->_tpl_vars['form']['pledge_installments']['html']; ?>
&nbsp;<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>installments.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
            </div>
            <div class="clear"></div>
            <?php if ($this->_tpl_vars['start_date_editable']): ?>
              <?php if ($this->_tpl_vars['is_date']): ?>
                <div class="label"><?php echo $this->_tpl_vars['form']['start_date']['label']; ?>
</div><div class="content"><?php echo $this->_tpl_vars['form']['start_date']['html']; ?>
</div>
              <?php else: ?>
                <div class="label"><?php echo $this->_tpl_vars['form']['start_date']['label']; ?>
</div><div class="content"><?php echo $this->_tpl_vars['form']['start_date']['html']; ?>
</div>
              <?php endif; ?>
            <?php else: ?>
              <div class="label"><?php echo $this->_tpl_vars['form']['start_date']['label']; ?>
</div>
              <div class="content"><?php echo ((is_array($_tmp=$this->_tpl_vars['start_date_display'])) ? $this->_run_mod_handler('crmDate', true, $_tmp, '%b %e, %Y') : smarty_modifier_crmDate($_tmp, '%b %e, %Y')); ?>
</div>
            <?php endif; ?>
            <div class="clear"></div>
          </div>
        <?php endif; ?>
      <?php endif; ?>
      <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

      <?php if (! empty ( $this->_tpl_vars['form']['is_recur'] )): ?>
        <div class="crm-public-form-item crm-section <?php echo $this->_tpl_vars['form']['is_recur']['name']; ?>
-section">
          <div class="label">&nbsp;</div>
          <div class="content">
            <?php echo $this->_tpl_vars['form']['is_recur']['html']; ?>
 <?php echo $this->_tpl_vars['form']['is_recur']['label']; ?>

            <?php if ($this->_tpl_vars['is_recur_interval']): ?>
              <?php echo $this->_tpl_vars['form']['frequency_interval']['html']; ?>

            <?php endif; ?>
            <?php if (! $this->_tpl_vars['all_text_recur']): ?>
              <?php if ($this->_tpl_vars['one_frequency_unit']): ?>
                <?php echo $this->_tpl_vars['form']['frequency_interval']['label']; ?>

              <?php else: ?>
                <?php echo $this->_tpl_vars['form']['frequency_unit']['html']; ?>

              <?php endif; ?>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['is_recur_installments']): ?>
              <span id="recur_installments_num">
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>for<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo $this->_tpl_vars['form']['installments']['html']; ?>
 <?php echo $this->_tpl_vars['form']['installments']['label']; ?>

          </span>
            <?php endif; ?>
            <div id="recurHelp" class="description">
              <?php echo $this->_tpl_vars['recurringHelpText']; ?>

            </div>
          </div>
          <div class="clear"></div>
        </div>
      <?php endif; ?>
      <?php if ($this->_tpl_vars['pcpSupporterText']): ?>
        <div class="crm-public-form-item crm-section pcpSupporterText-section">
          <div class="label">&nbsp;</div>
          <div class="content"><?php echo $this->_tpl_vars['pcpSupporterText']; ?>
</div>
          <div class="clear"></div>
        </div>
      <?php endif; ?>
      <?php if ($this->_tpl_vars['showMainEmail']): ?>
        <?php $this->assign('n', "email-".($this->_tpl_vars['bltID'])); ?>
        <div class="crm-public-form-item crm-section <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['name']; ?>
-section">
          <div class="label"><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['label']; ?>
</div>
          <div class="content">
            <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['html']; ?>

          </div>
          <div class="clear"></div>
        </div>
      <?php endif; ?>

      <div id='onBehalfOfOrg' class="crm-public-form-item crm-section">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Form/Contribution/OnBehalfOf.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      </div>

            <div class="crm-public-form-item crm-section cms_user-section">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/CMSUser.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      </div>
      <div class="crm-public-form-item crm-section premium_block-section">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Form/Contribution/PremiumBlock.tpl", 'smarty_include_vars' => array('context' => 'makeContribution')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      </div>

      <?php if ($this->_tpl_vars['honoreeProfileFields'] && count($this->_tpl_vars['honoreeProfileFields'])): ?>
        <fieldset class="crm-public-form-item crm-group honor_block-group">
          <?php $this->_tag_stack[] = array('crmRegion', array('name' => "contribution-soft-credit-block")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
            <legend><?php echo $this->_tpl_vars['honor_block_title']; ?>
</legend>
            <div class="crm-public-form-item crm-section honor_block_text-section">
              <?php echo $this->_tpl_vars['honor_block_text']; ?>

            </div>
          <?php if (! empty ( $this->_tpl_vars['form']['soft_credit_type_id']['html'] )): ?>
            <div class="crm-public-form-item crm-section <?php echo $this->_tpl_vars['form']['soft_credit_type_id']['name']; ?>
-section">
              <div class="content" >
                <?php echo $this->_tpl_vars['form']['soft_credit_type_id']['html']; ?>

                <div class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select an option to reveal honoree information fields.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
              </div>
            </div>
          <?php endif; ?>
          <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          <div id="honorType" class="honoree-name-email-section">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/UF/Form/Block.tpl", 'smarty_include_vars' => array('fields' => $this->_tpl_vars['honoreeProfileFields'],'mode' => 8,'prefix' => 'honor')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          </div>
        </fieldset>
      <?php endif; ?>

      <div class="crm-public-form-item crm-group custom_pre_profile-group">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/UF/Form/Block.tpl", 'smarty_include_vars' => array('fields' => $this->_tpl_vars['customPre'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      </div>

      <?php if ($this->_tpl_vars['isHonor']): ?>
        <fieldset class="crm-public-form-item crm-group pcp-group">
          <div class="crm-public-form-item crm-section pcp-section">
            <div class="crm-public-form-item crm-section display_in_roll-section">
              <div class="content">
                <?php echo $this->_tpl_vars['form']['pcp_display_in_roll']['html']; ?>
 &nbsp;
                <?php echo $this->_tpl_vars['form']['pcp_display_in_roll']['label']; ?>

              </div>
              <div class="clear"></div>
            </div>
            <div id="nameID" class="crm-public-form-item crm-section is_anonymous-section">
              <div class="content">
                <?php echo $this->_tpl_vars['form']['pcp_is_anonymous']['html']; ?>

              </div>
              <div class="clear"></div>
            </div>
            <div id="nickID" class="crm-public-form-item crm-section pcp_roll_nickname-section">
              <div class="label"><?php echo $this->_tpl_vars['form']['pcp_roll_nickname']['label']; ?>
</div>
              <div class="content"><?php echo $this->_tpl_vars['form']['pcp_roll_nickname']['html']; ?>

                <div class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Enter the name you want listed with this contribution. You can use a nick name like 'The Jones Family' or 'Sarah and Sam'.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
              </div>
              <div class="clear"></div>
            </div>
            <div id="personalNoteID" class="crm-public-form-item crm-section pcp_personal_note-section">
              <div class="label"><?php echo $this->_tpl_vars['form']['pcp_personal_note']['label']; ?>
</div>
              <div class="content">
                <?php echo $this->_tpl_vars['form']['pcp_personal_note']['html']; ?>

                <div class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Enter a message to accompany this contribution.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </fieldset>
      <?php endif; ?>

          <?php endif; ?>

    <?php if (! empty ( $this->_tpl_vars['form']['payment_processor_id']['label'] )): ?>
            <fieldset class="crm-public-form-item crm-group payment_options-group" style="display:none;">
        <legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Payment Options<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
        <div class="crm-public-form-item crm-section payment_processor-section">
          <div class="label"><?php echo $this->_tpl_vars['form']['payment_processor_id']['label']; ?>
</div>
          <div class="content"><?php echo $this->_tpl_vars['form']['payment_processor_id']['html']; ?>
</div>
          <div class="clear"></div>
        </div>
      </fieldset>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['is_pay_later']): ?>
      <fieldset class="crm-public-form-item crm-group pay_later-group">
        <legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Payment Options<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
        <div class="crm-public-form-item crm-section pay_later_receipt-section">
          <div class="label">&nbsp;</div>
          <div class="content">
            [x] <?php echo $this->_tpl_vars['pay_later_text']; ?>

          </div>
          <div class="clear"></div>
        </div>
      </fieldset>
    <?php endif; ?>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Core/BillingBlockWrapper.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <div class="crm-public-form-item crm-group custom_post_profile-group">
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/UF/Form/Block.tpl", 'smarty_include_vars' => array('fields' => $this->_tpl_vars['customPost'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>

    <?php if ($this->_tpl_vars['is_monetary'] && $this->_tpl_vars['form']['bank_account_number']): ?>
      <div id="payment_notice">
        <fieldset class="crm-public-form-item crm-group payment_notice-group">
          <legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Agreement<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Your account data will be used to charge your bank account via direct debit. While submitting this form you agree to the charging of your bank account via direct debit.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </fieldset>
      </div>
    <?php endif; ?>

    <div id="crm-submit-buttons" class="crm-submit-buttons">
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
    <?php if ($this->_tpl_vars['footer_text']): ?>
      <div id="footer_text" class="crm-public-form-item crm-section contribution_footer_text-section">
        <p><?php echo $this->_tpl_vars['footer_text']; ?>
</p>
      </div>
    <?php endif; ?>
  </div>
  <script type="text/javascript">
    <?php if ($this->_tpl_vars['isHonor']): ?>
    pcpAnonymous();
    <?php endif; ?>

    <?php echo '

    cj(\'input[name="soft_credit_type_id"]\').on(\'change\', function() {
      enableHonorType();
    });

    function enableHonorType() {
      var selectedValue = cj(\'input[name="soft_credit_type_id"]:checked\');
      if ( selectedValue.val() > 0) {
        cj(\'#honorType\').show();
      }
      else {
        cj(\'#honorType\').hide();
      }
    }

    cj(\'input[id="is_recur"]\').on(\'change\', function() {
      toggleRecur();
    });

    function toggleRecur() {
      var isRecur = cj(\'input[id="is_recur"]:checked\');
      var allowAutoRenew = '; ?>
'<?php echo $this->_tpl_vars['allowAutoRenewMembership']; ?>
'<?php echo ';
      var quickConfig = '; ?>
<?php echo $this->_tpl_vars['quickConfig']; ?>
<?php echo ';
      if (allowAutoRenew && cj("#auto_renew") && quickConfig) {
        showHideAutoRenew(null);
      }

      var frequencyUnit = cj(\'#frequency_unit\');
      var frequencyInerval = cj(\'#frequency_interval\');
      var installments = cj(\'#installments\');
      isDisabled = false;

      if (isRecur.val() > 0) {
        cj(\'#recurHelp\').show();
        frequencyUnit.prop(\'disabled\', false).addClass(\'required\');
        frequencyInerval.prop(\'disabled\', false).addClass(\'required\');
        installments.prop(\'disabled\', false);
        cj(\'#amount_sum_label\').text(\''; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Regular Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '\');
      }
      else {
        cj(\'#recurHelp\').hide();
        frequencyUnit.prop(\'disabled\', true).removeClass(\'required\');
        frequencyInerval.prop(\'disabled\', true).removeClass(\'required\');
        installments.prop(\'disabled\', true);
        cj(\'#amount_sum_label\').text(\''; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '\');
      }
    }

    function pcpAnonymous() {
      // clear nickname field if anonymous is true
      if (document.getElementsByName("pcp_is_anonymous")[1].checked) {
        document.getElementById(\'pcp_roll_nickname\').value = \'\';
      }
      if (!document.getElementsByName("pcp_display_in_roll")[0].checked) {
        cj(\'#nickID\').hide();
        cj(\'#nameID\').hide();
        cj(\'#personalNoteID\').hide();
      }
      else {
        if (document.getElementsByName("pcp_is_anonymous")[0].checked) {
          cj(\'#nameID\').show();
          cj(\'#nickID\').show();
          cj(\'#personalNoteID\').show();
        }
        else {
          cj(\'#nameID\').show();
          cj(\'#nickID\').hide();
          cj(\'#personalNoteID\').hide();
        }
      }
    }

    CRM.$(function($) {
      enableHonorType();
      toggleRecur();
      skipPaymentMethod();
    });

    CRM.$(function($) {
      // highlight price sets
      function updatePriceSetHighlight() {
        $(\'#priceset .price-set-row span\').removeClass(\'highlight\');
        $(\'#priceset .price-set-row input:checked\').parent().addClass(\'highlight\');
      }
      $(\'#priceset input[type="radio"]\').change(updatePriceSetHighlight);
      updatePriceSetHighlight();

      // Update pledge contribution amount when pledge checkboxes change
      $("input[name^=\'pledge_amount\']").on(\'change\', function() {
        var total = 0;
        $("input[name^=\'pledge_amount\']:checked").each(function() {
          total += Number($(this).attr(\'amount\'));
        });
        $("input[name^=\'price_\']").val(total.toFixed(2));
      });
    });
    '; ?>

  </script>
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Form/validate.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>