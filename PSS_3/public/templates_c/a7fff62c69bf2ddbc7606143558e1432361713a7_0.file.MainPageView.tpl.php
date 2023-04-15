<?php
/* Smarty version 3.1.33, created on 2023-04-10 21:17:16
  from 'C:\xampp\htdocs\MyProject\app\views\MainPageView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_643460bc57d944_01637696',
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
function content_643460bc57d944_01637696 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1296216474643460bc57a401_64675323', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1968279410643460bc57cca6_95694931', 'intro');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_493755679643460bc57d1d7_61989315', 'jumbotron');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'head'} */
class Block_1296216474643460bc57a401_64675323 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1296216474643460bc57a401_64675323',
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
class Block_1968279410643460bc57cca6_95694931 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'intro' => 
  array (
    0 => 'Block_1968279410643460bc57cca6_95694931',
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
class Block_493755679643460bc57d1d7_61989315 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'jumbotron' => 
  array (
    0 => 'Block_493755679643460bc57d1d7_61989315',
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
