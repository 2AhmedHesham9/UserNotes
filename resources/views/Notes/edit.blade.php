{{-- @extends('layouts.app')
@section('content') --}}

<html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Edit notes</title>
    </head>
    <body>
    <div class="container mt-5">

<div class="container mt-5">

      <form action="{{ route('edit', $editsinglenote->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="tit" class="form-label">Title</label>
          <input type="text" class="form-control" id="tit" name="title" value="{{ $editsinglenote->title }}">
        </div>
        <div class="mb-3">
          <label for="des" class="form-label">description</label>
          <input type="text" class="form-control" id="des" name="description" value="{{ $editsinglenote->description }}">
        </div>



        <button type="submit" class="btn btn-primary">Update</button>
      </form>

    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>

{{-- @endsection --}}



