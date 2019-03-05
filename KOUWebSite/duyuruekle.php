<form action="duyurukaydet.php" method="post">
	<table><tr><td><textarea name="duyuru">
    </textarea>
    </td>
    </tr><tr>
    <td>
    <input type="submit" value="duyuru kaydet">
    </td>
    </tr>
    </table>
 </form>
 
 
<!DOCTYPE html>
<html lang="tr">
<head>
<link rel="stylesheet" href="/vendor/bootstrap-combobox/css/bootstrap-combobox.css">
<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style3.css">
</head>
<body>
<script src="/vendor/bootstrap-combobox/js/bootstrap-combobox.js"></script>


<div class = "container">
<div align = "center">
<div class="page-header">
			<h1>BİLMİYORUM YAAA</h1>
		</div>
		</div><!--center-->

<form id="productForm" method="post" class="form-horizontal" action = "duyurukaydet.php">
    <div class="form-group">
        <label class="col-xs-3 control-label">Başlık</label>
        <div class="col-xs-8">
            <textarea name="baslik" class="form-control" rows="2"></textarea>
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-xs-3 control-label">Metin</label>
        <div class="col-xs-8">
            <textarea name="metin" class="form-control" rows="10"></textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">İşlem Türü </label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="islemTuru">
                <option value="">İşlem Türünü Seçiniz</option>
                <option value="d">Duyurular</option>
                <option value="e">Etkinlikler</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-5 col-xs-offset-3">
            <input type="submit"  name="gonder" value="Kaydet"></>
        </div>
    </div>
</form>
</div>

<!-- Latest compiled and minified JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>	
</html>