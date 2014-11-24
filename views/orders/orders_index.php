<style>
    .table {
        background-color: white;
    }
</style>

<style>
    .bold {
        font-weight: bold;
    }
</style>
<div class="page-header">
    <h1>Tellimus</h1>
</div>

<table class="table">
    <tr class="bold">
        <? foreach ($orders as $order): ?>

            <td>Nimi</td>
            <td>Aadress</td>
            <td>E-mail</td>
            <td>Telefon</td>
            <td>Toode</td>
            <td>Hind</td>


        <? endforeach ?>
    </tr>
    <tr>

        <td><?= $order['customer_name'] ?></td>
        <td><?= $order['customer_address'] ?></td>
        <td><?= $order['customer_email'] ?></td>
        <td><?= $order['customer_number'] ?></td>
        <td><?= $order['product_id'] ?></td>
        <td><?= $order['product_price'] ?></td>

    </tr>
</table>