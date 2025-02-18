
# Dokumentasi Integrasi Tema

A brief description of what this project does and who it's for


## Authors

- [@ivanwebdevs](https://www.github.com/ivanwebdevs)


## Variabel Default

#### Contoh Backend
```php
<?php 
    $pengantin = (object)[];
    $tamu = (object)[];
    $user = (object)[];
?>
```

#### Convert Ke Javascript (front-end)
```html
<script>
    const user = <?=json_encode($user)?>;
    const pengantin = <?=json_encode($pengantin)?>;
    const tamu = <?=json_encode($tamu)?>;
</script>
```

#### Variable Dinamis
```php
$root_path = "/tema/10";
```
## API Reference

#### BASE URL
```http
  https://pengantin.jadimudah.id
```


### TAMU

#### Detail tamu
```http
  GET /api/comment/tamu/${id_tamu}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id_tamu`      | `id` | **Required**. ID OF Guest |

#### Update Tamu
```http
  PUT /api/comment/tamu/${id_tamu}
```

##### Struktur Data
| Parameter          | Type              | Description                                  |
|-------------------|-----------------|----------------------------------------------|
| `id_tamu`        | `bigint(11)`      | ID unik tamu (Auto Increment).             |
| `id_user`        | `int(11)`         | ID pengguna yang menambahkan tamu.         |
| `nama`           | `varchar(255)`    | Nama tamu (boleh kosong).                   |
| `type`           | `varchar(255)`    | Tipe tamu (`vip`, `vvip`, `group`, `reguler`). |
| `phone`          | `varchar(255)`    | Nomor telepon tamu.                         |
| `email`          | `varchar(255)`    | Email tamu (boleh kosong).                  |
| `waktu_buka`     | `bigint(20)`      | Waktu undangan dibuka (timestamp).         |
| `waktu_hadir`    | `bigint(20)`      | Waktu tamu hadir (timestamp).              |
| `waktu_konfirmasi` | `bigint(20)`    | Waktu tamu mengonfirmasi kehadiran.        |
| `jumlah_anggota` | `int(11)`         | Jumlah anggota dalam rombongan.            |
| `status`         | `varchar(255)`    | Status tamu (`pending`, `confirmed`, `canceled`, dll.). |
| `foto`           | `varchar(255)`    | URL foto tamu (boleh kosong).               |
| `pesan`          | `text`            | Pesan dari tamu (boleh kosong).             |
| `blast`          | `tinyint(1)`      | Status apakah tamu telah dikirim broadcast (0 = tidak, 1 = ya). |

---




### Payment

#### Create Payment QRIS
```http
  GET /apiPayment/pembayaran/create
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id_user`      | `id` | **Required**. id of user |
| `email`      | `email` | **Required**. Email of guest |
| `nama`      | `varchar` | **Required**. Name of guest |




### Komentar

#### Pagination
```http
  GET /api/comment/pagination/${id_user}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id_user`      | `id` | **Required**. ID OF USER |
| `page`      | `number` | **Required**. Page Select |
| `limit`      | `number` | **Required**. Limit Result Comment |
