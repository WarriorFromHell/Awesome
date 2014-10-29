<style>
    .products * {
        margin-top: 0 !important;
    }
</style>
<h1>
    Tooted
</h1>
<div class="products">

    <div class="row">
        <? foreach ($products as $product): ?>
            <div class="well pull-left" style="width:290px;margin:15px">
                <h2><?= $product['product_name'] ?></h2>

                <p><?= $product['product_description'] ?></p><img src="<?= getDataURI($product['product_image']) ?>"
                                                                   alt=""/>
            </div>
        <? endforeach ?>
    </div>
</div>


