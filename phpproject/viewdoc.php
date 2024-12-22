<?php 
include 'document.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="viewdocc.css">
  <title>Download files</title>
</head>
<body>
 <nav>
      <!--<label class="logo">Student Education and Sports Management</label>--> 
        <a href="uploads.php">UPLOAD</a>
        <a href="home.php">HOME</a>
    </nav>

<table>
<thead>
<th>ID</th><br>
    <th>Filename</th>
    <th>size (in mb)</th>
    <th>Downloads</th>
    <th>delete here</th>
    <th>download here</th>
</thead>
 
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td>
<form action="docdelete.php" method="post">
    <button name="delete" value="<?php echo $file['id'] ?>">delete</button>
</form>
      </td>
      <td><a href="viewdoc.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
      
    </tr>
  <?php endforeach;?>
       
            
</tbody>
</table>

</body>
</html>