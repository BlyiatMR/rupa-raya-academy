<script>
export default {
  data() {
    return {
      benefitColumn1: [
        "Pembelajaran dari Ahli",
        "Membuat Aplikasi Android",
        "Pengalaman Baru",
        "Fundamental Flutter & Dart",
      ],
      benefitColumn2: [
        "Voucher Discount Kelas Lain",
        "Bebas Konsultasi Setelah Kelas",
        "Sertifikat Kelas",
        "Kesempatan Magang",
      ],
      tools: [
        { src: "/images/vscode.jpg", alt: "VSCode" },
        { src: "/images/flutter-class/android-studio.jpg", alt: "Android Studio" },
      ],
    };
  },
};
</script>
<template>
    <div class="space-y-7">
        <h1 class="text-3xl tracking-wide text-white font-semibold">Kelas Flutter Mobile Apps Development</h1>
        <hr class="h-px my-8 border-0 bg-gray-600">
        <p class="tracking-wider leading-normal text-gray-300 sm:text-lg text-base">Kuasai kemampuan membangun aplikasi mobile modern berbasis Flutter. Kelas ini dirancang untuk Pemula Maupun Profesional yang ingin meningkatkan skill melalui studi kasus nyata dan bimbingan mentor berpengalaman.</p>
        <p class="tracking-wider leading-normal text-gray-300 sm:text-lg text-base">Belajar lebih mudah dengan Materi yang Terstruktur, Praktik Langsung, dan fokus pada kebutuhan industri. Mulai dari desain UI responsif, integrasi API, hingga publikasi aplikasi di Play Store dan App Store, semua dipandu langkah demi langkah.</p>
        <p class="tracking-wider leading-normal text-white font-bold sm:text-lg text-base">Kami Akan Menyediakan Fasilitas Selama Sesi Pembelajaran Berupa Personal Computer dengan Spesiffikasi Tinggi Untuk Tiap Peserta Selama Masa Pembelajaran.</p>
        <div class="flex sm:gap-20 gap-3 flex-wrap">
            <div>
              <p v-for="(benefit, index) in benefitColumn1" :key="index" class="tracking-wider leading-normal text-gray-300 sm:text-lg text-base">
                <i class="fa-solid fa-check text-gray-300 mr-2"></i> {{ benefit }}
              </p>
            </div>
            <div>
              <p v-for="(benefit, index) in benefitColumn2" :key="index" class="tracking-wider leading-normal text-gray-300 sm:text-lg text-base">
                <i class="fa-solid fa-check text-gray-300 mr-2"></i> {{ benefit }}
              </p>
            </div>
        </div>
        <div>
            <h3 class="tracking-wider leading-normal text-gray-300 sm:text-lg text-lg">
              Tools yang Digunakan:
            </h3>
            <div class="flex gap-5 pt-3">
              <div
                v-for="(tool, index) in tools"
                :key="index"
                class="flex flex-col gap-2 items-center"
              >
                <img class="w-20" :src="tool.src" :alt="tool.alt" />
              </div>
            </div>
        </div>
        <div>
            <h3 class="tracking-wider leading-normal text-gray-300 sm:text-lg text-lg">Lokasi Kelas:</h3>
            <div class="flex relative flex-col flex-wrap gap-1.5 items-start self-stretch mt-3 text-base text-white rounded-md min-h-[477px] max-md:px-5 max-md:pt-24">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.467545816472!2d119.42170527426846!3d-5.143194652003857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee30045e23b87%3A0xb428b7d955e91c29!2sPT%20Rupa%20Raya%20Indonesia!5e1!3m2!1sid!2sid!4v1724295033623!5m2!1sid!2sid" class="object-cover absolute inset-0 size-full rounded-2xl shadow-inner-md  " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</template>