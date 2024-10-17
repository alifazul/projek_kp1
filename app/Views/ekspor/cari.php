<!DOCTYPE html>  
<html lang="en">  

<head>  
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title></title>  
    <?= $this->include('template/css')?>
</head>  

<body>  
    <h2>Data Mahasiswa </h2>
    <table id="tabel" class="table table-bordered table-striped">
        <thead>
            <tr>
                
                <th>No</th>
                <th>Surat</th>
                <th>Tanggal Surat</th>
                <th>No Surat</th>
                <th>Tanggal Diterima</th>
                <th>Kategori 1</th>
                <th>Kategori 2</th>
                <th>No Agenda</th>
                <th>Sifat</th>
                <th>Perihal</th>
                <th>Terusan</th>
                <th>Tindakan</th>
                <th>Catatan</th>
                <th>File</th>
                <th>Ket</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach($surats as $row) { ?>
            <tr>
                
                <td><?= $no ?></td>
                <td><?= $row['surat'] ?></td>
                <td><?= $row['tgl_surat'] ?></td>
                <td><?= $row['no_surat'] ?></td>
                <td><?= $row['tgl_terima'] ?></td>
                <td><?= $row['kat1'] ?></td>
                <td><?= $row['kat2'] ?></td>
                <td><?= $row['no_agenda'] ?></td>
                <td><?= $row['sifat'] ?></td>
                <td><?= $row['perihal'] ?></td>
                <td><?= $row['terusan'] ?></td>
                <td><?= $row['tindakan'] ?></td>
                <td><?= $row['catatan'] ?></td>
                <td><?= $row['file'] ?></td>
                <td><?= $row['ket'] ?></td>
            </tr>
            <?php $no++; } ?>
        </tbody>
    </table>

</body>
</html>