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
