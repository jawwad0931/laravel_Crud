<!DOCTYPE html>
<html>
<head>
    <title>Upload File</title>
</head>
<body>
    <h1>Upload File</h1>
    @if(session('success'))
        <p>{{ session('success') }}</p>
        <p>File URL: <a href="{{ session('file') }}" target="_blank">{{ session('file') }}</a></p>
    @endif
    @if($errors->any())
        <p>{{ $errors->first('file') }}</p>
    @endif
    <form action="/uploadfile" method="post" enctype="multipart/form-data">
        @csrf
        <label>Select the file to upload:</label>
        <input type="file" name="image" required>
        <button type="submit">Upload File</button>
    </form>
</body>
</html>
