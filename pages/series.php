<?php include "pages/includes/header.php";?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">First Number</label>
                                <div class="col-md-8">
                                    <input type="number" name="firstNumber" class="form-control">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Last Number</label>
                                <div class="col-md-8">
                                    <input type="number" name="lastNumber" class="form-control">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Select Type</label>
                                <div class="col-md-8">
                                    <label for="" ><input type="radio" name="type" value="word" >Word count</label>
                                    <label for="" ><input type="radio" name="type" value="character" >character count</label>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Result</label>
                                <div class="col-md-8">
                                    <textarea class="form-control" readonly cols="30" rows="10">

                                        <?php echo isset() $giveWord\n\$wordCount\n\$characterCount :   ?>
<!--                                        --><?php //echo isset($result)? $result["giveWord"] : '' ?><!-- <br/>-->
                                        <!--                                        --><?php //echo isset($result)? $result["wordCount"] : '' ?><!-- <br/>-->
                                        <!--                                        --><?php //echo isset($result)? $result["characterCount"] : '' ?><!-- <br/>-->
                                    </textarea>

                                    <!--                                    <input type="text" readonly value="--><?php //echo isset($result) ? $result: '' ?><!--" class="form-control">-->
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="series" class="btn btn-outline-success btn-block" value="get result">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<?php include "pages/includes/footer.php";?>
