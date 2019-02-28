<div class="modal" id="updateSubjectModal" onload="onLoadBody">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark text-white">
            <div class="modal-header bg-warning">

                <h5 class="card-title m-b-0">Update Subject Details</h5>

            </div>
            <form  action="#" method="post">
                {{method_field('patch')}}
                {{csrf_field()}}
            <div class="modal-body bg-dark">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">



                                <input type="hidden" id="book_id" name="bookID">
                                <div class="card-body bg-dark">
                                    <div class="card-body bg-info text-white mb-3">
                                        <h5><i class="fas fa-info-circle"></i> Please enter the information in the designated boxes. Click on the SUBMIT button when completed.
                                            <Text style="color: red">*</Text>   indicates required field.</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bookName" class="col-sm-3 text-right control-label col-form-label">Subject ID</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="sub_id" name="bookname" value="" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="isbn" class="col-sm-3 text-right control-label col-form-label">Subject Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="sub_name" name="isbn" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="author" class="col-sm-3 text-right control-label col-form-label">Semester</label>
                                        <div class="col-sm-9">
                                            <select id="sub_sem" name="sub_sem" class="selectpicker form-control" required>
                                                <option selected disabled>- Select Semester -</option>
                                                <option  value="Semester_1">Semester 1</option>
                                                <option  value="Semester_2">Semester 2</option>
                                                <option  value="Semester_3">Semester 3</option>
                                                <option  value="Semester_4">Semester 4</option>
                                                <option  value="Semester_5">Semester 5</option>
                                                <option  value="Semester_6">Semester 6</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="barcode" class="col-sm-3 text-right control-label col-form-label">Credits</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="sub_credits" name="barcode" >
                                        </div>
                                    </div>


                                </div>





                        </div>



                    </div>

                </div>


            </div>
            <div class="modal-footer">

                <button type="submit" class="btn btn-success">Update</button>
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-warning">Re-Generate</button>
            </div>


            </form>

        </div>

    </div>
</div>
</div>