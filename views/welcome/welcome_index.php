<h1>Welcome!</h1>
<!-- Code for ajax -->
<script type="text/javascript">
    function clickme() {
        $.post("welcome", $( "#ajax-form" ).serialize(), function (data) {
            $(".result").html(data);
        });
    }
</script>



<div class="row">
    <div class="col-md-4">
        <img src="http://localhost/awesome/assets/img/pic1.jpg" height="75%" width="75%" />
        <h3>Awesome game</h3>
    </div>
    <div class="col-md-4">
        <img src="http://localhost/awesome/assets/img/pic2.jpg" height="75%" width="75%" />
        <h3>Awesome game</h3>
    </div>
    <div class="col-md-4">
        <img src="http://localhost/awesome/assets/img/pic1.jpg" height="75%" width="75%" />
        <h3>Awesome game</h3>
    </div>
</div>