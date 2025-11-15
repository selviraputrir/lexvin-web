import './bootstrap';

// 1. Impor library AOS (JavaScript dan CSS-nya)
import AOS from 'aos';
import 'aos/dist/aos.css';

// 2. Inisialisasi (jalankan) AOS
// Anda bisa tambahkan pengaturan di sini jika mau
AOS.init({
    duration: 1000, // durasi animasi dalam milidetik
    once: true,     // apakah animasi hanya berjalan sekali
});
