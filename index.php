<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tugas Mencari Function Point</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
  	var jumlahInputPemakai, jumlahOutputPemakai, jumlahPenyelidikanPemakai, jumlahFile, jumlahInterfaceEksternal,
  		radioJumlahInputPemakai, radioJumlahOutputPemakai, radioJumlahPenyelidikanPemakai, radioJumlahFile, radioJumlahInterfaceEksternal,
  		totalJumlahInputPemakai, totalJumlahOutputPemakai, totalJumlahPenyelidikanPemakai, totalJumlahFile, totalJumlahInterfaceEksternal,
  		jumlahTotal, fp,
  		soal1, soal2, soal3, soal4, soal5, soal6, soal7, soal8, soal9, soal10, soal11, soal12, soal13, soal14, totalSoal;

  	$(document).ready(function() {
	    $("#btnHitung").click(function(){
	        jumlahInputPemakai = $('#jumlahInputPemakai').val();
	        jumlahOutputPemakai = $('#jumlahOutputPemakai').val();
	        jumlahPenyelidikanPemakai = $('#jumlahPenyelidikanPemakai').val();
	        jumlahFile = $('#jumlahFile').val();
	        jumlahInterfaceEksternal = $('#jumlahInterfaceEksternal').val();

	        radioJumlahInputPemakai = $("input:radio[name ='radioJumlahInputPemakai']:checked").val();
	        radioJumlahOutputPemakai = $("input:radio[name ='radioJumlahOutputPemakai']:checked").val();
	        radioJumlahPenyelidikanPemakai = $("input:radio[name ='radioJumlahPenyelidikanPemakai']:checked").val();
	        radioJumlahFile = $("input:radio[name ='radioJumlahFile']:checked").val();
	        radioJumlahInterfaceEksternal = $("input:radio[name ='radioJumlahInterfaceEksternal']:checked").val();

	        totalJumlahInputPemakai = jumlahInputPemakai * radioJumlahInputPemakai;
	        totalJumlahOutputPemakai = jumlahOutputPemakai * radioJumlahOutputPemakai;
	        totalJumlahPenyelidikanPemakai = jumlahPenyelidikanPemakai * radioJumlahPenyelidikanPemakai;
	        totalJumlahFile = jumlahFile * radioJumlahFile;
	        totalJumlahInterfaceEksternal = jumlahInterfaceEksternal * radioJumlahInterfaceEksternal;
	        jumlahTotal = totalJumlahInputPemakai + totalJumlahOutputPemakai + totalJumlahPenyelidikanPemakai + totalJumlahFile + totalJumlahInterfaceEksternal;
	        
	        soal1 = parseInt($('#soal1').val(), 10);
	        soal2 = parseInt($('#soal2').val(), 10);
	        soal3 = parseInt($('#soal3').val(), 10);
	        soal4 = parseInt($('#soal4').val(), 10);
	        soal5 = parseInt($('#soal5').val(), 10);
	        soal6 = parseInt($('#soal6').val(), 10);
	        soal7 = parseInt($('#soal7').val(), 10);
	        soal8 = parseInt($('#soal8').val(), 10);
	        soal9 = parseInt($('#soal9').val(), 10);
	        soal10 = parseInt($('#soal10').val(), 10);
	        soal11 = parseInt($('#soal11').val(), 10);
	        soal12 = parseInt($('#soal12').val(), 10);
	        soal13 = parseInt($('#soal13').val(), 10);
	        soal14 = parseInt($('#soal14').val(), 10);

	        totalSoal = soal1 + soal2 + soal3 + soal4 + soal5 + soal6 + soal7 + soal8 + soal9 + soal10 + soal11 + soal12 + soal13 + soal14;

	        alert(totalSoal);

	        fp = jumlahTotal * (0.65 + 0.01 * totalSoal);

	        $('#totalJumlahInputPemakai').val(totalJumlahInputPemakai);
	        $('#totalJumlahOutputPemakai').val(totalJumlahOutputPemakai);
	        $('#totalJumlahPenyelidikanPemakai').val(totalJumlahPenyelidikanPemakai);
	        $('#totalJumlahFile').val(totalJumlahFile);
	        $('#totalJumlahInterfaceEksternal').val(totalJumlahInterfaceEksternal);
	        $('#jumlahTotal').val(jumlahTotal);
	        $('#fp').val(fp);
	    }); 
	});


  </script>
