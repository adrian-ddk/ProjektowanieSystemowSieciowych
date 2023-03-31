<?php
/* Smarty version 3.1.33, created on 2023-01-27 23:15:12
  from 'C:\xampp\htdocs\MyProject\app\views\ProfileView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63d44cf0d48764_17963510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d38ab3a7c6680b20f676b2c2ad7a1194a99ce28' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MyProject\\app\\views\\ProfileView.tpl',
      1 => 1674796584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d44cf0d48764_17963510 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108614442263d44cf0d2be34_99286621', 'intro');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'intro'} */
class Block_108614442263d44cf0d2be34_99286621 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'intro' => 
  array (
    0 => 'Block_108614442263d44cf0d2be34_99286621',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="jumbotron top-space">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
main">Strona główna</a></li>
                <li class="active"><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</li>
            </ol>
            <h2 class="text-center thin">Profil użytkownika <b><?php echo $_smarty_tpl->tpl_vars['profile']->value['login'];?>
</b></h2>
            <div class="col-md-12">
                <!-- resumt -->
                <div class="panel panel-default">
                    <div class="panel-heading resume-heading">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-xs-12 col-sm-8">
                                    <ul class="list-group">
                                        <li class="list-group-item">Login: <?php echo $_smarty_tpl->tpl_vars['profile']->value['login'];?>
</li>
                                        <li class="list-group-item">Grupa:
                                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['profile']->value['name'] == 'admin';
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?><span class="admin">Administratorzy</span><?php }?>
                                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['profile']->value['name'] == 'moderator';
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2) {?><span class="moderator">Moderatorzy</span><?php }?>
                                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['profile']->value['name'] == 'user';
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3) {?><span class="user">Użytkownicy</span><?php }?>
                                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['profile']->value['name'] == 'zbanowany';
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4) {?><span class="banned">Zbanowani</span><?php }?>
                                        </li>
                                        <li class="list-group-item">Data utworzenia konta: <?php echo $_smarty_tpl->tpl_vars['profile']->value['register_date'];?>
</li>
                                        <li class="list-group-item">Ostatnio zalogowany: <?php echo $_smarty_tpl->tpl_vars['profile']->value['last_login'];?>
</li>
                                        <li class="list-group-item">Adres email: <?php echo $_smarty_tpl->tpl_vars['profile']->value['email'];?>
</li>
                                        <?php if (core\RoleUtils::inRole("admin") || core\RoleUtils::inRole("moderator")) {?>
                                            <li class="list-group-item">Numer ID konta: <?php echo $_smarty_tpl->tpl_vars['profile']->value['id'];?>
</li>
                                            <li class="list-group-item">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
manageUsers/1/edit/<?php echo $_smarty_tpl->tpl_vars['profile']->value['id'];?>
"><button class="btn btn-primary">Edytuj użytkownika</button></a>
                                            </li>
                                        <?php }?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'intro'} */
}
