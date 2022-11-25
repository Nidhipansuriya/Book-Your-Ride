<form class="tab-wizard2 wizard-circle wizard" method="POST" enctype="multipart/form-data" action="">

    <input id="id1" type="number" max="10" min="10">
    <button onclick="myFunction()">OK</button>

</form>

<p id="demo"></p>

<script>
    function myFunction() {
        let text = "Value OK";
        if (document.getElementById("id1").validity.rangeOverflow) {
            text = "Value too large";
        }
    }
</script>