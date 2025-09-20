<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edukasi Kesehatan - Hidup Sehat Tanpa Rokok</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-gray-50 text-gray-800">

  <!-- Navbar -->
  <header class="bg-white shadow-md fixed w-full z-20">
    <div class="max-w-6xl mx-auto flex justify-between items-center p-4">
      <h1 class="text-xl font-bold text-red-600">Hidup Sehat</h1>
      <nav class="hidden md:flex space-x-6 font-medium">
        <a href="#home" class="hover:text-red-600">Home</a>
        <a href="#bahaya" class="hover:text-red-600">Bahaya Merokok</a>
        <a href="#langkah" class="hover:text-red-600">Langkah Awal</a>
        <a href="#sehat" class="hover:text-red-600">Hidup Sehat</a>
        <a href="#diskusi" class="hover:text-red-600">Ruang Diskusi</a>
      </nav>
      <button id="menu-btn" class="md:hidden flex flex-col space-y-1 focus:outline-none">
        <span class="block w-6 h-0.5 bg-gray-800"></span>
        <span class="block w-6 h-0.5 bg-gray-800"></span>
        <span class="block w-6 h-0.5 bg-gray-800"></span>
      </button>
    </div>
    <div id="menu" class="hidden md:hidden bg-white shadow-lg">
      <nav class="flex flex-col space-y-4 p-4 text-center">
        <a href="#home" class="hover:text-red-600">Home</a>
        <a href="#bahaya" class="hover:text-red-600">Bahaya Merokok</a>
        <a href="#langkah" class="hover:text-red-600">Langkah Awal</a>
        <a href="#sehat" class="hover:text-red-600">Hidup Sehat</a>
        <a href="#diskusi" class="hover:text-red-600">Ruang Diskusi</a>
      </nav>
    </div>
  </header>

  <!-- Hero -->
  <section id="home" class="hero-section text-white py-32 px-6 text-center">
    <h2 class="text-4xl md:text-5xl font-bold mb-4">Stop Merokok, Mulai Hidup Sehat</h2>
    <p class="text-lg md:text-xl mb-6">Ketahui bahaya merokok dan temukan langkah sederhana untuk hidup lebih sehat.</p>
    <a href="#bahaya" class="btn-primary">Pelajari Lebih Lanjut</a>
  </section>

  <!-- Bahaya Merokok -->
  <section id="bahaya" class="max-w-4xl mx-auto py-20 px-6 leading-relaxed">
    <h3 class="section-title text-red-600">Bahaya Merokok</h3>
    <p class="mb-6">
      Merokok adalah salah satu kebiasaan yang sangat berbahaya bagi kesehatan. 
      Zat-zat beracun dalam rokok dapat menyebabkan berbagai masalah serius yang mengancam kehidupan.  
      Ketika kita merokok, asap rokok masuk ke dalam paru-paru dan menyebar ke seluruh tubuh melalui darah, 
      merusak organ-organ vital seperti jantung, otak, dan sistem pernapasan.
    </p>
    <p class="font-semibold mb-2">Dampak dan risiko penyakit akibat merokok adalah:</p>
    <ul class="list-disc list-inside mb-6">
      <li>Penyakit paru-paru kronis</li>
      <li>Kanker</li>
      <li>Penyakit jantung dan pembuluh darah</li>
      <li>Gangguan sistem kekebalan tubuh</li>
      <li>Masalah kehamilan pada ibu hamil</li>
    </ul>
  </section>

  <!-- Langkah Awal -->
  <section id="langkah" class="bg-gray-50 max-w-4xl mx-auto py-20 px-6 leading-relaxed">
    <h3 class="section-title text-yellow-600">Langkah Awal untuk Berhenti Merokok</h3>
    <p class="mb-6">
      Berhenti merokok memang tidak mudah, tapi bukan hal yang mustahil. 
      Berikut beberapa langkah awal yang bisa diambil agar berhasil berhenti:
    </p>
    <ul class="list-disc list-inside mb-6">
      <li>Miliki niat yang kuat untuk berhenti</li>
      <li>Kurangi secara bertahap</li>
      <li>Cari dukungan dengan teman, keluarga, ataupun komunitas</li>
      <li>Alihkan perhatian dengan hal yang lebih bermanfaat</li>
    </ul>
  </section>

  <!-- Hidup Sehat -->
  <section id="sehat" class="bg-green-50 max-w-4xl mx-auto py-20 px-6 leading-relaxed">
    <h3 class="section-title text-green-600">Upaya Hidup Sehat Setelah Berhenti Merokok</h3>
    <p class="mb-6">
      Tidak hanya berhenti merokok, kamu juga harus siap untuk memulai gaya hidup sehat. 
      Hal ini dapat dilaksanakan dengan melakukan beberapa hal berikut:
    </p>
    <ul class="list-disc list-inside mb-6">
      <li><b>Aktivitas fisik rutin:</b> olahraga ringan hingga sedang minimal 30 menit sehari, seperti jalan kaki, bersepeda, atau yoga.</li>
      <li><b>Pola makan sehat:</b> konsumsi sayur, buah, biji-bijian, dan sumber protein sehat. Kurangi makanan olahan dan tinggi gula.</li>
      <li><b>Minum air yang cukup:</b> air membantu membersihkan racun dalam tubuh dan menjaga metabolisme.</li>
      <li><b>Tidur cukup:</b> tidur 7-8 jam per malam membantu tubuh pulih dan memperkuat sistem imun.</li>
      <li><b>Hindari pemicu lama:</b> jauhi situasi atau lingkungan yang memicu keinginan merokok.</li>
    </ul>
    <p class="font-semibold text-center text-lg">Mulailah hari ini, demi masa depan yang lebih sehat dan cerah!</p>
  </section>

  <!-- Ruang Diskusi -->
  <section id="diskusi" class="max-w-4xl mx-auto py-20 px-6">
    <h3 class="section-title text-gray-700">Ruang Diskusi</h3>
    <p class="mb-6 text-center">Yuk share pengalaman kamu terbebas dari kebiasaan merokok</p>
    
    <!-- Form komentar -->
    <form method="POST" action="{{ route('comments.store') }}" class="grid gap-4 max-w-md mx-auto">
      @csrf
      <input type="text" name="name" placeholder="Nama" required class="p-3 border rounded-lg">
      <textarea name="comment" placeholder="Tulis komentar..." required class="p-3 border rounded-lg"></textarea>
      <button class="btn-primary">Kirim</button>
    </form>

    <!-- List komentar -->
    <div class="mt-10 space-y-4">
      @foreach($comments as $comment)
        <div class="comment-box">
          <p class="font-semibold text-red-600">{{ $comment->name }}</p>
          <p class="text-gray-700">{{ $comment->comment }}</p>
        </div>
      @endforeach
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-800 text-gray-200 text-center py-6">
    <p>&copy; 2025 Edukasi Kesehatan. Semua Hak Dilindungi.</p>
  </footer>

  <script>
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('menu');
    btn.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });
  </script>
</body>
</html>
