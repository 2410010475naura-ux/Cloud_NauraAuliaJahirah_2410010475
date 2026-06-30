<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Koneksi Database - Pink Edition</title>
   
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-pink-100 font-sans min-h-screen flex items-center justify-center p-4">

   
    <div class="max-w-md w-full bg-white/80 backdrop-blur-md rounded-2xl shadow-xl border border-pink-200 p-8 text-center transition-all duration-300 hover:shadow-2xl">
        
        <?php
        $host = 'db';
        $user = 'root';
        $pass = 'root';
        $db = 'my_first_db';

        // Mencoba koneksi
        $conn = @mysqli_connect($host, $user, $pass, $db);

        if (mysqli_connect_errno()) {
            
            echo '
            <div class="flex flex-col items-center">
                <div class="w-20 h-20 bg-rose-100 text-rose-500 rounded-full flex items-center justify-center mb-6 border border-rose-200 animate-pulse">
                    <!-- Ikon Silang (X) -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </div>
                <h1 class="text-2xl font-bold text-rose-700 mb-2">Waduh, KONEKSI GAGAL!</h1>
                <p class="text-rose-600/80 font-medium text-sm mb-4">Sayang sekali, koneksinya terputus.</p>
                <div class="w-full bg-rose-50 text-rose-800 text-xs font-mono p-4 rounded-xl border border-rose-200 text-left overflow-x-auto shadow-inner">
                    <strong>Error Log:</strong><br>' . mysqli_connect_error() . '
                </div>
            </div>';
        } else {
            
            echo '
            <div class="flex flex-col items-center">
                <div class="w-20 h-20 bg-pink-100 text-pink-500 rounded-full flex items-center justify-center mb-6 border-4 border-pink-50 shadow-md">
                    <!-- Ikon Centang Hati/Cute -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                    </svg>
                </div>
                <h1 class="text-2xl font-bold text-pink-600 mb-2">Sukses Terhubung!</h1>
                <p class="text-pink-500 font-medium mb-1">Database MySQL Berhasil Diakses</p>
                <p class="text-xs text-pink-400 mb-6">Selamat Datang di Proyek PHP Docker!.</p>
                
                <!-- Info Box -->
                <div class="w-full bg-pink-50/60 rounded-xl p-4 border border-pink-100 text-left text-xs text-pink-600 space-y-2">
                    <div class="flex justify-between items-center">
                        <span class="font-medium text-pink-700/70">Host:</span> 
                        <span class="font-mono bg-white px-2 py-0.5 rounded-md border border-pink-200 text-pink-600 shadow-sm">' . $host . '</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-medium text-pink-700/70">Database:</span> 
                        <span class="font-mono bg-white px-2 py-0.5 rounded-md border border-pink-200 text-pink-600 shadow-sm">' . $db . '</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-medium text-pink-700/70">Status:</span> 
                        <span class="text-pink-600 font-bold flex items-center gap-1.5 bg-white px-2 py-0.5 rounded-md border border-pink-200 shadow-sm">
                            <span class="w-2 h-2 rounded-full bg-pink-500 animate-ping"></span> 
                            Online
                        </span>
                    </div>
                </div>
            </div>';
            mysqli_close($conn);
        }
        ?>

    </div>

</body>
</html>