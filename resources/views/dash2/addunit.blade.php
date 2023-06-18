<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!DOCTYPE html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real State Add Unit Form</title>
    <link rel="stylesheet" href="{{asset('css/DASH/addunit.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-1ZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9s+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="./script.js" type="text/javascript"></script>
</head>

<body>
    <div class="wrapper">
        <div class="title">Add Unit Form </div>
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
        <form method="POST" data-netlify="true" action="{{ route('unit.store') }}" enctype="multipart/form-data">
            <div class="form">
                @csrf
                <div class="inputfield"> <label for="">Unit Name</label>
                    <input type="text" class="input" name="Name" placeholder="Enter your Unit Name" required
                        placeholder="Enter your Unit Name">
                </div>
                <div class="inputfield"> <label for="">Unit Price</label>
                    <input type="numeric " class="input" name="Price" placeholder="Enter your Unit Price"  required placeholder="Enter your Unit Price" title="Enter numbers only">
                </div>
                <div class="inputfield">
                    <label for="units type" >units type:</label>
                    <select id="units" name="units" class="input">
                        <option value="">       </option>
                        <option value="residential">Residential</option>
                        <option value="commercial">Commercial</option>
                    </select>
                    </div>
            <div>

                <div class="inputfield">
                    <label for="">Upload Image</label>
                    <input type="file" class="input" name="file" id="">
                </div>
                <div class="inputfield"> <label>Unit Details</label>
                    <textarea class="textarea" name="address" id="" cols="30" rows="5"
                        placeholder="Enter your Details for This Unit" pattern="^[a-zA-Z][a-zA-Z0-9-_.]{5,12}$"
                        maxlength="100" required>
                    </textarea>
                </div>

                <div class="inputfield btns" id="btn">
                    <button type="submit" value="Add Unit" class="btn">
                        Add
                    </button>

                </div>
        </form>
    </div>
</body>

</html>
