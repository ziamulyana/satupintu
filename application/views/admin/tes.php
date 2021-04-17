<html lang="en">
<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
</head>
<body>
    <div class="row mt-5">
        <div class="col-md-6 offset-3 mt-5">
            <div class="card">
                
                <div class="card-body" style="height: 280px;">                      
                        <div class="form-group">
                            <label>Category :</label>
                            <select class="category related-post form-control" name="category[]" multiple>
                                <option value="1"> Laravel</option>
                                <option value="2"> Jquery</option>
                                <option value="3"> React</option>
                                <option value="4"> Jquery ui</option>
                                <option value="5"> Android</option>
                                <option value="6"> React Native</option>
                                <option value="7"> Vue js</option>
                                <option value="8"> Bootstrap 4</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success store-related-post btn-sm">Save</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.category').select2();
        });
    </script>
</body>
<style>
    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        background-color: #00a65a;
        
        border-radius: 4px;
        cursor: default;
        float: left;
        margin-right: 5px;
        margin-top: 5px;
        padding: 0 5px;
    }
    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
        color: #151515;
        cursor: pointer;
        display: inline-block;
        font-weight: bold;
        margin-right: 2px;
    }
</style>
</html>