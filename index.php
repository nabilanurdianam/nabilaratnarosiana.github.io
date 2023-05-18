<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORM BIODATA KELAS</h1>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td>
                <select name="" id="">
                    <option value="">11 RPL 1</option>
                    <option value="">11 RPL 2</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
        </tr>
    </table>
</body>
</html>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Form Biodata Siswa</h1>

    <div class="container">
        <form action="/action_page.php">
            <div class="row">
                <div class="col-25">
                    <label for="fname">Nama:</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name="firstname" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="country">Kelas:</label>
                </div>
                <div class="col-75">
                    <select id="country" name="country">
                        <option value="11RPL1">11 RPL 1</option>
                        <option value="11RPL2">11 RPL 2</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">Alamat:</label>
                </div>`
                <div class="col-75">
                    <textarea id="subject" name="subject" style="height:200px" placeholder=""></textarea>
                </div>
            </div>
            <br>
            <div class="row">
                <input type="submit" value="Kirim">
            </div>
        </form>
    </div>

</body>

</html>