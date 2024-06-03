---
title: Peta Keterkaitan Antar File Aplikasi QR
author: Edy Wihardjo
date: May 23th, 2024
---



## index.php

`line 3: require(dbconn.php)`



`lms/qr/add.php` (untuk menambah user baru) $\rightarrow$`lms\qr\edit.php` (untuk menampilkan data user, seharusnya `read.php`), terdapat tombol `edit` (setelah di-klik, menuju `update.php`)

di samping tombol `update` terdapat tombol `delete`, sayangnya tidak konfirmasi `apakah Anda benar-benar akan menghapus data?`

