{extends file="main.tpl"}
{block name=intro}
    <div class="jumbotron top-space">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{$conf->action_root}main">Strona główna</a></li>
                <li class="active">{$page_title}</li>
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
                {foreach $opinions as $opinion}
                    <tr>
                        <td>{$opinion['name']}</td>
                        <td>{$opinion['description']}</td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
        </div>
    </div>
{/block}