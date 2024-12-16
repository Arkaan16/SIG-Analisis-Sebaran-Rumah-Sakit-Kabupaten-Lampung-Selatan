<aside class="flex min-h-screen relative bg-sidebar w-64 hidden sm:block shadow-xl transition-all" id="sidebar">
    <div class="p-6 flex justify-between items-center">
        <a href="#" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
        <button id="close-btn" class="text-white text-3xl hover:text-gray-300 sm:hidden">
            <i class="fas fa-times"></i> <!-- Tombol "X" -->
        </button>
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="{{ route('peta.index') }}" 
           class="flex items-center {{ request()->routeIs('peta.index') ? 'bg-blue-600 text-white' : 'opacity-75 hover:opacity-100' }} py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>   
        <a href="{{ route('rumah-sakit.index') }} "
           class="flex items-center {{ request()->routeIs('rumah-sakit.*') ? 'bg-blue-600 text-white' : 'opacity-75 hover:opacity-100' }} py-4 pl-6 nav-item">
            <i class="fas fa-hospital mr-3"></i>
            Data Rumah Sakit
        </a>
        <a href="{{ route('keluar') }} "
           class="flex items-center py-4 pl-6 nav-item opacity-75 hover:opacity-100">
            <i class="fas fa-sign-out-alt mr-3"></i>
            Keluar
        </a>
    </nav>
</aside>

<!-- Tombol Hamburger untuk mobile -->
<div class="sm:hidden absolute top-4 left-4 z-50">
    <button id="hamburger-btn" class="text-blue-600 text-2xl p-2">
        <i class="fas fa-bars"></i>
    </button>
</div>

<script>
    // Menangani toggle sidebar pada mobile
    document.getElementById('hamburger-btn').addEventListener('click', function() {
        const sidebar = document.getElementById('sidebar');
        // Menambahkan atau menghapus kelas 'show' untuk menampilkan atau menyembunyikan sidebar
        sidebar.classList.toggle('show');
    });

    // Menangani close sidebar dengan tombol "X"
    document.getElementById('close-btn').addEventListener('click', function() {
        const sidebar = document.getElementById('sidebar');
        // Menambahkan atau menghapus kelas 'show' untuk menutup sidebar
        sidebar.classList.remove('show');
    });
</script>

<style>
    /* Menambahkan style untuk membuat tombol hamburger mengikuti scroll */
    #hamburger-btn {
        position: fixed; /* Tetap di tempat meski scroll */
        top: 3rem; /* Jarak dari atas */
        left: 1rem; /* Jarak dari kiri */
        z-index: 10000; /* Pastikan tombol hamburger di atas elemen lain */
        font-size: 1.5rem; /* Ukuran tombol lebih kecil */
        padding: 0.5rem; /* Padding kecil agar lebih kompak */
        background: transparent; /* Tombol transparan */
        border: none;
        cursor: pointer;
    }

    /* Tombol hamburger selalu berwarna biru */
    #hamburger-btn {
        color: #3d68ff; /* Warna biru untuk hamburger */
    }

    /* Menambahkan styling ketika sidebar ditampilkan */
    .show {
        transform: translateX(0);
    }
</style>
