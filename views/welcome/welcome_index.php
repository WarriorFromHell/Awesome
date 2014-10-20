<h1>Welcome! </h1>
<!-- Code for ajax -->
<script type="text/javascript">
    function clickme() {
        $.post("welcome", $( "#ajax-form" ).serialize(), function (data) {
            $(".result").html(data);
        });
    }
</script>



<div class="row">
    <div class="col-md-4">sadasdas
        <img src="http://localhost/awesome/assets/img/pic1.jpg" />
    </div>
    <div class="col-md-4">asdasdasd
        <img src="http://localhost/awesome/assets/img/pic2.jpg" />
    </div>
    <div class="col-md-4">sadasdasd
        <img src="http://localhost/awesome/assets/img/pic1.jpg" />
    </div>
</div>