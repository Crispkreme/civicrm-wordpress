<?php /* Smarty version 2.6.31, created on 2022-12-02 15:51:51
         compiled from CRM/UF/Form/Block.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/UF/Form/Block.tpl', 1, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if (! empty ( $this->_tpl_vars['fields'] )): ?>
  <?php echo ''; ?><?php if ($this->_tpl_vars['help_pre'] && $this->_tpl_vars['action'] != 4): ?><?php echo '<div class="messages help">'; ?><?php echo $this->_tpl_vars['help_pre']; ?><?php echo '</div>'; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('zeroField', 'Initial Non Existent Fieldset'); ?><?php echo ''; ?><?php $this->assign('fieldset', $this->_tpl_vars['zeroField']); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/UF/Form/Fields.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php if ($this->_tpl_vars['field']['groupHelpPost'] && $this->_tpl_vars['action'] != 4 && $this->_tpl_vars['action'] != 1028): ?><?php echo '<div class="messages help">'; ?><?php echo $this->_tpl_vars['field']['groupHelpPost']; ?><?php echo '</div>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['mode'] == 4): ?><?php echo '<div class="crm-submit-buttons">'; ?><?php echo $this->_tpl_vars['form']['buttons']['html']; ?><?php echo '</div>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['mode'] != 8 && $this->_tpl_vars['action'] != 1028 && ! $this->_tpl_vars['hideFieldset']): ?><?php echo '</fieldset>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['help_post'] && $this->_tpl_vars['action'] != 4): ?><?php echo '<br /><div class="messages help">'; ?><?php echo $this->_tpl_vars['help_post']; ?><?php echo '</div>'; ?><?php endif; ?><?php echo ''; ?>


<?php endif; ?> 
<?php echo '
<script type="text/javascript">
  CRM.$(function($) {
    $(\'#selector tr:even\').addClass(\'odd-row\');
    $(\'#selector tr:odd \').addClass(\'even-row\');
  });
</script>
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>