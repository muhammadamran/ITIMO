<div class="row">
    <div class="col-sm-3" style="margin-top: 15px;margin-left: 15px;">
        <!-- Add Branch -->
        <a href="#modal-Branch" class="btn btn-sm btn-primary" data-toggle="modal" title="Add Branch"><i class="fas fa-plus-circle"></i>
            <font class="f-action">Add Branch</font>
        </a>
        <div class="modal fade" id="modal-Branch">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="references_branch.php" method="POST">
                        <div class="modal-header">
                            <h4 class="modal-title">[Add Data] Branch</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="IdBranch">Branch <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="NameBranch" id="IdBranch" onkeyup="myFunction()" placeholder="Branch ..." required />
                                            <small><i>** write character + hold shift</i></small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="IdDescriptionBranch">Description Branch <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="NameDescriptionBranch" id="IdDescriptionBranch" placeholder="Description Branch ..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="IdTelepone">Telepone <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="NameTelepone" id="IdTelepone" placeholder="Telepone ..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="IdFax">Fax </label>
                                            <input type="text" class="form-control" name="NameFax" id="IdFax" placeholder="Fax ..." />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="IdEmail">Email </label>
                                            <input type="email" class="form-control" name="NameEmail" id="IdEmail" placeholder="Email ..." />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="IdAddress">Address <font style="color: red;">*</font></label>
                                            <textarea type="text" class="form-control" name="NameAddress" id="IdAddress" placeholder="Address ..." required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="IdProvince">Province <font style="color: red;">*</font></label>
                                            <select class="form-control" name="NameProvince" id="IdProvince" placeholder="Province ..." required>
                                                <option value="">Choose Province</option>
                                                <option value="Nanggroe Aceh Darussalam"> Nanggroe Aceh Darussalam</option>
                                                <option value="Sumatera Utara"> Sumatera Utara</option>
                                                <option value="Sumatera Selatan"> Sumatera Selatan</option>
                                                <option value="Sumatera Barat"> Sumatera Barat</option>
                                                <option value="Bengkulu"> Bengkulu</option>
                                                <option value="Riau"> Riau</option>
                                                <option value="Kepulauan"> Kepulauan</option>
                                                <option value="Jambi"> Jambi</option>
                                                <option value="Lampung"> Lampung</option>
                                                <option value="Bangka Belitung"> Bangka Belitung</option>
                                                <option value="Kalimantan Barat"> Kalimantan Barat</option>
                                                <option value="Kalimantan Timur"> Kalimantan Timur</option>
                                                <option value="Kalimantan Selatan"> Kalimantan Selatan</option>
                                                <option value="Kalimantan Tengah"> Kalimantan Tengah</option>
                                                <option value="Kalimantan Utara"> Kalimantan Utara</option>
                                                <option value="Banten"> Banten</option>
                                                <option value="DKI Jakarta"> DKI Jakarta</option>
                                                <option value="Jawa Barat"> Jawa Barat</option>
                                                <option value="Jawa Tengah"> Jawa Tengah</option>
                                                <option value="Daerah Istimewa Yogyakarta"> Daerah Istimewa Yogyakarta</option>
                                                <option value="Jawa Timur"> Jawa Timur</option>
                                                <option value="Bali"> Bali</option>
                                                <option value="Nusa Tenggara Timur"> Nusa Tenggara Timur</option>
                                                <option value="Nusa Tenggara Barat"> Nusa Tenggara Barat</option>
                                                <option value="Gorontalo"> Gorontalo</option>
                                                <option value="Sulawesi Barat"> Sulawesi Barat</option>
                                                <option value="Sulawesi Tengah"> Sulawesi Tengah</option>
                                                <option value="Sulawesi Utara"> Sulawesi Utara</option>
                                                <option value="Sulawesi Tenggara"> Sulawesi Tenggara</option>
                                                <option value="Sulawesi Selatan"> Sulawesi Selatan</option>
                                                <option value="Maluku Utara"> Maluku Utara</option>
                                                <option value="Maluku"> Maluku</option>
                                                <option value="Papua Barat"> Papua Barat</option>
                                                <option value="Papua"> Papua</option>
                                                <option value="Papua Tengah"> Papua Tengah</option>
                                                <option value="Papua Pegunungan"> Papua Pegunungan</option>
                                                <option value="Papua Selatan"> Papua Selatan</option>
                                                <option value="Papua Barat Daya"> Papua Barat Day</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="IdPoscode">Poscode <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="NamePoscode" id="IdPoscode" placeholder="Poscode ..." required />
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
                            <button type="submit" name="add_branch" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Add Users -->
    </div>
</div>