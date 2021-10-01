<h1>User Login</h1>
<!-- @if($errors->any())
@foreach($errors->all() as $err)
  <li>{{$err}}</li>
  @endforeach
  @endif -->
<form action="users" method="POST">
    @csrf
    <input type="text" placeholder="Enter Name" name="username"><br>
<span>@error('username'){{$message}}@enderror</span>
    <br>
    <input type="password" placeholder="Enter password" name="userpassword"><br>
<span>@error('username'){{$message}}@enderror</span>
    <br>
    <button type="submit">Login</button>

  </form>
