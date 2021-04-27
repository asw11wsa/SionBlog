<div class="container">
    <form method="post">
        <input type="text" name="title" value=""><br>
        <input type="text" name="content">
        <button type="submit" onclick="writeHtml()">글작성</button>
    </form>
</div>

<script>
    function writeHtml(){
        $.ajax({
                async: true,
                url:"/study/s_blog_proc.php",
                type : "POST",
                data : {
                    functionName: "write",
                    table: "vues",
                    title: $('input[name=title]').val(),
                    content: $('input[name=content]').val()
                },
                complete : function(){
                    //console.log(<?//=$_GET['id']?>//);
                    location.href="/study/s_vue/index.php?con=";
                }
            }
        );
    }
</script>