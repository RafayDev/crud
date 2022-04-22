<!doctype html>
<html lang="en">
  <head>
    <title>Products</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <h1>Products</h1>
  <a name="add" id="add" class="btn btn-primary" href="{{route('add')}}" role="button">
    Add Product
</a>
    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>Id</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->discount}}</td>
                    <td>
                        <a name="delete" id="" class="btn btn-danger" href="{{url('/')}}/delete/{{$product->id}}" role="button">Delete</a>
                        <a name="edit" id="" class="btn btn-primary" href="{{url('/')}}/edit/{{$product->id}}" role="button">Edit</a>
                </td>
             
            </tbody>
            @endforeach
    </table>
<a name="logout" id="" class="btn btn-primary" href="{{route('logout')}}" role="button">Logout</a>

</html>