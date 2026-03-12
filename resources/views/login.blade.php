<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Sistem Pengolahan Rapor Siswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container text-center mt-5">
    <h2 class="fw-bold">Sistem Pengolahan Rapor Siswa</h2>
</div>

<div class="container d-flex justify-content-center mt-4">
    <div class="card shadow" style="width: 400px;">
        <div class="card-body">

            <h4 class="text-center mb-4">Login</h4>

            <form>
                <div class="mb-3">
                    <label class="form-label">Role</label>
                    <select class="form-select">
                        <option selected>Pilih Role</option>
                        <option value="admin">Admin</option>
                        <option value="guru">Guru</option>
                        <option value="wali_kelas">Wali Kelas</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" placeholder="Masukkan username">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="Masukkan password">
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    Login
                </button>
            </form>

        </div>
    </div>
</div>

</body>
</html>