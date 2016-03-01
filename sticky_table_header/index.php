<!DOCTYPE html>
<html>
<head>
	<title>Sticky Table</title>
	<!-- <script type="text/javascript" src="jquery-1.8.0.min.js"></script> -->
	<script type="text/javascript" src="jquery-2.2.1.min.js"></script>
	<script type="text/javascript" src="jquery.stickytableheaders.min.js"></script>
	
	<style type="text/css">
	th {
	    background-color: lightgrey;
	    border: 1px solid black;
	}
	td {
	    border: 1px solid black;
	    padding:5px;
	}
	</style>

</head>
<body>

<h1>Tabel 1</h1>

<table id="stick">
	<thead>
  <tr>
    <th>Judul</th>
    <th>Pengarang</th>
    <th>Tutorial</th>
  </tr>
  </thead>
        <tbody>
        <?php
        	for ($i=0; $i < 30; $i++) {
        ?>
  <tr>
    <td>Bagaimana cara mendapatkan pekerjaan di masa ekomini sulit</td>
    <td width="80px">Paijo</td>
    <td width="80px"><a href="#">Link</a></td>
  </tr>
  <?php
}
  ?>
</tbody>
</table>

<h1>Tabel 2</h1>

<table id="stick2">
	<thead>
  <tr>
    <th>#</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
  </tr>
  </thead>
        <tbody>
        <?php
        	for ($i=1; $i <= 30; $i++) { 
        ?>
  <tr>
    <td><?=$i ?>.</td>
    <td width="80px">Fulan</td>
    <td width="80px"><a href="#">Laki</a></td>    
  </tr>

  <?php
}
  ?>
</tbody>
</table>
<script type="text/javascript">
	$(document).ready(function() {
	     $("#stick").stickyTableHeaders();
	     $("#stick2").stickyTableHeaders();
	});
</script>
</body>
</html>