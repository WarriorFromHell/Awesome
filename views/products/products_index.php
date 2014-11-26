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
            <a href="products/<?= $product ['product_id'] ?>">
                <div class="well pull-left" style="width:290px;margin:15px">
                    <h2><?= $product['product_name'] ?></h2>

                    <p><?= $product['product_description'] ?></p><img src="<?= getDataURI($product['product_image']) ?>"
                                                                 height="200px" width="250px"     alt=""/>
                </div>
            </a>
        <? endforeach ?>
    </div>

</div>


