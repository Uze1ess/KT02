<body>
<div class="container">
    <div class="row">
        <form  action="{{  route('authors.update',  $author->id)  }}"  method="POST"> 
            @csrf
            @method('PUT')
            
            <div  class="form-group">
                <label  for="name">Name:</label>
                <input	type="text"	name="name"	class="form-control"	value="{{ $author->name  }}"  required>
            </div>
                
            <div  class="form-group">
                <button  type="submit"  class="btn  btn-primary">Update</button>
            </div>
        </form>
            
    </div>
</div>
    
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>

</body>