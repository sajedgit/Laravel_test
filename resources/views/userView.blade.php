
<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="/submit" method="post">
    @csrf
    <label for="user">User Name:</label><br>
    <input type="text" id="user" name="user" value="" class="@error('user') is-invalid @enderror"><br>
    @error('user')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="email">User Email :</label><br>
    <input type="text" id="email" name="email" value=""><br><br>
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input type="submit" value="Submit">
</form>

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
