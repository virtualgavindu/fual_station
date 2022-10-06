<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="author">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"/>
    <link href="css/main.css" rel="stylesheet"/>
</head>
<body>
<div class="s131">
    <form>
        <div class="inner-form">
            <div class="input-field first-wrap"><input id="search" type="text" placeholder="Search for Fuel Station"/>
            </div>
            <div class="input-field second-wrap">
                <div class="input-select"><select data-trigger="" name="choices-single-defaul">
                        <option placeholder="">Colombo</option>
                        <option>Galle</option>
                        <option>Matara</option>
                        <option>Kandy</option>
                        <option>Gampaha</option>
                        <option>Kalutara</option>
                        <option>Matale</option>
                        <option>Nuwara Eliya</option>
                        <option>Hambanthota</option>
                        <option>Jaffna</option>
                        <option>Kilinochchi</option>
                        <option>Mannar</option>
                        <option>Vavuniya</option>
                        <option>Batticaloa</option>
                        <option>Mullaitivu</option>
                        <option>Ampara</option>
                        <option>Trincomalee</option>
                        <option>Kurunegala</option>
                        <option>Puttalam</option>
                        <option>Anuradhapura</option>
                        <option>Polonnaruwa</option>
                        <option>Badulla</option>
                        <option>monaragala</option>
                        <option>Rathnapura</option>
                        <option>Kegalle</option>
                    </select></div>
            </div>
            <div class="input-field third-wrap">
                <button class="btn-search" type="button">SEARCH</button>
            </div>
        </div>
    </form>
</div>
<script src="js/extention/choices.js"></script>
<script>    const choices = new Choices('[data-trigger]',
        {
            searchEnabled: false
        });
</script>
</body></html>