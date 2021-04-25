<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>-->
<script>

    $.ajax({
        async: false,
        url:"/study/s_css/list_proc.php",
        type : "POST",
        complete : function(r){
            var res = r.responseText;
            console.log(r);
            // $("#list"+div).empty();
            $("#list").append(res);
        }
    }
);
</script>

<div id="list"></div>