
    <form  method="POST" action="{{ route('admin.login') }}">
        {{-- <input name="_token" value="0SwoifzsDf5d6MVadricy1DSJNtaIK9ierrnABZw" type="hidden"> --}}
        {{csrf_field()}}
        <input type="text" name="name">
        <br>
        <input type="text" name="pass"><br>
        <button type="submit">Login</button>
    </form>