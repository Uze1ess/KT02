<body>
<div class="container">
    <div class="row">
        <form action="{{  route('authors.store')  }}"  method="POST">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Name:</label>
              <input type="text"  name="name" class="form-control">
              
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Bio:</label>
              <textarea  name="bio"  class="form-control"  required></textarea>
            </div>
    
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>
    
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>

</body>