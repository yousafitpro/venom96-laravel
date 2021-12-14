
<div class="modal fade" id="addModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog  modal-md" role="document">
        <form action="{{route('admin.category.add')}}" method="post">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">

                                @csrf
                                <label >
                                    Name
                                </label>

                                <br>

                                <input name="name" class="form-control"  >



                        </div>
                        <div class="col-md-1"></div>
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

