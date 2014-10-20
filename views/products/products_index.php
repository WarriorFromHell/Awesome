<? foreach ($products as $product): ?>
    <div class="span8">
        <h1><a href="<?= BASE_URL ?>posts/view/<?= $product['product_id'] ?>"><?= $product['product_name'] ?></a></h1>

        <p><?= $product['product_text'] ?></p>

    <? foreach ($tags[$post['post_id']] as $tag): ?>
            <a href="tags/view/<?= $tag['tag_name'] ?>">
                <span class="label" style="background-color: #5bc0de"><?= $tag ?></span>
            </a> <? endforeach ?>

    </div>
<? endforeach ?>
