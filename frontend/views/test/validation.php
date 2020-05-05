<?php
if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '<pre>';
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <h1>Test</h1>
            <form action="" method="post">
<!--                <div class="form-group">-->
<!--                    <label for="exampleInput">Test attribute</label>-->
<!--                    <input name="testAttribute" type="text" class="form-control" id="exampleInput" aria-describedby="Help">-->
<!--                </div>-->

<!--                <div class="form-group">-->
<!--                    <label for="exampleInput">Start value</label>-->
<!--                    <input name="startValue" type="text" class="form-control" id="exampleInput" aria-describedby="Help">-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <label for="exampleInput">End value</label>-->
<!--                    <input name="endValue" type="text" class="form-control" id="exampleInput" aria-describedby="Help">-->
<!--                </div>-->

                <div class="form-check">
                    <input name="options[]" class="form-check-input" type="checkbox" value="1" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Wifi
                    </label>
                </div>
                <div class="form-check">
                    <input name="options[]" class="form-check-input" type="checkbox" value="2" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Big window
                    </label>
                </div>
                <div class="form-check">
                    <input name="options[]" class="form-check-input" type="checkbox" value="test" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Ice cream:
                    </label>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>