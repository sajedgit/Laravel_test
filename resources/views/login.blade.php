
<!DOCTYPE html>
<html>
<body>

<h2>Login Forms</h2>

<form action="/submit_login" method="post">
    @csrf
    <label for="user">User Name:</label><br>
    <input type="text" id="username" name="username" value=""><br>
    @error('username')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="email">User Password :</label><br>
    <input type="text" id="password" name="password" value=""><br><br>
    @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input type="submit" value="Submit">
</form>

<p>If you click the "Submit" button, the form-data will be sent to a page called </p>

</body>
</html>
