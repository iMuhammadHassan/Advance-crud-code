<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>advance Code Crud</title>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 offset-3 pt-4">
                <x-card>
                    <x-form action='/store' formattr="enctype=multipart/form-data">
                        <x-input type="text" name="name" placeholder="Enter your name" id="name"
                            label="Name" />
                        <x-input type="password" name="password" placeholder="Enter your password" id="password"
                            label="Password" />
                        <x-input type="password" name="c_password" placeholder="Enter your confirm password"
                            id="c_password" label="Confirm Password" />
                        <x-input type="file" name="image" placeholder="Enter your image" id="img"
                            label="Choose image" />
                        <x-input type="text" name="title" placeholder="Enter your blog title" id="title"
                            label="Title" />

                        <textarea name="description" class="form-control mb-3" cols="80" rows="10" placeholder="Write here...."></textarea>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </x-form>
                </x-card>
            </div>
        </div>
    </div>









    <table class="table mt-5 pt-5">
        <thead class="bg-dark text-light">
            <td>#</td>
            <td>Title</td>
            <td>Image</td>
            <td>Description</td>
            <td>Action</td>
        </thead>
        <tbody>
            @if ($data)
                @foreach ($data as $item)
                    <tr v-align=middle>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->title }}</td>
                        <td>
                            <img src="{{ 'blog.' $item->image ?>' }} " alt="Hello">
                        </td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <a href="{{ route('edit', ['id' => $item->id]) }}" class="btn btn-info">Edit</a>
                            <a href="{{ route('delete', ['id' => $item->id]) }}" class="btn btn-danger ms-2">Delete</a>
                        </td>
                    </tr>
                @endforeach
            @endif

        </tbody>
    </table>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>
