<?php /* Smarty version 2.6.31, created on 2022-12-02 15:51:53
         compiled from CRM/Form/validate.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Form/validate.tpl', 1, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if (empty ( $this->_tpl_vars['crm_form_validate_included'] ) && ( ( isset ( $_GET['snippet'] ) && $_GET['snippet'] != 'json' ) || ! isset ( $_GET['snippet'] ) ) && ! empty ( $this->_tpl_vars['form'] ) && ! empty ( $this->_tpl_vars['form']['formClass'] )): ?>
  <?php $this->assign('crm_form_validate_included', 1); ?>
  <?php echo '
  <script type="text/javascript">
    CRM.$(function($) {
      $("form.'; ?>
<?php echo $this->_tpl_vars['form']['formClass']; ?>
<?php echo '").crmValidate();
    });
  </script>
  '; ?>

<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>