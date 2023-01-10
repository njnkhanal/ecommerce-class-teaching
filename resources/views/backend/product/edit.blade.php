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
            <div class="col-md-12 col-12">
                <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    @foreach ($errors->all() as $message)
                        <div class="danger alert-danger">
                            {{ $message }}
                        </div>
                    @endforeach
                    <div class="form-group">
                        <label for="exampleInputEmail1">product title</label>
                        <input type="text" class="form-control" name="title" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInput">product description</label>
                        <textarea name="description" id="exampleInput" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">product category-id</label>
                        <input type="number" class="form-control" name="category_id" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">product sub-category-id</label>
                        <input type="number" class="form-control" name="sub_category_id" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">product brand-id</label>
                        <input type="number" class="form-control" name="brand_id" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">product price</label>
                        <input type="number" class="form-control" name="price" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">product discount</label>
                        <input type="number" class="form-control" name="discount" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">product stock</label>
                        <input type="number" class="form-control" name="stock" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <button type="sumbit" class="btn btn-primary">sumbit</button>
                    <a href="{{ route('product.index') }}">
                        <button type="button" class="btn btn-primary">index page</button>
                    </a>
                </form>
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
