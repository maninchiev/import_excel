<title>Import bulk data insert in database using php codeigniter </title>
<style>
table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th {
    background-color: black;
    color: white;
}
</style>
<?php if($this->session->flashdata('message')){?>
          <div align="center" class="alert alert-success">      
            <?php echo $this->session->flashdata('message')?>
          </div>
        <?php } ?>

<br><br>

<div align="center">
<form action="<?php echo base_url(); ?>index.php/uploadcsv/import" method="post" name="upload_excel" enctype="multipart/form-data">
<input type="file" name="file" id="file">
<button type="submit" id="submit" name="import" class="btn btn-primary button-loading">Import</button>
</form>
<br>
<br>
<a href="<?php echo base_url(); ?>sample.csv"> Sample csv file </a>
<br><br>

<div style="width:80%; margin:0 auto;" align="center">
<table id="t01">
  <tr>
    <th>Name</th>
    <th>Email</th>
     <th>Phone</th>
    <th>Date</th>
  </tr>
<?php
if(isset($view_data) && is_array($view_data) && count($view_data)): $i=1;
foreach ($view_data as $key => $data) { 
?>
  <tr>
    <td><?php echo $data['name'] ?></td>
    <td><?php echo $data['email'] ?></td>
    <td><?php echo $data['phone'] ?></td>
    <td><?php echo $data['created_date'] ?></td>
  </tr>
  <?php } endif; ?>
</table>
</div>

</div>