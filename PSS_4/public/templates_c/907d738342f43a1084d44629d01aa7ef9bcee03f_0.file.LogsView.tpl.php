<?php
/* Smarty version 3.1.33, created on 2023-04-10 21:17:28
  from 'C:\xampp\htdocs\MyProject\app\views\LogsView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_643460c81150b8_65273320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '907d738342f43a1084d44629d01aa7ef9bcee03f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MyProject\\app\\views\\LogsView.tpl',
      1 => 1681145886,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643460c81150b8_65273320 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1404059396643460c810ba93_45095688', 'intro');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'intro'} */
class Block_1404059396643460c810ba93_45095688 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'intro' => 
  array (
    0 => 'Block_1404059396643460c810ba93_45095688',
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
            <h2 class="text-center thin">Logi administracyjne</h2>
            <table id="logsValues" class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Data</th>
                    <th scope="col">Adres IP</th>
                    <th scope="col">Treść</th>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['logs']->value, 'log');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['log']->value) {
?>
                    <tr>
                        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['log']->value['id_log'];?>
</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['log']->value['datetime'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['log']->value['ip'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['log']->value['log'];?>
</td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
            <?php if ($_smarty_tpl->tpl_vars['next_page']->value > 1) {?>
                <a type="button" class="btn btn-light btn-sm float-right" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
adminLogs/<?php echo $_smarty_tpl->tpl_vars['previous_page']->value;?>
">Załaduj nowsze rekordy</a>
            <?php }?>
            <a type="button" class="btn btn-light btn-sm float-right" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
adminLogs/<?php echo $_smarty_tpl->tpl_vars['next_page']->value;?>
">Załaduj starsze rekordy</a>
            <a type="button" class="btn btn-light btn-sm float-right" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
adminLogs/-1">Załaduj wszystkie logi</a>
        </div>
    </div>
    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            $('#logsValues').DataTable( {
                "order": [[ 0, "desc" ]]
            } );
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'intro'} */
}
