@extends('layouts.main')

 {{-- untuk styles khusus halaman tertentu --}}
 @section('this-page-style')
 @endsection

 @section('content')
     <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
         <div
             class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
             <h1 class="h2">Dashboard</h1>
             <div class="btn-toolbar mb-2 mb-md-0">
                 <!-- tempat button -->
             </div>
         </div>
         <div class="container">
             <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                 <div class="col">
                     <div class="card shadow-sm">
                         <!-- Gambar acak dari picsum.photos -->
                         <img src="https://picsum.photos/500/225" class="card-img-top" alt="Thumbnail Buku" />

                         <div class="card-body">
                             <!-- Judul Buku -->
                             <h5 class="card-title">Judul Buku</h5>

                             <!-- Deskripsi Buku -->
                             <p class="card-text">
                                 Deskripsi singkat tentang buku ini. Buku ini memberikan
                                 wawasan mendalam tentang [topik buku] dan sangat
                                 direkomendasikan untuk pembaca yang tertarik pada [tema
                                 atau genre].
                             </p>

                             <!-- Penerbit -->
                             <p class="card-text">
                                 <strong>Penerbit:</strong> Nama Penerbit
                             </p>

                             <div class="d-flex justify-content-between align-items-center">
                                 <div class="btn-group">
                                     <button type="button" class="btn btn-sm btn-outline-secondary">
                                         Lihat
                                     </button>
                                     <button type="button" class="btn btn-sm btn-outline-secondary">
                                         Edit
                                     </button>
                                 </div>
                                 <small class="text-body-secondary">9 menit lalu</small>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col">
                     <div class="card shadow-sm">
                         <!-- Gambar acak dari picsum.photos -->
                         <img src="https://picsum.photos/500/225" class="card-img-top" alt="Thumbnail Buku" />

                         <div class="card-body">
                             <!-- Judul Buku -->
                             <h5 class="card-title">Judul Buku</h5>

                             <!-- Deskripsi Buku -->
                             <p class="card-text">
                                 Deskripsi singkat tentang buku ini. Buku ini memberikan
                                 wawasan mendalam tentang [topik buku] dan sangat
                                 direkomendasikan untuk pembaca yang tertarik pada [tema
                                 atau genre].
                             </p>

                             <!-- Penerbit -->
                             <p class="card-text">
                                 <strong>Penerbit:</strong> Nama Penerbit
                             </p>

                             <div class="d-flex justify-content-between align-items-center">
                                 <div class="btn-group">
                                     <button type="button" class="btn btn-sm btn-outline-secondary">
                                         Lihat
                                     </button>
                                     <button type="button" class="btn btn-sm btn-outline-secondary">
                                         Edit
                                     </button>
                                 </div>
                                 <small class="text-body-secondary">9 menit lalu</small>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col">
                     <div class="card shadow-sm">
                         <!-- Gambar acak dari picsum.photos -->
                         <img src="https://picsum.photos/500/225" class="card-img-top" alt="Thumbnail Buku" />

                         <div class="card-body">
                             <!-- Judul Buku -->
                             <h5 class="card-title">Judul Buku</h5>

                             <!-- Deskripsi Buku -->
                             <p class="card-text">
                                 Deskripsi singkat tentang buku ini. Buku ini memberikan
                                 wawasan mendalam tentang [topik buku] dan sangat
                                 direkomendasikan untuk pembaca yang tertarik pada [tema
                                 atau genre].
                             </p>

                             <!-- Penerbit -->
                             <p class="card-text">
                                 <strong>Penerbit:</strong> Nama Penerbit
                             </p>

                             <div class="d-flex justify-content-between align-items-center">
                                 <div class="btn-group">
                                     <button type="button" class="btn btn-sm btn-outline-secondary">
                                         Lihat
                                     </button>
                                     <button type="button" class="btn btn-sm btn-outline-secondary">
                                         Edit
                                     </button>
                                 </div>
                                 <small class="text-body-secondary">9 menit lalu</small>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </main>
 @endsection

 {{-- untuk scripts khusus halaman tertentu --}}
 @section('this-page-scripts')
 @endsection

