<h2>Caesar Cipher Calculator</h2>

<form method="POST" action="/cipher">
    @csrf

    <label>Text:</label><br>
    <input type="text" name="text" required><br><br>

    <label>Shift:</label><br>
    <input type="number" name="shift" required><br><br>

    <button type="submit" name="action" value="encrypt">Encrypt</button>
    <button type="submit" name="action" value="decrypt">Decrypt</button>
</form>

<h3>Hasil:</h3>

@if(isset($result))
<p>{{ $result }}</p>
@else
<p>-</p>
@endif