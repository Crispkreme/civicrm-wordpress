<?php /* Smarty version 2.6.31, created on 2022-12-02 13:47:19
         compiled from CRM%5CAdmin%5CPage%5CAdmin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM\\Admin\\Page\\Admin.tpl', 1, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-content-block">
<?php $_from = $this->_tpl_vars['adminPanel']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['groupName'] => $this->_tpl_vars['group']):
?>
<div id="admin-section-<?php echo $this->_tpl_vars['groupName']; ?>
">
  <h3><?php echo $this->_tpl_vars['group']['title']; ?>
</h3>
  <div class="admin-section-items">
    <?php $_from = $this->_tpl_vars['group']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['panelName'] => $this->_tpl_vars['panelItem']):
?>
    <dl>
      <dt><a href="<?php echo $this->_tpl_vars['panelItem']['url']; ?>
"<?php if ($this->_tpl_vars['panelItem']['extra']): ?> <?php echo $this->_tpl_vars['panelItem']['extra']; ?>
<?php endif; ?> id="id_<?php echo $this->_tpl_vars['panelItem']['id']; ?>
"><?php echo $this->_tpl_vars['panelItem']['title']; ?>
</a></dt>
      <dd><?php echo $this->_tpl_vars['panelItem']['desc']; ?>
</dd>
    </dl>
    <?php endforeach; endif; unset($_from); ?>
  </div>
</div>
<?php endforeach; endif; unset($_from); ?>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>