# TODO - Perbaikan Admin/Operator Matrix & Mapping

- [ ] Implement endpoint `DataPilah::ACTION_listAllAssigned()` untuk memfilter kartu matriks berdasarkan mapping `mapping_matrix_unit` dan unit user (admin: semua).
- [ ] Update `modules/ViewDataMatrix/ViewDataMatrix.js` agar `loadAll()` menggunakan endpoint baru tersebut (menghapus kebutuhan dropdown untuk daftar kartu).
- [x] Quick verification: operator login hanya melihat kartu matriks miliknya; saat klik kartu datanya tetap terfilter sesuai `ACTION_getMatriks()`.
- [x] Perbaiki `modules/ViewDataMatrix/ViewDataMatrix.js` agar kartu matriks memakai data dari endpoint `DataPilah::ACTION_listAllAssigned()` (admin: semua mapping, operator: terfilter mapping user unit).
- [ ] Verifikasi akhir: login admin vs operator memastikan daftar kartu dan tampilan matrix terfilter sesuai unit.
- [ ] Update TODO setelah verifikasi selesai.




