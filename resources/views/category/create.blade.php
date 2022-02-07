


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create Category</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Create Category</h2>
  <form method="POST" action="{{route('categories.store')}}">
    <div class="mb-3 mt-3">
    @csrf
      <label for="category">CategoryName:</label>
      <input type="text" class="form-control" id="category" placeholder="Enter category" name="categoryName">
    </div>
    <button type="submit" class="btn btn-info">Submit</button>
  </form>
</div>

</body>
</html>