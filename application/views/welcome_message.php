<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>agmsoftware.id</title>

        <!-- Include multi.js -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/multi.min.css');?>">
        <script src="<?php echo base_url('dist/multi.min.js');?>"></script>

        <style>
            /* Basic styling */
            body {
                font-family: sans-serif;
            }

            .container {
                box-sizing: border-box;;
                margin: 0 auto;
                max-width: 500px;
                padding: 0 20px;
                width: 100%;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <h1>Multi Select with multi.js</h1>

             <!-- <form method=post action=welcome/simpan> -->
                <?php
                echo form_open('welcome/simpan');
                ?>

            <select multiple="multiple" name="buah[]" id="buah_select">
                <option selected="selected" disabled="disabled">Apple</option>
                <option value=Banana>Banana</option>
                <option value=Blueberry>Blueberry</option>
                <option value=Cherry>Cherry</option>
                <option value=Coconut>Coconut</option>
                <option value=Grapefruit>Grapefruit</option>
                <option value=Kiwi>Kiwi</option>
                <option value=Lemon>Lemon</option>
                <option value=Lime>Lime</option>
                <option value=Mango>Mango</option>
                <option value=Orange>Orange</option>
                <option value=Papaya>Papaya</option>
            </select>
            <br>
            <input type=submit value=Simpan>
        </form>
        </div>

        <br><bR>





        <script>
            var select = document.getElementById('buah_select');
            multi( select );
        </script>
    </body>
</html>
