<h2>Edit User</h2>

<form action="/update/{{ $user->id_pengguna }}" method="POST">
    @csrf

    <label>Username</label><br>
    <input type="text" name="username" value="{{ $user->username }}"><br><br>

    <label>Password (kosongkan jika tidak diubah)</label><br>
    <input type="password" name="password"><br><br>

    <button type="submit">Update</button>
</form>

<br>
<a href="/dashboard">Kembali</a>