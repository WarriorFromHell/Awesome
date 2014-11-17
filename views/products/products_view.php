<div class="container-fluid">
    <div class="content-wrapper">

    <div class="row">

            <div class="item-container col-md-6">
                <div class="container">


                    <div class="col-md-12">
                        <div class="product col-md-3 service-image-left">

                            <center>
                                <img id="item-display" src="<?= getDataURI($product['product_image']) ?>" alt="">
                            </center>
                        </div>

                    </div>

                    <div class="col-md-11">

                        <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
                        <hr>
                        <div class="row">
                            <div class="product-price col-md-9">$ 1234.00</div>
                            <div class="product-stock col-md-3">In Stock</div>
                        </div>
                        <hr>
                        <div class="btn-group cart">
                            <button type="button" id="btnBuy" class="btn btn-success">
                                Buy Now
                            </button>
                        </div>
                        <div class="btn-group wishlist">
                            <button type="button" class="btn btn-danger">
                                Add to wishlist
                            </button>
                        </div>
                    </div>
                </div>
           </div>

        <div class="container-fluid col-md-6">
            <div class="col-md-12 product-info">

                <div class="product-title"><?= $product['product_name'] ?></div>

                <ul id="myTab" class="nav nav-tabs nav_tabs">

                    <li class="active"><a href="#service-one" data-toggle="tab">DESCRIPTION</a></li>
                    <li><a href="#service-two" data-toggle="tab">PRODUCT INFO</a></li>
                    <li><a href="#service-three" data-toggle="tab">REVIEWS</a></li>

                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade in active" id="service-one">

                        <section class="container product-info">
                            The Corsair Gaming Series GS600 power supply is the ideal price-performance solution for building or upgrading a Gaming PC. A single +12V rail provides up to 48A of reliable, continuous power for multi-core gaming PCs with multiple graphics cards. The ultra-quiet, dual ball-bearing fan automatically adjusts its speed according to temperature, so it will never intrude on your music and games. Blue LEDs bathe the transparent fan blades in a cool glow. Not feeling blue? You can turn off the lighting with the press of a button.

                            <h3>Corsair Gaming Series GS600 Features:</h3>
                            <li>It supports the latest ATX12V v2.3 standard and is backward compatible with ATX12V 2.2 and ATX12V 2.01 systems</li>
                            <li>An ultra-quiet 140mm double ball-bearing fan delivers great airflow at an very low noise level by varying fan speed in response to temperature</li>
                            <li>80Plus certified to deliver 80% efficiency or higher at normal load conditions (20% to 100% load)</li>
                            <li>0.99 Active Power Factor Correction provides clean and reliable power</li>

                        </section>

                    </div>
                    <div class="tab-pane fade" id="service-two">

                        <section class="container">

                        </section>

                    </div>
                    <div class="tab-pane fade" id="service-three">

                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
    </div>

    </div>

<script>
    $('#btnBuy').click(function(){
        $('#divOrder').modal({show:true});
        return false;
    });
</script>
<div id="divOrder" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3 class="modal-title">Get ReKt!</h3>
            </div>
            <div class="modal-body">




                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputName">Nimi *</label>
                        <input type="text" class="form-control" id="exampleInputName" placeholder="Sinu nimi..."
                               name="data[email_name]">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Email *</label>
                        <input type="email" class="form-control" id="exampleInputName" placeholder="Sinu email..."
                               name="data[email_email]">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNumber">Telefoninumber *</label>
                        <input type="text" class="form-control" id="exampleInputNumber" placeholder="Sinu telefoninumber..."
                               name="data[email_phone]">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Sõnum *</label>
                        <input type="text" class="form-control" id="exampleInputText" placeholder="Sinu sõnum..."
                               style="min-height:100px" name="data[email_message]">
                    </div>
                    <button type="submit" class="btn btn-default">Saada</button>
                </form>
                    </div>


                    <!-- EDIT BUTTON -->
                    <? if ($auth->is_admin): ?>
                        <form>
                            <div class="pull-right">
                                <button class="btn btn-primary">
                                    Salvesta
                                </button>
                            </div>
                        </form>
                    <? endif; ?>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<style>#divOrder {}
    </style>