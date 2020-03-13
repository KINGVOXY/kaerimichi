<!--extends('layouts.master_auth')使うときはアットマークを先頭に-->
<!--section('content')-->
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>

    <header>
        <b>Please Sign Up!</b>
    </header>

    <div class="row">
        <form action="{{ route('user.signup') }}" method="post" class="form-horizontal" style="margin-top: 50px;">

            <div class="form-group">
                <label class="col-sm-3 control-label" for="InputId">id</label>
                <div class="col-sm-9">
                    <input type="text" name="id" class="form-control" id="InputId" placeholder="id">
                <!--/.col-sm-10---></div>
            <!--/form-group--></div>
    
            <div class="form-group">
                <label class="col-sm-3 control-label" for="InputName">name</label>
                <div class="col-sm-9">
                    <input type="text" name="name" class="form-control" id="InputName" placeholder="name">
                </div>
            <!--/form-group--></div>
    
            <div class="form-group">
                <label class="col-sm-3 control-label" for="InputPassword">password</label>
                <div class="col-sm-9">
                    <input type="password" name="password" class="form-control" id="InputPassword" placeholder="パスワード">
                </div>
            <!--/form-group--></div>
    
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-primary btn-block">新規登録</button>
                </div>
            <!--/form-group--></div>
            {{ csrf_field() }}
        </form>
    </div>
    <!--endsection-->

</html>