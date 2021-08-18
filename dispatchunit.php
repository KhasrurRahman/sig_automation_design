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
                                        
                                        <div class="col-md-4">
                                            <h4 class="card-title" style="font-size: 18px; color:#006500">DISPATCH DELIVERY TO UNIT</h4 >
                                            <div class="form-group">
                                              
                                                <select class="form-control select2" style =" width: 488px; height: 40PX;">
                                                    <option>SELECT UNIT</option>
                                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                                        <option value="AK">Alaska</option>
                                                        <option value="HI">Hawaii</option>
                                                    </optgroup>
                                                   
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-4" style="margin-left: 344px; margin-bottom: 20px;">
                                            <h4 style="color: #006500;">DR PHOTO</h4>
                                            <img src="assets/images/brands/github.png" alt="Flowers in Chania" width="100" height="113">
                                        </div>
                                       
                                    </div>
                                  
                                    

                                    <table id="datatable" class="table  table-striped"
                                        style="border-collapse: collapse;
                                        border-spacing: 0; width: 100%;">
                                        <thead style="background-color: #006500; color: white;">
                                            <tr>
                                                <th>Ser</th>
                                                <th>Letter Number </th>
                                                <th>Check</th>
                                                
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>86 Signal</td>
                                               
                                                    <td>
                                                        <div
                                                        class="custom-control
                                                        custom-checkbox">
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="customCheck2">
                                                        <label
                                                            class="custom-control-label"
                                                            for="customCheck2">&nbsp;</label>
                                                    </div>
                                                </td>
                                               
                                            </tr>
                                            <tr>
                                                <td>02</td>
                                                <td>11 Signal</td>
                                               
                                                    <td>
                                                        <div
                                                        class="custom-control
                                                        custom-checkbox">
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="customCheck3">
                                                        <label
                                                            class="custom-control-label"
                                                            for="customCheck3">&nbsp;</label>
                                                    </div>
                                                </td>
                                               
                                            </tr>
                                            <tr>
                                                <td>03</td>
                                                <td>10 Signal</td>
                                               
                                                    <td>
                                                        <div
                                                        class="custom-control
                                                        custom-checkbox">
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="customCheck4">
                                                        <label
                                                            class="custom-control-label"
                                                            for="customCheck4">&nbsp;</label>
                                                    </div>
                                                </td>
                                               
                                            </tr>
                                            <tr>
                                                <td>04</td>
                                                <td>ATSO</td>
                                               
                                                    <td>
                                                        <div
                                                        class="custom-control
                                                        custom-checkbox">
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="customCheck5">
                                                        <label
                                                            class="custom-control-label"
                                                            for="customCheck5">&nbsp;</label>
                                                    </div>
                                                </td>
                                               
                                            </tr>
                                            <tr>
                                                <td>05</td>
                                                <td>CMH</td>
                                               
                                                    <td>
                                                        <div
                                                        class="custom-control
                                                        custom-checkbox">
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="customCheck6">
                                                        <label
                                                            class="custom-control-label"
                                                            for="customCheck6">&nbsp;</label>
                                                    </div>
                                                </td>
                                               
                                            </tr>
                                            <tr>
                                                <td>06</td>
                                                <td>4 Signal</td>
                                               
                                                    <td>
                                                        <div
                                                        class="custom-control
                                                        custom-checkbox">
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="customCheck7">
                                                        <label
                                                            class="custom-control-label"
                                                            for="customCheck7">&nbsp;</label>
                                                    </div>
                                                </td>
                                               
                                            </tr>


                                        </tbody>
                                    </table>

                                    <button class="btn btn-primary" style=" background-color:#006500 ;width: 200px;
                                    type="submit">Scan DR ID </button>

                                    <button class="btn btn-primary" style="margin-left: 0px; background-color:#006500 ;width: 200px; margin-left: 100px ;
                                    type="submit">Print</button>

                                    <button class="btn btn-primary" style="margin-left: 0px; background-color:#006500;width: 200px;margin-left: 200px ;
                                        type="submit">Check All</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>

        <?php include 'partial/footer.php'; ?>