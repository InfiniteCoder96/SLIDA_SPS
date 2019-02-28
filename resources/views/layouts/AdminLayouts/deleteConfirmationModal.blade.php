<div class="modal fade " id="deleteConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content bg-danger text-white">

            <div class="modal-body ">
                <p>Are you sure you want to <strong>D E N Y</strong> this admission request ?</p>
            </div>
            <div class="modal-footer ">

                <form action="{{action('TemporaryStudentController@destroy', 'test')}}" method="post">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    {{csrf_field()}}
                    <input name="temp_sid" id="temp_sid" type="hidden" value="">
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="submit" class="btn btn-orange">Deny</button>
                </form>

            </div>
        </div>
    </div>
</div>