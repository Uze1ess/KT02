<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('icons/font/bootstrap-icons.min.css') }}">
    <title>Artists</title>
</head>
<body>
<table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Artist name</th>
                <th scope="col">Art type</th>
                <th scope="col">Link media</th>
                <th scope="col">Cover</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
          </tr> 
        </thead>
        <tbody>
            <?php foreach($artists as $row)
                { 
            ?>
            <tr>
                <td scope="row"><?php echo "{$row->id}"; ?></td>
                <td scope="row"><?php echo "{$row->artist_name}"; ?></td>
                <td scope="row"><?php echo "{$row->art_type}"; ?></td>
                <td scope="row"><?php echo "{$row->media_link}"; ?></td>
                <td scope="row"><?php echo "{$row->cover_image}"; ?></td>
                <td><a href="{{route('artists.edit', $row->id)}}">Edit</a></td>
                <td><a data-bs-toggle="modal" data-bs-target="#id{{$row->id}}" >Delete</a></td> <!--data-bs-toggle va data-bs-target ???-->
            </tr>

            <div class="modal fade" id="id{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> <!--Cho nay danh cho delete-->
                <div class="modal-dialog">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Delete User</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                        Are you sure delete student have id: {{$row->id}}  ?
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                            <form action="{{ route('artists.destroy', $row->id )}}" method="POST" >

                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-primary"  href="">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>

        </tbody>

    </table>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>
</html>