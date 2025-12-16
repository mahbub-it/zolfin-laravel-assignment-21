<form action="{{ route('upload-img') }}" method="post" enctype="multipart/form-data">
    @csrf

    <input type="file" name="thumbnail">

    <input type="submit" value="Upload Image">
</form>