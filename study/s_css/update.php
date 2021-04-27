<script>

    $.ajax({
            async: true,
            url:"/study/s_css/view_proc.php",
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