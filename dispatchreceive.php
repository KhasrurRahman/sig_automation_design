<?php include 'partial/header.php'; ?>
<?php include 'partial/sidebar.php'; ?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

















        
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>DESPATCH RECEIVE AT SIGNAL CENTER </h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom01"></label>
                                            <input type="text" class="form-control" id="validationCustom01" placeholder="SERIAL NUMBER" value="" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select class="form-control select2">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select class="form-control select2">
                                                <option>DR NAME</option>
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>

                                            </select>

                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-4">
                                            <div class="form-check form-check-right ">
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Despatch
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-check form-check-right">
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                <label class="form-check-label" for="exampleRadios2">
                                                    Fax
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-check form-check-right">
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                <label class="form-check-label" for="exampleRadios3">
                                                    Message
                                                </label>
                                            </div>
                                        </div>


                                    </div>

                                    <div>
                                        <button class="btn btn-primary mt-2" type="submit">Print</button>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <img src="assets/images/crypto/blog/icons8-client-management.gif" alt="..." class="img-thumbnail">
                                    <div>
                                        <button class="btn btn-primary mt-2" type="submit">Take Photo</button>
                                    </div>
                                </div>


                            </div>



                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <?php include 'partial/footer.php'; ?>