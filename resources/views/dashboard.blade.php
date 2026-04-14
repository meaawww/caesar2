<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <a href="/create">+ Tambah User</a>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Aksi</th>
        </tr>

        @foreach($users as $user)
        <tr>
            <td>{{ $user->id_pengguna }}</td>
            <td>{{ $user->username }}</td>
            <td>
                <a href="/edit/{{ $user->id_pengguna }}">Edit</a>

                <form action="/delete/{{ $user->id_pengguna }}" method="POST" style="display:inline;">
                    @csrf
                    <button onclick="return confirm('Yakin mau hapus?')">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <div class="container mt-5">
        <div class="card p-4 shadow text-center">
            <h2>Dashboard</h2>
            <p>Selamat datang, kamu berhasil login!</p>

            <a href="/logout" class="btn btn-danger">Logout</a>
        </div>
    </div>

</body>

</html>