<?php
/* Smarty version 3.1.33, created on 2023-01-27 23:03:39
  from 'C:\xampp\htdocs\MyProject\app\views\MainPageView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63d44a3bb19e37_65639299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7fff62c69bf2ddbc7606143558e1432361713a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MyProject\\app\\views\\MainPageView.tpl',
      1 => 1674722060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d44a3bb19e37_65639299 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144601191963d44a3bb0e867_10900316', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12931277763d44a3bb17d95_41597024', 'intro');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52891077763d44a3bb18a13_83049239', 'jumbotron');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'head'} */
class Block_144601191963d44a3bb0e867_10900316 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_144601191963d44a3bb0e867_10900316',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header id="head">
        <div class="container">
            <div class="row">
                <h1 class="lead">Pizzeria Catto</h1>
                <p class="tagline">Oceń wizytę, logując się bądź rejestrując na naszej stronie!</p>
                <p><a class="btn btn-default btn-lg" role="button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
panel">ZALOGUJ</a></p>
            </div>
        </div>
    </header>
<?php
}
}
/* {/block 'head'} */
/* {block 'intro'} */
class Block_12931277763d44a3bb17d95_41597024 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'intro' => 
  array (
    0 => 'Block_12931277763d44a3bb17d95_41597024',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container text-center">
        <br> <br>
        <h2 class="thin">Dowiedz się więcej o naszym menu!</h2>
    </div>
    <div class="pizza">
        <h3><b>1. Catto</b></h3>
        <p>sos pomidorowy, ser, pieczarki, cebula, tuńczyk, oliwki, oregano</p>
    </div>
    <div class="pizza">
        <h3><b>2. Tropicana</b></h3>
        <p>sos pomidorowy, ser, szynka, ananas, oregano</p>
    </div>
    <div class="pizza">
        <h3><b>3. Włoska</b></h3>
        <p>sos pomidorowy, ser, mozarellki, oliwki, kukurydza, rukola, pomidorki koktajlowe, oregano</p>
    </div>
    <div class="pizza">
        <h3><b>4. Bella</b></h3>
        <p>sos pomidorowy, ser, pieczarki, szynka, salami, bekon, oregano</p>
    </div>
    <div class="pizza">
        <h3><b>5. Margherita</b></h3>
        <p>sos pomidorowy, ser, oregano</p>
    </div>
    <div class="pizza">
        <h3><b>6. Roma</b></h3>
        <p>sos pomidorowy, ser, pieczarki, szynka, oregano</p>
    </div>
<?php
}
}
/* {/block 'intro'} */
/* {block 'jumbotron'} */
class Block_52891077763d44a3bb18a13_83049239 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'jumbotron' => 
  array (
    0 => 'Block_52891077763d44a3bb18a13_83049239',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="jumbotron top-space">
        <div class="container">
            <h2 class="text-center thin">Sprawdź opinie zadowolonych klientów!</h2>
            <p style="text-align: center"><a class="btn btn-default btn-lg" role="button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
opinions">SPRAWDŹ</a></p>
        </div>
    </div>

<?php
}
}
/* {/block 'jumbotron'} */
}
