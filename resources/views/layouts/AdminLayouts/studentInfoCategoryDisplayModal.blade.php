<div class="modal fade " id="studentInfoCategoryDisplayModal" tabindex="-1" role="dialog" aria-labelledby="acceptConfirmationModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content bg-secondary text-white">
            <div class="modal-header">
                Select Category
            </div>
            <div class="modal-body ">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card bg-dark">
                                <div class="card-header bg-danger">
                                    Basic Info
                                </div>
                                <div class="card-footer">
                                    <form action="{{url('StudentDetailsEdit')}}" method="post">
                                        <input type="hidden" id="sid" name="sid">
                                        <a class="btn btn-outline-orange" data-toggle="tooltip" data-placement="bottom" title="Student's basic information" ty>View</a>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-dark">
                                <div class="card-header bg-info">
                                    Payments
                                </div>
                                <div class="card-footer">
                                    <a href="#" id="submit" class="btn btn-outline-orange" data-toggle="tooltip" data-placement="bottom" title="Student's payment details">View</a>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-dark">
                                <div class="card-header bg-success">
                                    Progress
                                </div>
                                <div class="card-footer">

                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</div>