<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>测试一切</title>

    <!-- Bootstrap css-->
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="form-inline">
                    <div class="form-group">
                        <label class="sr-only" for="id-name">身份证号</label>
                        <input type="text" class="form-control" id="id-name" placeholder="ID">
                    </div>
                    <button type="button" id="id-button" class="btn btn-default">查询</button>
                    <div>
                        <span class="sex"></span>
                        <span class="birthday"></span>
                        <span class="address"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="//cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(function(){
        $('#id-button').on('click',function(){
            var id = $('#id-name').val();
            $.ajax({
                url:'http://apis.baidu.com/apistore/idservice/id',
                method:'get',
                data:{id:id},
                dataType:'json',
                //headers:{apikey:'a0e4501980843b020556b4e45d6a20b7'},
                beforeSend: function(request) {
                    request.setRequestHeader("apikey", "a0e4501980843b020556b4e45d6a20b7");
                },
                success:function(data,textStatus){
                    console.log(data);
                    $('.sex').html(data.retData.sex);
                    $('.birthday').html(data.retData.birthday);
                    $('.address').html(data.retData.address);
                }
            });
        });

    });
</script>
</body>
</html>