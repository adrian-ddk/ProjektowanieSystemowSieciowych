{extends file="main.tpl"}
{block name=intro}
    <header id="head" class="secondary"></header>
    <!-- container -->
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="{$conf->action_root}main">Strona główna</a></li>
            <li class="active">{$page_title}</li>
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

                            <form action="{$conf->action_root}register" method="post">
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
                                        <b><a href="{$conf->action_root}login">Masz konto? Zaloguj się.</a></b>
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

{/block}