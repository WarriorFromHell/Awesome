<style>
    .discounts * {
        margin-top: 0 !important;
    }
</style>
<h1>
    Eripakkumised
</h1>
<div class="discounts">

    <div class="row">
        <? foreach ($discounts as $discount): ?>
            <div class="well pull-left" style="width:290px;margin:15px">
                <h2><?= $discount['product_name'] ?></h2>

                <p><?= $discount['product_description'] ?></p><img src="<?= getDataURI($discount['product_image']) ?>"
                                                                   alt=""/>
            </div>
        <? endforeach ?>
    </div>
</div>
