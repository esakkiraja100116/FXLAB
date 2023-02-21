<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
    <?php
   Load::body("user","action");
    ?>
    <div class="col">
        <div class="statbox widget box box-shadow">
            <p>
            </p>
            <h5 class="font-weight-bold">Add user</h5>
            <p></p>
            <div class="widget-content widget-content-area">
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" value="1" name="add">
                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Name </label>
                        <input type="text" name="name" class="form-control" id="inputZip" required="">
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Department</label>

                        <select class="form-control" id="exampleFormControlSelect1">
                            <?php
                              $dept = new Unique("department","-");
                              $dept_name = $dept->getTotal();
                              console::log($dept_name[0]['name']);
                            ?>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>


                    <!-- <center> -->
                        <button type="submit" class="btn  btn-primary mt-3"> Submit </button>
                    <!-- </center> -->

                </form>
            </div>
        </div>
    </div>
</div>