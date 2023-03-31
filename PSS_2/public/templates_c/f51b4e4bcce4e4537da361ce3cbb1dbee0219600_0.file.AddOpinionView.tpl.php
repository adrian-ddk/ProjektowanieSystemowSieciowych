<?php
/* Smarty version 3.1.33, created on 2023-01-27 23:15:10
  from 'C:\xampp\htdocs\MyProject\app\views\AddOpinionView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63d44cee0d9a32_62901576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f51b4e4bcce4e4537da361ce3cbb1dbee0219600' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MyProject\\app\\views\\AddOpinionView.tpl',
      1 => 1674718050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d44cee0d9a32_62901576 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72272316263d44cee0d2a52_56085705', 'intro');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'intro'} */
class Block_72272316263d44cee0d2a52_56085705 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'intro' => 
  array (
    0 => 'Block_72272316263d44cee0d2a52_56085705',
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
                    <h1 class="page-title">Dodaj opinie</h1>
                </header>

                <div class="col-md-6 col-sm-8 row">
                    <div class="panel panel-default">
                        <div class="panel-body" id="addingForm">
                         <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addOpinion" method="post">
                                <div class="top-margin">
                                    <label>Imie <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" placeholder="Imie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
">
                                </div>
                                <div class="top-margin">
                                    <label>Opis <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="description" placeholder="Opis" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->description;?>
">
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-lg-1 text-right">
                                        <button class="btn btn-action" type="submit">Dodaj</button>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
                <div class="map-style col-md-6 col-sm-12 row new-place">
                    <div id="map"></div>
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
