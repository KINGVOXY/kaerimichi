<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<header>
    <ul>
        <li><a href="{{route('user.signup')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> 新規登録</a></li>
        <li><a href="{{route('user.signin')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> ログイン</a></li>
    </ul>
</header>

<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h1 style="margin: 10px;">ログイン</h1>
        
        @if(count($errors) >0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <form action="{{ route('user.signin') }}" method="post">
            <div class="form-group">
                <label for="email">id</label>
                <input type="text" id="id" name="id" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">ログイン</button>
            {{ csrf_field() }}
        </form>
    </div>
</div>