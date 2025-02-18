
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
$root_path = "";
```
## API Reference

#### BASE URL
```http
  https://pengantin.jadimudah.id
```

#### Detail Tamu

```http
  GET /api/items/${id}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id`      | `string` | **Required**. Id of item to fetch |

#### add(num1, num2)

Takes two numbers and returns the sum.

