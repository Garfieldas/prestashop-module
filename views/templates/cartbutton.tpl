<link rel="stylesheet" type="text/css" href="{$module_dir}/views/css/main.css">

<div class="text-sm-center">
{*    <a href="http://localhost:8888/prestashop/index.php?controller=order" class="btn btn-primary share">*}
    <a href="{$link->getModuleLink('mymodule', 'hello')}" class="btn btn-primary share">
        Share cart<img id="share-svg" src="{$module_dir}views/img/share.svg">
    </a>
</div>