<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('icons/font/bootstrap-icons.min.css') }}">
</head>
<body>
<div class="container">
    <div class="row">
        <form  action="{{   route('artists.update',  $artist->id)  }}"  method="POST"> 
            @csrf
            @method('PUT')
            
            <div  class="form-group">
                <label  for="name">Name:</label>
                <input	type="text"	name="name"	class="form-control"	value="{{ $artist->artist_name  }}"  required>
            </div>
                
            <div  class="form-group">
                <button  type="submit"  class="btn  btn-primary">Update</button>
            </div>
        </form>
            
    </div>
</div>
    
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>

</body>
</html>
