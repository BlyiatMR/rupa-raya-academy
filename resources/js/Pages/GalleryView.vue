<script lang="jsx" setup>
import Navbar from '@/Components/Navbar.vue';
import CtaHome from '@/Components/CtaHome.vue';
import Footer from '@/Components/Footer.vue';

Fancybox.bind("[data-fancybox='gallery']", {
  infinite: false,
});

const GalleryImage = ({ src }) => (
  <div class="relative overflow-hidden rounded-lg">
    <a href={src} data-fancybox="gallery">
      <img
        src={src}
        alt="Gallery Image"
        class="object-cover w-80 h-72 scale-150 transition-transform hover:opacity-50 duration-300"
      />
    </a>
  </div>
);
</script>

<template>
  <Head title="Welcome" />

  <div class="font-['Urbanist'] relative overflow-x-hidden bg-gradient-to-br from-[#0F0F0F] to-[#0D1B2A] z-50">
    <!-- Navbar -->
    <Navbar />

    <div class="absolute -top-52 -left-52 blur-[200px] opacity-20 -z-10 w-[40rem] h-[40rem] bg-blue-500 rounded-full"></div>
    <div class="absolute -top-52 -right-52 blur-[200px] opacity-20 -z-10 w-[35rem] h-[35rem] bg-yellow-500 rounded-full"></div>

    <!-- Galeri Section -->
    <section>
      <div class="max-w-[1440px] mx-auto sm:pt-40 pt-20 px-5">
        <div class="py-10 text-center">
          <h3 class="text-xl font-semibold text-blue-500">Galeri Kami</h3>
          <h1 class="mt-5 mb-5 text-2xl font-extrabold leading-tight tracking-wide text-transparent bg-gradient-to-r from-gray-500 via-white to-gray-500 bg-clip-text sm:text-5xl">
            . . .Inspirasi dari Rupa Raya Academy. . .
          </h1>
          <p class="max-w-4xl mx-auto text-lg text-gray-300 tracking-wide leading-normal sm:text-base">
            Koleksi foto dan video yang mengabadikan suasana kelas, proyek-proyek peserta, hingga acara eksklusif bersama para profesional.
          </p>
        </div>
      </div>

      <!-- Main Gallery Image -->
      <div class="relative">
        <img 
          class="w-full shadow-blue-600 drop-shadow-2xl" 
          src="/images/gallery/gallery-main.jpg" 
          alt="Galeri Utama"
        />
      </div>

      <!-- Gallery Description -->
      <div class="max-w-[1440px] mx-auto py-10 px-5 text-center">
        <p class="max-w-4xl mx-auto text-lg text-gray-300 tracking-wide leading-normal sm:text-base">
          Foto yang menunjukkan suasana belajar seru dan kolaboratif di kelas kami. Peserta terlihat antusias dan aktif berinteraksi dengan mentor.
        </p>

        <!-- Gallery Images -->
        <div class="flex flex-wrap justify-center gap-5 mt-10">
          <GalleryImage src="/images/gallery/img-8.jpg" />
          <GalleryImage src="/images/gallery/img-1.jpg" />
          <GalleryImage src="/images/gallery/img-2.jpg" />
          <GalleryImage src="/images/gallery/img-3.jpg" />
          <GalleryImage src="/images/gallery/img-4.jpg" />
          <GalleryImage src="/images/gallery/img-5.jpg" />
          <GalleryImage src="/images/gallery/img-6.jpg" />
          <GalleryImage src="/images/gallery/img-7.jpg" />
        </div>
      </div>
    </section>

    <!-- CTA and Footer -->
    <CtaHome />
    <Footer />
  </div>
</template>