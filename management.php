<?php include 'partial/header.php'; ?>
    <?php include 'partial/sidebar.php'; ?>

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4 class="card-title"
                                                    style="font-size: 18px;
                                                    color:#006500">Fax Out Entry</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="form-control select2">
                                                    <option>UNIT</option>
                                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                                        <option value="AK">Alaska</option>
                                                        <option value="HI">Hawaii</option>
                                                    </optgroup>
                                                   
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="form-control select2">
                                                    <option>REMARK</option>
                                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                                        <option value="AK">Alaska</option>
                                                        <option value="HI">Hawaii</option>
                                                    </optgroup>
                                                   
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="validationCustom01"></label>
                                                <input type="text"
                                                    class="form-control"
                                                    id="validationCustom01"
                                                    placeholder="RECEIVING NUMBER" value=""required>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="validationCustom02">
                                                </label>
                                                <input type="text"
                                                    class="form-control"
                                                    id="validationCustom02"
                                                    placeholder="DATE & TIME"
                                                    value=""
                                                    required>

                                            </div>
                                        </div>
                                    </div>


                                    <button class="btn btn-primary"
                                        style="margin-left: 0px;
                                        background-color:#006500 ;width: 200px;
                                        margin-left: 401px ;
                                        type="save">SAVE</button>


                                </div>
                            </div>
                        </div>

                        <?php include 'partial/footer.php'; ?>