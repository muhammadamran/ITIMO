<div class="row">
    <div class="col-sm-3" style="margin-top: 15px;margin-left: 15px;">
        <!-- Add Users -->
        <a href="#modal-User-Web-System" class="btn btn-sm btn-primary" data-toggle="modal" title="Add Users"><i class="fas fa-plus-circle"></i>
            <font class="f-action">Add Users</font>
        </a>
        <div class="modal fade" id="modal-User-Web-System">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="adm_user.php" method="POST">
                        <div class="modal-header">
                            <h4 class="modal-title">[Add Data] Users</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="IdUsername">Username <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="NameUsername" id="IdUsername" placeholder="Username ..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="IdPassword">Password <font style="color: red;">*</font></label>
                                            <input type="password" class="form-control" name="NamePassword" id="IdPassword" placeholder="Password ..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="IdEmail">Email <font style="color: red;">*</font></label>
                                            <input type="email" class="form-control" name="NameEmail" id="IdEmail" placeholder="Email ..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="IdRole">Role <font style="color: red;">*</font></label>
                                            <select class="form-control" name="NameRole" id="IdRole" placeholder="Role ..." required>
                                                <option value="">Choose Role</option>
                                                <option value="Admin">Admin</option>
                                                <option value="User">User</option>
                                                <option value="HRGA">HRGA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="IdBranch">Branch <font style="color: red;">*</font></label>
                                            <select class="form-control" name="NameBranch" id="IdBranch" placeholder="Branch ..." required>
                                                <option value="">Choose Branch</option>
                                                <option value="Jakarta (JKT HO)">Jakarta (JKT HO)</option>
                                                <option value="Cengkareng (CGK Office)">Cengkareng (CGK Office)</option>
                                                <option value="Cengkareng (CGK Warehouse)">Cengkareng (CGK Warehouse)</option>
                                                <option value="Cibitung Warehouse">Cibitung Warehouse</option>
                                                <option value="BTM">BTM</option>
                                                <option value="MDN">MDN</option>
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
                            <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</a>
                            <button type="submit" name="add_user" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Add Users -->
    </div>
</div>