<form action="http://dev.neemaa.com/api/recovery_password" method="post">
    <input type="password" placeholder="New password" name="password">
    <input type="hidden" value="{{$token}}" name="token">
    <input type="submit" value="reset">
</form>
