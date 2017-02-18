<?php
$DB = new PDO('sqlite:db/petition.sqlite3');
	if ($_POST && $_POST['id']) {
		die(json_encode(ajouterSignature($_POST)));
	}
	if ($_GET && $_GET['id']) {
		die(json_encode(signatureParId($_GET['id'])));
	}
	/*
	if ($_GET['nbr']) {
		die(json_encode(signatures($_GET['nbr'], $_GET['debut'])));
	}*/
?>
<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
قانون 52 : وقيت باش المقاربة تتبدل!
</title>

<link href="https://fonts.googleapis.com/css?family=Aref+Ruqaa" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet"> 
    <!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
body {
    font-family: 'Cairo', sans-serif;
font-size: 300%;
}
#texte {
    font-family: 'Aref Ruqaa', serif;
}
#texte h1 {
    font-size: 300%;
    padding-bottom: 30px;
}
.btn {
    font-size: 200%;
    height: 300%;
}

</style>
  </head>
  <body dir="rtl">
<div class="container" id="texte">
<h2>
قانون 52
</h2>
<h1>
 وقيت باش المقاربة تتبدل!
</h1>
<p>
من 1992 قرابة 120.000 مواطن و عايلاتهم شافو حياتهم تدمرت في جرة سيڤارو زطلة. برشا شباب مستقبلهم مشا, بطاقة عدد 3 تمسخط, بطلو قرايتهم, خسرو خدمهم, من ناس عادية لقاو رواحهم عايشين مع المجرمة و الإرهابيين. هذا لكل في جرة قانون ظالم, حطو نظام بن علي باش يستعملو كأداة لقمع كل من تجرا ووقف في وجهو. قانون بطبيعتو لا دستوري خاصة في تونس ما بعد الثورة, تونس الجمهورية الثانية, تونس القرن 21.
</p>
<p>
قانون 52 ما حل حتى مشكل ادعى انو باش يحلو, بل بالعكس ملي تحط نسب استهلاك المخدرات ماشية و تزيد, خاصة عند المراهقين, و مسالك الترويج ماشية و تكبر. القانون هذا مسيطرة عليه المقاربة القمعية المسلطة على المستهلك في عوض ما تركز على آفة التهريب و منظومة الإجرام اللي تمولها.
</p>
<p>
جميع الدراسات الحديثة بينو انو القوانين الزجرية في هذا المجال عمرها ما جابت الحل للحد من ظاهرة الاستهلاك و في غالب الأحيان تساهم في إرساء إحساس عند الشباب بالنقمة على الدولة و تخلي منظومة التهريب أكثر تعقيد و عنف. و في هذا السياق البلدان اللي تبنات قوانين أكثر سلاسة و عقلانية كيف ما البرتغال و هولندا و الشيلي و الباراغواي و بعض الولايات الأمريكية شافو نسب الإجرام عندهم انخفضت بصفة كبيرة
</p>
<p>
في بلادنا ندعيو أننا نحبو نقاومو ظاهرة  المخدرات و لكن الدولة التونسية عمرها ما حطت الإمكانيات اللازمة للتحسيس و الوقاية و مرافقة المدمنين بجدية. إذن وقيت باش نتعلمو من أغلاط الماضي و نطويو صفحة الدكتاتورية و الظلم! بالأخص انو منذ الثورة و المصادقة على دستور الجمهورية الثانية, الدولة التونسية ولا من واجبها أنها ترعى و تحمي مواطنيها و تعاونهم في مجابهة المخاطر و موش تزيد تغرقهم.
</p>
<p>
جاء الوقت باش نطالبو بقانون ذكي ما يجرمش بالضرورة المستهلك و لكن يركز على المشاكل الحقيقية : التهريب! منبع الإجرام و تمويل الإرهاب.
</p>
<p>
عن طريق هته العريضة نستنجد عقلانية الحكومة و نواب الشعب و نطلب منهم اتخاذ مقاربة تقدمية, ناجعة, تتماشى مع مبادئ الديمقراطية و المواطنة بعيدا عن الإحكام المسبقة.

</p>


</div class="container">
<div>
<p>
<form>
<div class="col-sm-8">
<button class="btn form-control" type="button" data-toggle="modal" data-target="#verifier">
ثبّت تصحاحتك
</button>
</div>
<div class="col-sm-4">
<button class="btn btn-success form-control" type="button" data-toggle="modal" data-target="#signer">
صحّح
</button>
</div>
</form>
</p>
</div>

    <script src="sjcl.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<div class="modal fade" tabindex="-1" role="dialog" id="signer">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>&nbsp;
        <h4 class="modal-title">صحّح</h4>
      </div>
      <div class="modal-body">
        <p></p>
		<form>
		<label> الاسم و اللقب
		<input type="text" id="nom" class="form-control" /></label>
		<label> رقم بطاقة التعريف
		<input type="text" id="cin" class="form-control" /></label>
		<label> المهنة
		<input type="text" id="profession" class="form-control" /></label>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"> بطّلت </button>
        <button id="btn_signer" type="button" class="btn btn-primary">سجّل</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="verifier">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">ثبّت</h4>
      </div>
      <div class="modal-body">
<form>
		<label> رقم بطاقة التعريف
		<input type="text" id="cin_verif" class="form-control" /></label>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">بطّلت</button>
        <button type="button" id="btn_verif" class="btn btn-primary">ثبّت</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
$('#btn_verif').click(function (e) {
	if (estCIN($('#cin_verif').val())) {
		var id = hash($('#cin_verif').val());
		$.ajax('.', {
			method:'GET',
			data: { id: id },
			complete: function (data,status,xhr) {
				var signature = JSON.parse(data.responseText);
				$('#verifier .modal-body').html('<div class="alert alert-success" role="alert" dir="rtl">مرحبا بك '+signature.nom+'. تصحاحتك موجودة</div>');
			}
		});
	};
});
$('#btn_signer').click(function (e) {
	if (estCIN($('#cin').val())) {
		var id = hash($('#cin').val());
		$.ajax('.', {
			method:'POST',
			data: {
				id: id,
				nom: $('#nom').val(),
				profession: $('#profession').val()
			},
			complete: function (data,status,xhr) {
				$('#signer .modal-body').html('<div class="alert alert-success" role="alert" dir="rtl">سجلناك! تفقد الميل بش يجيك رابط لتأكيد العنوان</div>');
			}
		});
	}
	else {
		$('').html('<div class="alert alert-danger" role="alert" dir="rtl">هنالك خطأ في البريد الإلكتروني ، نرجو التثبت في صحة المعطيات</div>');
		$('#cin').focus();
	}
});
	
function estCIN(cin) {
	return true;
};

function hash(chaine) {
	return sjcl.codec.hex.fromBits(sjcl.hash.sha256.hash(chaine));
}
</script>

  </body>
</html>
<?php
function ajouterSignature($signature) {
	global $DB;

	$stmt = $DB->prepare('insert into signatures (id, nom, profession) values (:id, :nom, :profession)');
	$stmt->bindValue(':id', $signature['id']);
	$stmt->bindValue(':nom', $signature['nom']);
	$stmt->bindValue(':profession', $signature['profession']);
	$stmt->execute();
}

function signatureParId($id) {
	global $DB;

	$stmt = $DB->prepare('select * from signatures where id=:id');
	$stmt->bindValue(':id', $id);
	$stmt->execute();

	return $stmt->fetch();
}
