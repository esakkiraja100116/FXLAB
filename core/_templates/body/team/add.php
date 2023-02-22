<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
    <?php
   Load::body("team","action");
    ?>
    <div class="col">
        <div class="statbox widget box box-shadow">
            <p>
            </p>
            <h5 class="font-weight-bold">Add team</h5>
            <p></p>
            <div class="widget-content widget-content-area">
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" value="1" name="add">
                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Team Name </label>
                        <input type="text" name="name" class="form-control" id="inputZip" required="">
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Leader name</label>

                        <input type="text" name="leader_name" class="form-control" id="inputZip" required>
                    </div>





                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Member one</label>

                        <select class="form-control" id="member1" onclick="getmember1()" name="member1" required>
                            <?php

                        $filter_name = unique::get_distinctdata();
                        foreach($filter_name as $key => $values){

                            ?>

                            <option value="<?=$values['id']?>"><?=$values['name']?></option>
                            <?
                            }
                            ?>

                        </select>


                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Member two</label>
                        <select class="form-control" id="member2" name="member2" onclick="getmember2()"aria-label="Default select example">
                            <option selected>Select member two</option>
                        </select>
                    </div>
           

            <div class="form-group mb-3 md-2">
                <label for="inputZip">Member three</label>
                <select class="form-control" id="member3" name="member3" onclick="getmember3()" aria-label="Default select example">
                    <option selected>Select member three </option>
                </select>
            </div>

            <div class="form-group mb-3 md-2">
                <label for="inputZip">Member four</label>
                <select class="form-control" id="member4" name="member4" aria-label="Default select example">
                    <option selected>Select member four </option>
                </select>
            </div>
        </div>



        <!-- <center> -->
        <button type="submit" class="btn  btn-primary mt-3"> Submit </button>
        <!-- </center> -->

        </form>
    </div>
</div>
</div>
</div>