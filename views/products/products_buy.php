
<form method="post" action="https://pangalink.net/banklink/ipizza" name="bank_signup">
            <!-- include all values as hidden form fields -->
<?php foreach($fields as $key => $val):?>
    <input type="hidden" name="<?php echo $key; ?>" value="<?php echo htmlspecialchars($val); ?>" />
<?php endforeach; ?>

<!-- draw table output for demo -->
<table>
    <?php foreach($fields as $key => $val):?>
        <tr>
            <td><strong><code><?php echo $key; ?></code></strong></td>
            <td><code><?php echo htmlspecialchars($val); ?></code></td>
        </tr>
    <?php endforeach; ?>

    <!-- when the user clicks "Pay" form data is sent to the bank -->
    <tr><td colspan="2"><input type="submit" value="Pay" /></td></tr>
</table>
</form>
<script>
    window.onload = function(){
        document.forms['bank_signup'].submit()

    }
</script>