<!Doctype html>
<html>

<head>
    <title>JQuery AJAX Call</title>

    <!--Include JQuery Libdsmkhfdjkls;lkfjkld;rary -->
    <script src="https://code.jquery.com/jquery-3.5.0.js">
    </script>
    <script>
    // When DOM is loaded this 
    // function will get executed
    $(() => {
        // function will get executed 
        // on click of submit button
        $("#submitButton").click(function(ev) {
            let form = $("#formId");
            let url = form.attr('action');
            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(),
                success: function(data) {

                    // Ajax call completed successfully
                    alert("Form Submited Successfully");
                },
                error: function(data) {

                    // Some error in ajax call
                    alert("some Error");
                }
            });
        });
    });
    </script>
</head>

<body>
    <form id='formId' action=''> 
        Name:
        <input type='text' id='nm' name='nm'>
        <br> Student ID:
        <input type='text' id='studentId' name='studentId'>
        <br> Contact No. :
        <input type='text' id='contactNumber' name='contactNumber'>
        <br>
        <button type='submit' id='submitButton'>
            Submit
        </button>
    </form>
</body>

</html>