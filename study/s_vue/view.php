<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>-->
<script>

    $.ajax({
            async: true,
            url:"/study/s_vue/view_proc.php",
            type : "POST",
            data : {
                id : <?= $_GET['id']?>
            },
            complete : function(r){
                let res = r.responseText;
                console.log(res);
                $("#list").empty();
                $("#list").append(res);
            }
        }
    );
</script>

<div id="list"></div>