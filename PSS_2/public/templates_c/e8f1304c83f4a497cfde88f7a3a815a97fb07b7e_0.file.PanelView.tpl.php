<?php
/* Smarty version 3.1.33, created on 2023-01-27 23:14:50
  from 'C:\xampp\htdocs\MyProject\app\views\PanelView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63d44cda11b771_79237644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8f1304c83f4a497cfde88f7a3a815a97fb07b7e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MyProject\\app\\views\\PanelView.tpl',
      1 => 1674794974,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d44cda11b771_79237644 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26863091963d44cda0fd333_77660934', 'intro');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'intro'} */
class Block_26863091963d44cda0fd333_77660934 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'intro' => 
  array (
    0 => 'Block_26863091963d44cda0fd333_77660934',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header id="head" class="secondary"></header>
    <!-- container -->
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
main">Strona główna</a></li>
            <li class="active"><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</li>
        </ol>

        <div class="row">
            <!-- Article main content -->
            <article class="col-md-12 col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Panel główny</h1>
                </header>
            </article>

            <article class="col-md-12 col-xs-12 maincontent">
                <?php if (core\RoleUtils::inRole("admin") || core\RoleUtils::inRole("moderator")) {?>
                <div class="col-md-6 col-sm-12">
                    <h4>Ostatnio zarejestrowani użytkownicy</h4>
                    <ul class="list-group">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lastRegister']->value, 'last');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['last']->value) {
?>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-5">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
profile/<?php echo $_smarty_tpl->tpl_vars['last']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['last']->value['login'];?>
</a>
                                    </div>
                                    <div class="col-md-7">
                                        <?php echo $_smarty_tpl->tpl_vars['last']->value['register_date'];?>

                                    </div>
                                </div>
                            </li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
                <?php }?>
                <div class="col-md-6 col-sm-12">
                    <h4>Akcje</h4>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addOpinion">Dodaj opinie</a></li>
                        <li class="list-group-item"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
profile">Mój profil</a></li>
                        <li class="list-group-item"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Wyloguj</a></li>
                    </ul>
                </div>
            </article>

            <article class="col-md-12 col-xs-12 maincontent">
                <div class="col-md-6 col-sm-6">
                    <h4>Ilość opinii w naszej bazie</h4>
                    <ul class="list-group">
                        <li class="list-group-item"><h4><?php echo $_smarty_tpl->tpl_vars['allOpinions']->value;?>
</h4></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h4>Ilość zarejestrowanych użytkowników</h4>
                    <ul class="list-group">
                        <li class="list-group-item"><h4><?php echo $_smarty_tpl->tpl_vars['allUsers']->value;?>
</h4></li>
                    </ul>
                </div>
            </article>
            <!-- /Article -->

            <div class="space"> . </div>
        </div>

    </div>	<!-- /container -->

<?php
}
}
/* {/block 'intro'} */
}
