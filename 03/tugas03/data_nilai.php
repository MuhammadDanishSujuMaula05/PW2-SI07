<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    

<div class="container">
  <h2>Data Mahasiswa</h2>
  <table border=2 class="table table-dark table-borderless">
  
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Rata-Rata</th>
              <th>Grade</th>
              <th>Predikat</th>
              <th>Keterangan</th>
              
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td>Fakhirul</td>
              <td>Statistika dan Probabilitas</td>
              <td>89</td>
              <td>95</td>
              <td>80</td>
              <td>87.95</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>2</td>
              <td>Rul</td>
              <td>Statistika dan Probabilitas</td>
              <td>78</td>
              <td>81</td>
              <td>80</td>
              <td>79.75</td>
              <td>B</td>
              <td>Memuaskan</td>
              <td>Lulus</td>
          </tr>

          <tr>

            <td>3.</td>
            <?php

require_once "libfungsi.php";


if (isset($_POST['submit'])){   
    $submit = $_POST['submit'];
    $nama_siswa = $_POST['nama_lengkap'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];
    $total_nilai = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);
    $area = grade($total_nilai);
    $arei = kelulusan($total_nilai);
    $areu = kepuasan($total_nilai);

    
    echo '<td>'.$nama_siswa;
    echo '<td>'.$mata_kuliah;
    echo '<td>'.$nilai_uts;
    echo '<td>'.$nilai_uas;
    echo '<td>'.$nilai_tugas;
    echo '<td>'.$total_nilai;
    echo '<td>'.$area;
    echo '<td>'.$areu;
    echo '<td>'.$arei;
}
    

?>  
          
   
            



          </tr>
      </tbody>
  </table>
</div>
</body>