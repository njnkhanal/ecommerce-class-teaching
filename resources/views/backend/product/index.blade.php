<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-12">
                <table class="table">
                    @if (session('success'))
                        <div class="alert alert-success">
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">S.N</th>
                            <th scope="col">title</th>
                            <th scope="col">slug</th>
                            <th scope="col">description</th>
                            <th scope="col">image</th>
                            <th scope="col">category_id</th>
                            <th scope="col">sub_category_id</th>
                            <th scope="col">brand_id</th>
                            <th scope="col">price</th>
                            <th scope="col">discount</th>
                            <th scope="col">stock</th>
                            <th scope="col">date</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $pcat)
                            <tr>
                                <td>{{ $pcat->id }}</td>
                                <td>{{ $pcat->title }}</td>
                                <td>{{ $pcat->slug }}</td>

                                <td>{{ $pcat->description }}</td>
                                <td><img src="{{ asset($pcat->image) }}" alt="" width="100px" height="100px">
                                </td>
                                <td>{{ $pcat->category ? $pcat->category->title : 'Null' }}</td>
                                <td>{{ $pcat->subcategory ? $pcat->subcategory->title : 'Null' }}</td>
                                <td>{{ $pcat->brand ? $pcat->brand->title : 'Null' }}</td>
                                <td>{{ $pcat->price }}</td>
                                <td>{{ $pcat->discount }}</td>
                                <td>{{ $pcat->stock }}</td>

                                <td>{{ $pcat->created_at }}</td>
                                <td>
                                    <a href="{{ route('product.edit', $pcat->id) }}">
                                        <button class="btn btn-primary">Edit</button>
                                    </a>
                                    <form action="{{ route('product.destroy', $pcat->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('product.destroy', $pcat->id) }}">
                                            <button class="btn btn-danger">delete</button>
                                        </a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
