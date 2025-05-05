<form action="/admin" method="POST">
    @csrf
    <label>Nama:</label>
    <input type="text" name="nama"><br>

    <label>Email:</label>
    <input type="email" name="email"><br>

    <label>No HP:</label>
    <input type="text" name="no_hp"><br>

    <label>Alamat:</label>
    <textarea name="alamat"></textarea><br>

    <label>Role:</label>
    <select name="role">
        <option value="Super admin">Super admin</option>
        <option value="Kasir">Kasir</option>
    </select><br>

    <button type="submit">Simpan</button>
</form>
