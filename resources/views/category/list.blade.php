


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Store</title>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-info navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
        @foreach ($categories as $category)
      <li class="nav-item">
        <a class="nav-link active" href="#category1">{{$category->name}}</a>
      </li>
        @endforeach
    </ul>
  </div>
</nav>


<div class="container mt-3">
  <table class="table table-hover">
    <tbody>        
    @foreach ($categories as $category)
      <tr class="table-danger">
        <td>
            <div class="mx-auto text-center fs-1 mt-5" style="height: 100px;">{{$category->name}}</div>
       </td>
       <td>
           <form action="{{route('categories.delete', $category->id)}}" method="post">
            @csrf   
            @method('delete')
            <input class="btn btn-danger mt-5" value="Delete category" type="submit">
           </form>
       </td>
       <td>
            <a href="{{route('categories.updateform', $category->id)}}"><input class="btn btn-dark mt-5" value="Update category" type="submit"></a>
       </td>

       <td>
            <a href="{{route('categories.products.list', $category->id)}}"><input class="btn btn-success mt-5" value="Show Products" type="submit"></a>
       </td>
      
    @endforeach

    </tbody>
  </table>

  <a href="{{route('categories.create')}}"><input class="btn btn-info" value="Add category"></a>
</div>



</body>
</html>
