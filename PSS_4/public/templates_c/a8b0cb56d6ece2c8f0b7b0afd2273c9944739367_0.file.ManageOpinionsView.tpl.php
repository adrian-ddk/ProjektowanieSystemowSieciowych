<?php
/* Smarty version 3.1.33, created on 2023-04-11 23:10:23
  from 'C:\xampp\htdocs\MyProject\app\views\ManageOpinionsView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6435ccbf850786_87266839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8b0cb56d6ece2c8f0b7b0afd2273c9944739367' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MyProject\\app\\views\\ManageOpinionsView.tpl',
      1 => 1681247421,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6435ccbf850786_87266839 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7254026676435ccbf844c39_26698198', 'intro');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'intro'} */
class Block_7254026676435ccbf844c39_26698198 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'intro' => 
  array (
    0 => 'Block_7254026676435ccbf844c39_26698198',
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
            <h2 class="text-center thin">Opinie</h2>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h4>Wyszukiwarka</h4>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form method="GET" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="text" list="nameHints" name="shopName" class="form-control" placeholder="Nazwa użytkownika"
                                               onkeyup="ajaxReloadElement('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
hint?column=name&value='+this.value, 'nameHints', doNothing)">
                                        <datalist id="nameHints">
                                        </datalist>
                                        <hr></hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-primary" value="Szukaj">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <table id="opinionsValues" class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Imie</th>
                    <th scope="col">Treść</th>
                    <th scope="col">Autor</th>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['opinions']->value, 'opinion');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['opinion']->value) {
?>
                    <tr>
                        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['opinion']->value['id'];?>
</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['opinion']->value['name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['opinion']->value['description'];?>
</td>
                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
profile/<?php echo $_smarty_tpl->tpl_vars['opinion']->value['userid'];?>
"><?php echo $_smarty_tpl->tpl_vars['opinion']->value['login'];?>
</a></td>
                        <td><button onclick="deleteOpinion('<?php echo $_smarty_tpl->tpl_vars['opinion']->value['id'];?>
')" href="#" class="btn btn-link">Usuń</button></td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>

            <?php if ($_smarty_tpl->tpl_vars['previous_page']->value > 0) {?>
                <a type="button" class="btn btn-light btn-sm float-right" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
manageOpinions/<?php echo $_smarty_tpl->tpl_vars['previous_page']->value;?>
">Załaduj poprzednie rekordy</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['isNextPage']->value) {?>
                <a type="button" class="btn btn-light btn-sm float-right" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
manageOpinions/<?php echo $_smarty_tpl->tpl_vars['next_page']->value;?>
">Załaduj następne rekordy</a>
            <?php }?>
            <a type="button" class="btn btn-light btn-sm float-right" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
manageOpinions/0">Załaduj wszystkich użytkowników</a>
        </div>
    </div>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            $('#opinionsValues').DataTable();
        });
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        function deleteOpinion(id) {
            if (confirm("Na pewno chcesz usunąć opinie? Nie można będzie cofnąć tej operacji")) {
                window.location.href = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
manageOpinions/<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
/delete/'+id;
            }
        }
        function doNothing(){ return false; }
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'intro'} */
}
