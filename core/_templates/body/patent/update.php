<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
    <?php
        
        $id = $_GET['id'];
        $patent = new unique("patent", $id);

        Load::body("patent","action");
    ?>
    <div class="col">
        <div class="statbox widget box box-shadow">
            <p>
            </p>
            <h5 class="font-weight-bold">Update Patent</h5>
            <div class="widget-content widget-content-area">
                <form action="" method="POST">
                <div class="form-group mb-3 md-2">
                        <label for="inputZip">User_id</label>

                        <input type="text" name="user_id" value="<?=$patent->getName()?>" class="form-control" id="inputZip" required placeholder="Enter the user_id">
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Name </label>
                        <input name="update" type="hidden" value="1">
                        <input name="id" value="<?=$id?>" type="hidden">
                        <input type="text" name="name" value="<?=$comp->getName()?>" class="form-control" id="inputZip"
                            required="">
                    </div>
                   
                  

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Name</label>

                        <input type="text" name="name" class="form-control" id="inputZip" required placeholder="Enter the name of the patent">
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Description</label>

                        <input type="text" name="description" class="form-control" id="inputZip" required placeholder="Enter the description">
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Reference URL</label>

                        <input type="text" name="ref_url" class="form-control" id="inputZip" required placeholder="Enter the ">
                    </div>
                    <!-- skip  -->
                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Date</label>

                        <input type="date" name="date" value="<?=$comp->getDate()?>" class="form-control" id="inputZip"
                            required="">
                    </div>
                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Organizer</label>

                        <input type="text" name="org" value="<?=$comp->getOrganizer()?>" class="form-control" id="inputZip"
                            required="">
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Reporting idea</label>

                        <textarea type="text" name="report_idea" rows="2" cols="50" class="form-control" value="" id="inputZip" required >
                        <?= $comp->getReportingIdea()?>
                        </textarea>
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Review</label>

                        <textarea type="text" name="review" rows="2" cols="50" class="form-control" value="" id="inputZip" required >
                        <?= $comp->getReview()?>
                        </textarea>
                    </div>

                    <div class="form-group mb-3 md-2">
                        <label for="inputZip">Venue</label>

                        <input type="text" name="venue" value="<?=$comp->getVenue()?>" class="form-control" id="inputZip"
                            required="">
                    </div>

                   
                  


                    <center>
                        <button type="submit" class="btn text-center btn-primary mt-3"> Submit </button>
                    </center>

                </form>
            </div>
        </div>
    </div>
</div>