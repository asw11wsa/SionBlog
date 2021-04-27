<script>

    $.ajax({
            async: true,
            url:"/study/s_blog_proc.php",
            type : "POST",
            data : {
                functionName: "updateView",
                table: "blogs",
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
<button type="button" class="btn btn-primary" onclick="goUpdateData(<?=$_GET['id']?>)">
    update
</button>

<script>
    function goUpdateData(id){
        $.ajax({
                async: true,
                url:"/study/s_blog_proc.php",
                type : "POST",
                data : {
                    functionName: "update",
                    table: "blogs",
                    id : id,
                    title: $('input[name=title]').val(),
                    content: $('input[name=content]').val()
                },
                complete : function(){
                    location.href="/study/s_blog/index.php?con=";
                }
            }
        );
    }
</script>
