
  <div>
<form method="POST" action="form/getData">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="text" placeholder="Enter name" name="name"><br>
    <input type="password" placeholder="********" name="password"><br>
    <input type="email" placeholder="email id" name="enter email"><br>
    <input type="phone" placeholder="+91--------" name=" phone number"><br>
    <input type="text" placeholder="address" name="enter address"><br>
    <input type="submit" name="submit">
</form>
</div>
