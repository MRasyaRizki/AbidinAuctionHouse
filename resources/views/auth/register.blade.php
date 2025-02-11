<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <label>Nama Lengkap:</label>
        <input type="text" name="nama_lengkap" required>

        <label>Username:</label>
        <input type="text" name="username" required>

        <label>Password:</label>
        <input type="password" name="password" required>

        <label>Nomor Telepon:</label>
        <input type="text" name="telp" required>

        <button type="submit">Register</button>
    </form>

    <p>Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a></p>
</body>
</html>
