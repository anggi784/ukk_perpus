<h1 class="mt-4">Ulasan</h1>
<div class="card">
        <a href="?page=ulasan_tambah" class="btn btn-primary">+ Tambah Data </a>
        <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th>No</th>
                    <th>User</th>
                    <th>Buku</th>
                    <th>Ulasan</th>
                    <th>Rating</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $i =1;
                    $query = mysqli_query ($koneksi, "SELECT*FROM ulasan 
                    LEFT JOIN
                    buku on ulasan.id_buku = buku.id_buku
                    LEFT JOIN user on ulasan.id_user = user.id_user "
                    );
                    while($data = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $data['nama']; ?> </td>
                        <td><?php echo $data['judul_buku']; ?> </td>
                        <td><?php echo $data['ulasan']; ?> </td>
                        <td><?php echo $data['rating']; ?> </td>
                        <td>
                        <a href="?page=ulasan_ubah&&id=<?php echo $data['id_ulasan']; ?>" class="btn btn-info">Ubah</a>    
                            <a onclick="return confirm ('Apakah Anda Yakin Menghapus Data ini ??');"
                            href="?page=ulasan_hapus&&id=<?php echo $data ['id_ulasan']; ?>" class="btn btn-danger">Hapus</a>
                        </td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </div>
    </div>
        </div>
</div>