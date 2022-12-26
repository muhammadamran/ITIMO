<div class="row">
    <div class="col-sm-3" style="margin-top: 15px;margin-left: 15px;">
        <!-- Add Employee General Manager -->
        <a href="#modal-Employee-General-Manager" class="btn btn-sm btn-primary" data-toggle="modal" title="Add Employee General Manager"><i class="fas fa-plus-circle"></i>
            <font class="f-action">Add Employee General Manager</font>
        </a>
        <div class="modal fade" id="modal-Employee-General-Manager">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="adm_email.php" method="POST">
                        <div class="modal-header">
                            <h4 class="modal-title">[Add Data] Employee General Manager</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="IdEmail">Email <font style="color: red;">*</font></label>
                                            <input type="email" class="form-control" name="NameEmail" id="IdEmail" placeholder="Email ..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="IdScope">Scope <font style="color: red;">*</font></label>
                                            <select class="form-control" name="NameScope" id="IdScope" placeholder="Scope ..." required>
                                                <option value="">Choose Scope</option>
                                                <option value="IT">IT</option>
                                                <option value="HR">HR</option>
                                                <option value="GA">GA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <font style="color: red;">*</font> <i>Required.</i>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="modal-footer">
                            <a href="javascript:;" class="btn btn-light" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</a>
                            <button type="submit" name="add_email" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Employee General Manager -->
    </div>
</div>