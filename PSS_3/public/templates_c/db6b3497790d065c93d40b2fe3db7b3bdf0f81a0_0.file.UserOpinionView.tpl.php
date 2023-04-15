<?php
/* Smarty version 3.1.33, created on 2023-04-10 22:27:56
  from 'C:\xampp\htdocs\MyProject\app\views\UserOpinionView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6434714c994482_53801863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db6b3497790d065c93d40b2fe3db7b3bdf0f81a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MyProject\\app\\views\\UserOpinionView.tpl',
      1 => 1681150055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6434714c994482_53801863 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18220080416434714c98d135_45889224', 'intro');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'intro'} */
class Block_18220080416434714c98d135_45889224 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'intro' => 
  array (
    0 => 'Block_18220080416434714c98d135_45889224',
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
            <p style="text-align: center" class="tagline">Nie ufasz nam, zaufaj naszym klientom!</p>
            <table id="opinionsValues" class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Imie</th>
                    <th scope="col">Treść</th>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['opinions']->value, 'opinion');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['opinion']->value) {
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['opinion']->value['name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['opinion']->value['description'];?>
</td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            $('#opinionsValues').DataTable();
        });
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'intro'} */
}
