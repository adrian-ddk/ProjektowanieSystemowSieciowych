{extends file="main.tpl"}
{block name=head}
    <header id="head">
        <div class="container">
            <div class="row">
                <h1 class="lead">Pizzeria Catto</h1>
                <p class="tagline">Oceń wizytę, logując się bądź rejestrując na naszej stronie!</p>
                <p><a class="btn btn-default btn-lg" role="button" href="{$conf->action_root}panel">ZALOGUJ</a></p>
            </div>
        </div>
    </header>
{/block}

{block name=intro}
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
{/block}

{block name=jumbotron}
    <div class="jumbotron top-space">
        <div class="container">
            <h2 class="text-center thin">Sprawdź opinie zadowolonych klientów!</h2>
            <p style="text-align: center"><a class="btn btn-default btn-lg" role="button" href="{$conf->action_root}opinions">SPRAWDŹ</a></p>
        </div>
    </div>

{/block}
