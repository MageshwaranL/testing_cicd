<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <title>Document</title>
    <style>
        #tags
        {
        width: 200px;
        }
    </style>
</head>
<body>
    <!-- for DB Connectivity store value in text datatype -->
    <select id='tags' multiple>
        <option value="Vijay">Vijay</option>
        <option value="Ajith">Ajith</option>
        <option value="Suriya">Suriya</option>
       
    </select>
     <button id="send">Send to Console</button>   
     <script>
        $('#send').click(function(){

            var conceptName = $('#tags').val();
            console.log(conceptName);
        
        });
        var ans=document.getElementById('tags');
        $("#tags").select2({
            tags: true,
            createTag: function (params) {
                return {
                id: params.term,
                text: params.term,
                newOption: true
                }
            },
            templateResult: function (data) {
                var $result = $("<span></span>");

                $result.text(data.text);

                if (data.newOption) {
                $result.append(" <em>(New)</em>");
                }

                return $result;
            }
            });
     </script>   
</body>
</html>