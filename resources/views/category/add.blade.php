
<div class="modal fade" id="addModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog  modal-md" role="document">
        <form action="{{route('admin.category.add')}}" method="post" enctype="multipart/form-data">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Game</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-10 offset-1">

                                @csrf
                                <label >
                                    Name
                                </label>

                                <br>

                                <input name="name" class="form-control" required >



                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col-md-10 offset-1">
                            <label >
                                Category
                            </label>
                            <br>
                            <select class="form-control" name="type" required>

                                <option value="Mobile Game">Mobile Game</option>
                                <option value="PC Game">PC Game</option>

                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <div class="col-md-10 offset-1">
                            <label >
                                Thumbnail Image
                            </label><br>
                            <input type="file" class="form-control" required name="image">
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <a > <button type="submit" class="btn btn-primary">Add </button></a>
            </div>
        </div>
        </form>
    </div>
</div>

