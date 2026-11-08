# Laporan Praktikum Web-Based Programming (PBW)
**Nama:** Syalsabila Putri Irawan  
**NPM:** 4524210100  
**Kelas:** PBW - A  
**Dosen Pengampu:** Adi Wahyu Pribadi, S.Si., M.Kom  

---

## 📌 Rincian Tugas 1 & 2
- **Tugas 1 (Pertemuan 6):** Setup Laravel & Filament 3.x, Migration, Model, Factory, Seeder, serta Resource Dasar (Authors & Books).
- **Tugas 2 (Pertemuan 7):** Fitur Description, RBAC/Spatie Permission (Admin, Staff, Viewer), Dashboard Widgets (`BookStatsOverview` & `BookStatusChart`), dan Relasi Many-to-Many (`Categories`).

---
### 📷 Bukti Implementasi Tugas 1 (Pertemuan 6)

1. **Halaman Login Admin**  
  <img width="1917" height="915" alt="Cuplikan layar 2026-11-09 014210" src="https://github.com/user-attachments/assets/66c01669-d69c-465b-a72b-8aaabdd479ff" />

2. **Tampilan Dashboard Admin**  
<img width="1917" height="906" alt="Cuplikan layar 2026-11-08 194919" src="https://github.com/user-attachments/assets/d38e5d0f-098b-4742-9e74-587b948562d3" />

3. **Daftar Penulis (Authors List)**  
<img width="1917" height="911" alt="Cuplikan layar 2026-11-08 194455" src="https://github.com/user-attachments/assets/9fbe5db7-427f-4df6-a9ba-56fe0ae1f736" />

4. **Fitur Pencarian Authors**  
<img width="1917" height="912" alt="Cuplikan layar 2026-11-08 194737" src="https://github.com/user-attachments/assets/4f121218-4bb0-4fd3-877f-5ea9c7d5b4ef" />

5. **Form Tambah Buku Baru**  
  <img width="1917" height="915" alt="Cuplikan layar 2026-11-08 194642" src="https://github.com/user-attachments/assets/a29a08b5-8bab-47ca-ac0a-68b546373d26" />

6. **Daftar Buku (Books List)**  
 <img width="1917" height="911" alt="Cuplikan layar 2026-11-08 194536" src="https://github.com/user-attachments/assets/ac4689d5-64e0-4414-808f-7de0fd80693f" />

7. **Hasil Penambahan Data Buku Baru**  
<img width="1917" height="1078" alt="Cuplikan layar 2026-11-08 194336" src="https://github.com/user-attachments/assets/3668a131-f2b7-41eb-a238-d7739b97957e" />

### 📷 Bukti Implementasi Fitur & Pengujian (Tugas 1 & 2)

#### 1. Auth & Dashboard Widgets
- **Form Login Admin Panel:**  
 <img width="1917" height="915" alt="Cuplikan layar 2026-11-09 014210" src="https://github.com/user-attachments/assets/7f3f96c2-bf5c-42d5-a72b-828beb172ed8" />
- **Dashboard & RBAC Menu Restriction:**  
<img width="1915" height="916" alt="Cuplikan layar 2026-11-09 004820" src="https://github.com/user-attachments/assets/a8e0674b-737c-4d36-8c64-504cabfef403" />

#### 2. Operasi CRUD Data Author
- **Tabel Data Authors (Read):**  
<img width="1917" height="911" alt="Cuplikan layar 2026-11-09 005233" src="https://github.com/user-attachments/assets/c22378d2-97a0-4fd1-93cb-d1fb46aedf61" />
- **Form Edit Author (Update):**  
 <img width="1910" height="911" alt="Cuplikan layar 2026-11-09 005319" src="https://github.com/user-attachments/assets/96062116-13ed-458e-8a27-b9dd2c1e6f27" />
- **Notifikasi Berhasil Edit:**  
<img width="1917" height="903" alt="Cuplikan layar 2026-11-09 005351" src="https://github.com/user-attachments/assets/2bb67828-d9ca-45e6-908c-f0e86d00b05a" />
- **Konfirmasi Modal Hapus Data (Delete):**  
 <img width="1917" height="911" alt="Cuplikan layar 2026-11-09 005458" src="https://github.com/user-attachments/assets/e1a3c0cf-a064-4440-bd09-28cf55f823ca" />
- **Notifikasi Hapus Berhasil:**  
  *(Seret file Cuplikan layar 2026-11-09 005530.png ke sini)
<img width="1917" height="907" alt="Cuplikan layar 2026-11-09 005530" src="https://github.com/user-attachments/assets/15ebde8f-d584-406e-ad96-421d3fa50631" />
<img width="1917" height="911" alt="Cuplikan layar 2026-11-09 005553" src="https://github.com/user-attachments/assets/4c6d14ab-5031-4dee-a634-eae0e7ec24c2" />


## 📌 Tugas 3: Analisis dan Dokumentasi

### 1. Penjelasan Arsitektur Aplikasi

#### A. Diagram ERD (Entity Relationship Diagram)
```mermaid
erDiagram
    USERS {
        bigint id PK
        string name
        string email
        string role
        timestamp created_at
    }
    AUTHORS {
        bigint id PK
        string name
        timestamp created_at
    }
    BOOKS {
        bigint id PK
        string isbn UK
        string title
        text description
        bigint author_id FK
        string publisher
        int year
        string cover
        enum status
        timestamp created_at
    }
    CATEGORIES {
        bigint id PK
        string name
        timestamp created_at
    }
    BOOK_CATEGORY {
        bigint book_id FK
        bigint category_id FK
    }

    AUTHORS ||--o{ BOOKS : "hasMany"
    BOOKS }|--|| AUTHORS : "belongsTo"
    BOOKS }|--|{ BOOK_CATEGORY : "belongsToMany"
    CATEGORIES }|--|{ BOOK_CATEGORY : "belongsToMany"
