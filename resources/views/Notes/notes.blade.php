

{{-- //inhirite layouts --}}
{{-- @extends('layouts.app') --}}
{{-- center content in body --}}
{{-- @section('content') --}}
<html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>notess</title>
    </head>
    <body>
    <div class="container mt-5">
        <div class="container mt-5"  >

          <a href="\create"class="btn btn-success">Create notes</a>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">description</th>

                    <th scope="col">created_at</th>
                    <th scope="col">updated_at</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($notes as $note )
                        <tr>
                            <th scope="row">{{ $note->id }}</th>
                            <td>{{ $note->title }}</td>
                            <td>{{ $note->description }}</td>



                            <td>{{ $note->created_at }}</td>
                            <td>{{ $note->updated_at }}</td>

                        <td>
                            <a href="/show/{{ $note->id }}" class="btn btn-info">view</a>

                            {{-- using route  --}}
                            {{-- <a href="{{ route('show',['id'=>$notes->id]) }}" class="btn btn-info">view</a> --}}
                            <a href="/showToEdit/{{ $note->id }}" class="btn btn-primary">Edit</a>



                            <form  id="formRoute" action="{{ route('destroy',$note->id) }}" style="display:inline; " method="post">
                                @csrf
                                @method('DELETE')

                                 <button class="btn btn-danger" type="butoon" onclick="check()">Delete</button>

                            </form>


                        </tr>
                @endforeach
                </tbody>
            </table>
            </div>

{{-- @endsection    center content in body --}}

</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>



