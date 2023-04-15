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
                    <h1 class="page-title">Dodaj opinie</h1>
                </header>

                <div class="col-md-6 col-sm-8 row">
                    <div class="panel panel-default">
                        <div class="panel-body" id="addingForm">
                         <form action="{$conf->action_root}addOpinion" method="post">
                                <div class="top-margin">
                                    <label>Imie <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" placeholder="Imie" value="{$form->name}">
                                </div>
                                <div class="top-margin">
                                    <label>Opis <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="description" placeholder="Opis" value="{$form->description}">
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
{/block}