<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Category</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <form method="POST" action="{{route('products.update',$product->id)}}">
    <div class="mb-3 mt-3">
    @csrf
      <label for="product">Category:</label>
      <input type="text" class="form-control" id="product" placeholder="Enter category" name="productName" value="{{$product->name}}">
    </div>
    <button type="submit" class="btn btn-info">Update</button>
  </form>
</div>

</body>
</html>
