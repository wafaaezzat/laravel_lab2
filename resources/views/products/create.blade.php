<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Create Product</h2>
  <form method="POST" action="{{route('products.store',$categoryid)}}">
    <div class="mb-3 mt-3">
    @csrf
    <label for="cat">Product:</label>
      <input type="text" class="form-control" id="cat" placeholder="Enter product" name="productName">
      <label for="cat1">Description:</label>
      <input type="text" class="form-control" id="cat1" placeholder="Enter description" name="productdesc">
      <label for="cat2">slug:</label>
      <input type="text" class="form-control" id="cat2" placeholder="Enter slug" name="productslug">
    </div>
    <button type="submit" class="btn btn-info">Submit</button>
  </form>
</div>

</body>
</html>
