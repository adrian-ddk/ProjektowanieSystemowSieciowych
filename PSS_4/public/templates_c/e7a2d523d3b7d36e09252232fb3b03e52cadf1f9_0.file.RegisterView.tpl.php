<?php
/* Smarty version 3.1.33, created on 2023-04-15 22:31:26
  from 'C:\xampp\htdocs\MyProject\app\views\RegisterView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_643b099ee02b95_15827362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7a2d523d3b7d36e09252232fb3b03e52cadf1f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MyProject\\app\\views\\RegisterView.tpl',
      1 => 1681590370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643b099ee02b95_15827362 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1865861370643b099edfc9f0_36402269', 'intro');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'intro'} */
class Block_1865861370643b099edfc9f0_36402269 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'intro' => 
  array (
    0 => 'Block_1865861370643b099edfc9f0_36402269',
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
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Utwórz nowe konto</h1>
                </header>

                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3 class="thin text-center">Utwórz nowe konto</h3>
                            <p class="text-center text-muted">Wypełnij wszystkie pola i zatwierdź, by utworzyć nowe konto.</p>
                            <hr>

                            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register" method="post">
                                <div class="top-margin">
                                    <label>Adres email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control ajax-check" name="email">
                                    <p class="ajax-respone" ></p>
                                </div>
                                <div class="top-margin">
                                    <label>Login <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="login">
                                </div>
                                <div class="top-margin">
                                    <label>Hasło <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="top-margin">
                                    <label>Powtórz hasło <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" name="password_repeat">
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <b><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login">Masz konto? Zaloguj się.</a></b>
                                    </div>
                                    <div class="col-lg-8 text-right">
                                        <button class="btn btn-action" type="submit">Utwórz konto</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
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