</head>
<body>

<div class="container">
  <h2>Tugas Mencari Function Point</h2>
  <p>TUGAS METRIK FUNCTION ORIENTED : UNTUK Sistem informasi Manajemen keluhan</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Parameter Pengukuran</th>
        <th>Jumlah</th>
        <th></th>
        <th>Sederhana</th>
        <th>Rata-rata</th>
        <th>Kompleks</th>
        <th>=</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Jumlah Input Pemakai</td>
        <td><div class="col-xs-5"><input type="number" class="form-control" id="jumlahInputPemakai"></div></td>
        <td>x</td>
        <td><label><input type="radio" name="radioJumlahInputPemakai" id="sederhana1" value="3" checked="checked">3</label></td>
        <td><label><input type="radio" name="radioJumlahInputPemakai" id="ratarata1" value="4">4</label></td>
        <td><label><input type="radio" name="radioJumlahInputPemakai" id="kompleks1" value="6">6</label></td>
        <td></td>
        <td><div class="col-xs-5"><input type="text" class="form-control" id="totalJumlahInputPemakai" readonly></div></td>
      </tr>
      <tr>
        <td>Jumlah Output Pemakai</td>
        <td><div class="col-xs-5"><input type="number" class="form-control" id="jumlahOutputPemakai"></div></td>
        <td>x</td>
        <td><label><input type="radio" name="radioJumlahOutputPemakai" id="sederhana2" value="4" checked="checked">4</label></td>
        <td><label><input type="radio" name="radioJumlahOutputPemakai" id="ratarata2" value="5">5</label></td>
        <td><label><input type="radio" name="radioJumlahOutputPemakai" id="kompleks2" value="7">7</label></td>
        <td></td>
        <td><div class="col-xs-5"><input type="text" class="form-control" id="totalJumlahOutputPemakai" readonly></div></td>
      </tr>
      <tr>
        <td>Jumlah Penyelidikan Pemakai</td>
        <td><div class="col-xs-5"><input type="number" class="form-control" id="jumlahPenyelidikanPemakai"></div></td>
        <td>x</td>
        <td><label><input type="radio" name="radioJumlahPenyelidikanPemakai" id="sederhana3" value="3" checked="checked">3</label></td>
        <td><label><input type="radio" name="radioJumlahPenyelidikanPemakai" id="ratarata3" value="4">4</label></td>
        <td><label><input type="radio" name="radioJumlahPenyelidikanPemakai" id="kompleks3" value="6">6</label></td>
        <td></td>
        <td><div class="col-xs-5"><input type="text" class="form-control" id="totalJumlahPenyelidikanPemakai" readonly></div></td>
      </tr>
      <tr>
      	<td>Jumlah File</td>
      	<td><div class="col-xs-5"><input type="number" class="form-control" id="jumlahFile"></div></td>
      	<td>x</td>
      	<td><label><input type="radio" name="radioJumlahFile" id="sederhana4" value="7" checked="checked">7</label></td>
        <td><label><input type="radio" name="radioJumlahFile" id="ratarata4" value="10">10</label></td>
        <td><label><input type="radio" name="radioJumlahFile" id="kompleks4" value="15">15</label></td>
        <td></td>
        <td><div class="col-xs-5"><input type="text" class="form-control" id="totalJumlahFile" readonly></div></td>
      </tr>
      <tr>
      	<td>Jumlah Interface Eksternal</td>
      	<td><div class="col-xs-5"><input type="number" class="form-control" id="jumlahInterfaceEksternal"></div></td>
      	<td>x</td>
      	<td><label><input type="radio" name="radioJumlahInterfaceEksternal" id="sederhana5" value="6" checked="checked">6</label></td>
        <td><label><input type="radio" name="radioJumlahInterfaceEksternal" id="ratarata5" value="7">7</label></td>
        <td><label><input type="radio" name="radioJumlahInterfaceEksternal" id="kompleks5" value="10">10</label></td>
        <td></td>
        <td><div class="col-xs-5"><input type="text" class="form-control" id="totalJumlahInterfaceEksternal" readonly></div></td>
      </tr>
      <tr>
      	<td>Total : </td>
      	<td></td>
      	<td></td>
      	<td></td>
      	<td></td>
      	<td></td>
      	<td></td>
      	<td><div class="col-xs-5"><input type="text" class="form-control" id="jumlahTotal" readonly></div></td>
      </tr>
      <tr>
      	<td>FP : </td>
      	<td></td>
      	<td></td>
      	<td></td>
      	<td></td>
      	<td></td>
      	<td></td>
      	<td><div class="col-xs-5"><input type="text" class="form-control" id="fp" readonly></div><button type="button" class="btn btn-success" id="btnHitung">Hitung</button></td>
      </tr>
    </tbody>
  </table>
  <p>&nbsp;</p>
  <p>
   <b>
	  	0. Tidak berpengaruh
		1. Insidental
		2. Moderat
		3. Rata-rata
		4. Signifikan
		5. Essential
	</b>
  </p>
  <table class="table table-bordered">
      <td>1</td>
      <td>Apakah system perlu backup dan recovery?</td>
      <td><div class="col-xs-4"><input type="number" class="form-control" id="soal1"></div></td>
    </tr>
    <tr>
      <td>2</td>
      <td>Apakah butuh communication data?</td>
      <td><div class="col-xs-4"><input type="number" class="form-control" id="soal2"></div></td>
    </tr>
    <tr>
      <td>3</td>
      <td>Apakah ada fungsi pengolahan terdistribusi?</td>
      <td><div class="col-xs-4"><input type="number" class="form-control" id="soal3"></div></td>
    </tr>
    <tr>
      <td>4</td>
      <td>Apakah maslah kinerjanya penting?</td>
      <td><div class="col-xs-4"><input type="number" class="form-control" id="soal4"></div></td>
    </tr>
    <tr>
      <td>5</td>
      <td>Apakah system run ada , digunakan dalam lingkungan  operasional</td>
      <td><div class="col-xs-4"><input type="number" class="form-control" id="soal5"></div></td>
    </tr>
    <tr>
      <td>6</td>
      <td>Apakah system butuh on-line data entry?</td>
      <td><div class="col-xs-4"><input type="number" class="form-control" id="soal6"></div></td>
    </tr>
    <tr>
      <td>7</td>
      <td>Apakah  on-line data entry butuh input transaction ?</td>
      <td><div class="col-xs-4"><input type="number" class="form-control" id="soal7"></div></td>
    </tr>
    <tr>
      <td>8</td>
      <td>Apakah master files diupdate secara online?</td>
      <td><div class="col-xs-4"><input type="number" class="form-control" id="soal8"></div></td>
    </tr>
    <tr>
      <td>9</td>
      <td>Apakah inputs, outputs, files atau inquiries nya komplex?</td>
      <td><div class="col-xs-4"><input type="number" class="form-control" id="soal9"></div></td>
    </tr>
    <tr>
      <td>10</td>
      <td>Apakah internal processing complex?</td>
      <td><div class="col-xs-4"><input type="number" class="form-control" id="soal10"></div></td>
    </tr>
    <tr>
      <td>11</td>
      <td>Apakah code yang dirancang dapat di  reusable?</td>
      <td><div class="col-xs-4"><input type="number" class="form-control" id="soal11"></div></td>
    </tr>
    <tr>
      <td>12</td>
      <td>Apakah conversion dan installation termasuk dalam design?</td>
      <td><div class="col-xs-4"><input type="number" class="form-control" id="soal12"></div></td>
    </tr>
    <tr>
      <td>13</td>
      <td>Apakah system designed untuk keperluan  multiple installations dalam  perusahaan berbeda?</td>
      <td><div class="col-xs-4"><input type="number" class="form-control" id="soal13"></div></td>
    </tr>
    <tr>
      <td>14</td>
      <td>Apakah aplikasi dirancang untuk memfasilitasi  perubahan dan kemudahan penggunaan oleh pengguna?</td>
      <td><div class="col-xs-4"><input type="number" class="form-control" id="soal14"></div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
</body>
</html>
